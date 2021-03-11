<?php use function \App\Helper\filter_html_text; ?>
<?php $pokaz_wideo = ( ! empty($sekcja1['pokaz_wideo'])) && $sekcja1['pokaz_wideo'] && ( ! empty( $sekcja1['link_do_wideo'])); ?>
<div class="hero">
  <div class="container">
    <div class="row">
      <div class="offset-xl-1 col-lg-7 col-xl-6 hero-content">
        <?php if ( ! empty( $sekcja1['naglowek1'] ) ) : ?>
          <p class="hero-title fadeIn mb-2"><?php echo filter_html_text( $sekcja1['naglowek1']); ?></p>
          <?php if ( ! empty( $sekcja1['naglowek2'] ) ) : ?>
            <h1 class="h3 mb-4 fadeIn"><?php echo filter_html_text( $sekcja1['naglowek2']); ?></h1>
          <?php endif; ?>
        <?php else : ?>
          <h1 class="hero-title fadeIn mb-2"><?php echo filter_html_text( $sekcja1['naglowek1']); ?></h1>
        <?php endif; ?>

        <?php if ( ! empty( $sekcja1['opis'] ) ) : ?>
          <p class="mb-6 fadeIn pt-1"><?php echo filter_html_text( $sekcja1['opis']); ?></p>
        <?php endif; ?>
        
        <?php if( ! empty( $sekcja1['przycisk1'])): ?>
        <div class="hero-actions">
          <a href="<?php echo esc_url( $sekcja1['przycisk1']['url']); ?>" class="btn btn-primary"><?php echo filter_html_text( $sekcja1['przycisk1']['title']); ?></a>
          <?php if( ! empty( $sekcja1['przycisk2'])): ?>
            <a <?php echo ( $pokaz_wideo) ? 'data-toggle="modal" data-target="#modalVideo"' : '' ?> 
                    href="<?php echo esc_url( $sekcja1['przycisk2']['url']); ?>" class="btn btn-link btn-more-sm ml-lg-2">
                <?php echo filter_html_text( $sekcja1['przycisk2']['title']); ?>
              <div>                
                <?php if( $pokaz_wideo) : ?>
                  <?php include( get_theme_file_path( "/templates/partials/svg/play.php" ) ); ?>
                <?php else : ?>
                  <?php include( get_theme_file_path( "/templates/partials/svg/read-more.php" ) ); ?>
                <?php endif; ?>
              </div>
            </a>
          <?php endif; ?>
        </div>
        <?php endif; ?>

      </div>
      <?php if( ! empty( $sekcja1['obraz'])): ?>
        <div class="offset-lg-1 offset-xl-0 col-lg-8 col-xl-9 hero-image">
          <img src="<?php echo esc_url( $sekcja1['obraz']['url']); ?>" width="650" height="490" alt="Hero">
          <?php include( get_theme_file_path( "/templates/partials/svg/circle.php" ) ); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <?php if(is_front_page() || is_page_template('template-home-alternative.php')) : ?>
  <div class="hero-variant-1-bg-elements bg-elements bg-elements-gray">
    <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bl-bg.php" ) ); ?></div>
    <div class="brand-yellow-color"><?php include( get_theme_file_path( "/templates/partials/svg/circle-tr-bg.php" ) ); ?></div>
    <div><?php include( get_theme_file_path( "/templates/partials/svg/logo-bg.php" ) ); ?></div>
  </div>
  <?php elseif(is_page_template('template-funkcjonalnosci.php')) : ?>
    <div class="hero-variant-2-bg-elements bg-elements bg-elements-gray">
      <div><?php include( get_theme_file_path( "/templates/partials/svg/logo-bg.php" ) ); ?></div>
      <div class="brand-pink-color"><?php include( get_theme_file_path( "/templates/partials/svg/circle-tr-bg.php" ) ); ?></div>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bl-bg.php" ) ); ?></div>
      <div class="brand-green-color"><?php include( get_theme_file_path( "/templates/partials/svg/circle-bg.php" ) ); ?></div>
    </div>
  <?php elseif(is_page_template('template-enterprise.php')) : ?>
    <div class="hero-variant-3-bg-elements bg-elements bg-elements-gray">
      <div><?php include( get_theme_file_path( "/templates/partials/svg/logo-bg.php" ) ); ?></div>
      <div class="brand-blue-color"><?php include( get_theme_file_path( "/templates/partials/svg/circle-bl-bg.php" ) ); ?></div>
      <div class="brand-pink-color"><?php include( get_theme_file_path( "/templates/partials/svg/circle-bg.php" ) ); ?></div>
    </div>
  <?php endif; ?>
</div>
<?php if($pokaz_wideo) : ?>
<div id="modalVideo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content modal-transparent">
      <div class="modal-body mb-0 p-0">
        <div class="embed-responsive embed-responsive-16by9">
          <div data-src="<?php echo esc_url( $sekcja1['link_do_wideo']); ?>"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>