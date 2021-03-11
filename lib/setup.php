<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil', [
      'clean-up',
      'disable-asset-versioning',
      'disable-trackbacks',
      'js-to-footer',
      'nav-walker'
  ]);


  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage'),
    'footer_confly_navigation' => __('Confly Footer Navigation', 'sage'),
    'footer_firma_navigation' => __('Firma Footer Navigation', 'sage'),
    'footer_materialy_navigation' => __('Materiały Footer Navigation', 'sage'),
    'footer_dokumenty_navigation' => __('Dokumenty Footer Navigation', 'sage'),
    'dokumenty_navigation' => __('Dokumenty Navigation', 'sage'),
    'baza_wiedzy_navigation' => __('Baza wiedzy Navigation', 'sage'),
    'stopka_landing_navigation' => __('Stopka landing Navigation', 'sage')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  //add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-custom.php'),
  ]);

  return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

add_filter( 'wpcf7_load_css', '__return_false' );

function preload_assets() {

  ?>
  <link rel="preconnect" href="https://use.typekit.net" crossorigin>
  <link rel="dns-prefetch" href="https://use.typekit.net">
  <link rel="preconnect" href="https://p.typekit.net" crossorigin>
  <link rel="dns-prefetch" href="https://p.typekit.net">

  <link rel="dns-prefetch" href="https://www.gstatic.com">
  <link rel="preload" href="https://use.typekit.net/ier1urw.css" as="style">
  <link rel="preload" href="<?= Assets\asset_path('styles/main.css') ?>" as="style">
  <link rel="preload" href="<?= Assets\asset_path('scripts/main.js')?>" as="script">
  <link rel="preload" href="/wp-includes/css/dist/block-library/style.min.css" as="style">
  <?php
}
add_action( 'wp_head', __NAMESPACE__ . '\\preload_assets', 1);

add_filter('the_seo_framework_indicator', '__return_false');
