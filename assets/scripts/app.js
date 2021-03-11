'use strict';

var App = (function ($) {

  var header = {
    init: function () {
      ScrollTrigger.create({
        start: 'top top',
        end: 99999,
        toggleClass: {className: 'header-sticky', targets: 'body'}
      });
    }
  };

  var nav = {
    states: {
      active: false
    },
    $selectors: {
      nav: $('.nav-primary')
    },
    init: function () {
      this.subMenuActions();
    },
    show: function () {
      var _this = this;
      _this.states.active = true;
      _this.$selectors.nav.show();
      $('body').addClass('menu-activated');
    },
    hide: function () {
      var _this = this;
      _this.states.active = false;
      _this.$selectors.nav.hide();
      $('body').removeClass('menu-activated');
    },
    subMenuActions: function () {
      $('.nav-primary > ul > li.menu-item-has-children > a').on('click', function (e) {
        if (!nav.states.active) return;
        e.preventDefault();

        var $this = $(this);
        var label = $this.text();
        $('.header-nav-label').html(label);
        $(this).parent().addClass('open');
        $('body').addClass('menu-activated-sub-menu');

      });
      $('.header-nav-prev').on('click', function () {
        $('body').removeClass('menu-activated-sub-menu');
        $('.nav-primary > ul > li.menu-item-has-children').removeClass('open');
        $('.header-nav-label').html('');
      });
    }
  };

  var hamburger = {
    states: {
      active: false
    },
    $selectors: {
      root: $('.hamburger-nav')
    },
    init: function () {
      this.events();
    },
    events: function () {
      var _this = this;
      this.$selectors.root.on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.toggleClass('is-active');
        if ($this.hasClass('is-active')) {
          nav.show();
        } else {
          nav.hide();
        }
      });
    }
  };

  var anchors = {
    init: function () {
      $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var $element = $(this);
        var dataSection = $element.attr('data-section');
        var href = $element.attr('href');
        if (href === '#!' || href === '#' || $element.attr('role') === 'tab') return;
        var $section = $(href);
        if (!$section.length) return;
        if (dataSection === 'nav') {
          if (hamburger.$selectors.root.hasClass('is-active')) {
            hamburger.$selectors.root.click();
          }
        }
        $('html, body').animate({
          scrollTop: $section.offset().top - $('.header-content').outerHeight() + 1
        }, 1000);
      });
    }
  };

  var scroll = {
    states: {
      lastScrollTop: $(window).scrollTop()
    },
    update: function () {
      if (scroll.states.lastScrollTop >= $(window).scrollTop()) {
        this.onMouseUp();
      } else {
        this.onMouseDown();
      }
    },
    onMouseDown: function () {
      //header.onMouseDown();
      //fnSlider2.onMouseDown();
    },
    onMouseUp: function () {
      //header.onMouseUp();
    },
    loop: function () {
      if (scroll.states.lastScrollTop === $(window).scrollTop()) {
        requestAnimationFrame(scroll.loop);
        return false;
      } else {
        scroll.update();
        scroll.states.lastScrollTop = $(window).scrollTop();
        requestAnimationFrame(scroll.loop);
      }
    },
    init: function () {
      this.loop();
    }
  };

  var scrollToAfterLoading = {
    init: function () {
      var href = window.location.hash;
      if (href === '#!') return;
      var $section = $(href);
      if (!$section.length) return;
      $('html, body').animate({
        scrollTop: $section.offset().top - $('.header').outerHeight()
      }, 1000);
    }
  };

  var formInfoExpand = {
    init: function () {
      $('body').on('click', '[data-form-info-expand]', function (e) {
        e.stopPropagation();
        e.preventDefault();
        var $this = $(this);
        $this.prev().remove();
        $this.next().removeClass('d-none');
        $this.remove();
      });
    }
  };

  var cookie = {
    write: function (name, value, daysExpire, path) {
      var expireDate = new Date();
      expireDate.setDate(expireDate.getDate() + daysExpire);
      var cookie_value = value;
      if (daysExpire != null) {
        cookie_value += "; expires=" + expireDate.toUTCString();
      }
      if (path != null) {
        cookie_value += "; path=" + path;
      }
      document.cookie = name + "=" + cookie_value;
    }
  };

  var cookieNotice = {
    init: function () {
      $('.cookies-info-close').click(function () {
        $('.cookies-info').hide();
        cookie.write('cookieNotice', 1, 4000, '/');
      });
    }
  };

  var linkOuter = {
    init: function () {
      $('[data-link-outer]').on('click', function (e) {
        e.stopPropagation();
        var $this = $(this);
        window.location.href = $this.find('[data-link-outer-base]').attr('href');
      });
    }
  };

  var forms = {
    init: function () {

      document.addEventListener('wpcf7beforesubmit', function (event) {
        var $btnSubmit = $('.wpcf7 [type="submit"]');
        $btnSubmit.data('tmpValue', $btnSubmit.val());
        $btnSubmit.prop('disabled', true).val('Wysyłanie ...');
      }, false);
      document.addEventListener('wpcf7submit', function (event) {
        var $btnSubmit = $('.wpcf7 [type="submit"]');
        $('.wpcf7 [type="submit"]').prop('disabled', false).val($btnSubmit.data('tmpValue'));
      }, false);
      document.addEventListener('wpcf7mailfailed', function (event) {

      }, false);
      document.addEventListener('wpcf7mailsent', function (event) {

      }, false);
    }
  };

  var plans = {
    init: function () {
      $('[data-toogle-plan]').on('click', function () {
        var $this = $(this);
        $('[data-toogle-plan]').removeClass('active');
        $('[data-toogle-plan="' + $this.attr('data-toogle-plan') + '"]').addClass('active');
        $('[data-plan-option]').attr('data-plan-option', $this.attr('data-toogle-plan'));
      });
    }
  };

  var fnSlider = {
    init: function () {
      $('[data-fn-slider-id]').hover(function () {

        var $this = $(this);

        $('[data-fn-slider-id]').removeClass('active');
        $('[data-fn-slider-item]').removeClass('active');

        $this.addClass('active');
        var id = $this.attr('data-fn-slider-id');
        $('[data-fn-slider-item="' + id + '"]').addClass('active');
      });
    }
  };

  var fnSlider2 = {
    states: {
      activeItem: null
    },
    init: function () {

      var $links = $('.nav-links-2-links');
      ScrollTrigger.matchMedia({
        "(min-width: 1024px)": function () {
          $links.css('top', ( $(window).height() - $links.outerHeight()  ) / 2);
        }
      });
      this.onItemShow();

    },
    onItemShow: function () {
      ScrollTrigger.matchMedia({
        "(min-width: 1024px)": function () {
          ScrollTrigger.create({
            trigger: '.nav-links-2-item-view-1',
            start: 'top bottom',
            end: 'bottom center',
            toggleClass: {className: 'active', targets: '.nav-links-2-item-1'}
          });
          ScrollTrigger.create({
            trigger: '.nav-links-2-item-view-2',
            start: 'bottom bottom',
            end: 'bottom center',
            toggleClass: {className: 'active', targets: '.nav-links-2-item-2'}
          });
          ScrollTrigger.create({
            trigger: '.nav-links-2-item-view-3',
            start: 'bottom bottom',
            end: 'bottom top',
            toggleClass: {className: 'active', targets: '.nav-links-2-item-3'}
          });
        },
        "(max-width: 1023px)": function () {
          ScrollTrigger.create({
            trigger: '.nav-links-2-item-1',
            start: 'center bottom',
            end: 'bottom center',
            toggleClass: {className: 'active', targets: '.nav-links-2-item-1'}
          });
          ScrollTrigger.create({
            trigger: '.nav-links-2-item-2',
            start: 'center bottom',
            end: 'bottom center',
            toggleClass: {className: 'active', targets: '.nav-links-2-item-2'}
          });
          ScrollTrigger.create({
            trigger: '.nav-links-2-item-3',
            start: 'center bottom',
            end: 'bottom center',
            toggleClass: {className: 'active', targets: '.nav-links-2-item-3'}
          });
        }
      });

    },
    updateActiveItem: function () {

    }
  };

  var init = function () {
    header.init();
    nav.init();
    hamburger.init();
    scrollToAfterLoading.init();
    anchors.init();
    scroll.init();
    linkOuter.init();
    forms.init();
    plans.init();
    fnSlider.init();
    fnSlider2.init();
    cookieNotice.init();
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
    $('#modalVideo').on('show.bs.modal', function (e) {
      var $this = $(this);
      var iframe = document.createElement('iframe');
      iframe.src = $this.find('[data-src]').attr('data-src');
      $this.find('.embed-responsive').append(iframe);
    });
    gsap.utils.toArray('.fadeIn').forEach(function (box) {
      gsap.fromTo(box, {
        autoAlpha: 0,
        y: 50,
        x: 50
      }, {
        scrollTrigger: {
          trigger: box,
          once: true
        },
        duration: 1,
        autoAlpha: 1,
        y: 0,
        x: 0,
        onStart: function () {
          TweenMax.fromTo('.circle-outside', 1, {scale: 1}, {scale: 1.1, ease: "power1.inOut", transformOrigin: "center center", repeat: 5, yoyo: true});
        }
      });
    });
  };


  return {
    init: init
  };

})(jQuery);

jQuery(document).ready(App.init());
