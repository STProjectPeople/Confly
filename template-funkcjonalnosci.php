<?php
/**
 * Template Name: Funkcjonalności
 */

use function \App\Helper\filter_html_text;

?>

<?php
// Funkcjonalnosci
$fun_naglowek = get_field( 'fun_naglowek' );
$fun_lista    = get_field( 'fun_lista' );
$fun_przycisk = get_field( 'fun_przycisk' );
// --------------------------------------------------
// $hero_title            = 'Confly&nbsp;to&nbsp;Twoja aplikacja do wideorozmowy';
// $hero_sub_title        = '';
// $hero_desc             = 'Spośród wszystkich aplikacji do wideorozmów, Confly wyróżnia się nie tylko jakością połączenia i&nbsp;bezpieczeństwem, ale przede wszystkim wyselekcjonowanymi funkcjonalnościami, które pomogą Ci zwiększyć efektywność spotkań.';
// $hero_primary_btn_text = 'Rozpocznij spotkanie';
// $hero_link_btn_text    = 'Zobacz wszystkie plany';
// $hero_link_btn_url     = '/cennik/';
// $hero_image_url        = get_template_directory_uri() . '/dist/images/hero-funkcjonalnosci-image-2.png';

$sekcja1 = get_field( 'sekcja1');
$sekcja2 = get_field( 'sekcja2');
?>

<?php include( get_theme_file_path( "/templates/components/hero.php" ) ); ?>


  <div class="advantages section-overflow section section-bg section-bg-light-g">
    <div class="container">
      <?php if( ! empty( $sekcja2['naglowek'])): ?>
        <h2 class="h1 mb-8"><?php echo filter_html_text( $sekcja2['naglowek']); ?></h2>
      <?php endif; ?>
      <div class="nav-links-2">
        <?php if( ! empty( $sekcja2['lista'])): ?>
        <div class="row">
          <div class="col-lg-7">
            <div class="nav-links-2-links">
              <?php $item=1; ?>
              <?php foreach( $sekcja2['lista'] as $row): ?>
              <div class="nav-links-2-item nav-links-2-item-<?php echo $item++;?>">
                <div class="nav-links-2-item-content">
                  <?php if( ! empty( $row['naglowek'])): ?>
                    <h3 class="nav-links-2-item-title"><?php echo filter_html_text( $row['naglowek']); ?></h3>
                  <?php endif; ?>
                  <?php if( ! empty( $row['opis'])): ?>
                    <p><?php echo filter_html_text( $row['opis']); ?></p>
                  <?php endif; ?>
                </div>
                <div class="d-lg-none">
                  <?php if( ! empty( $row['obraz'])): ?>
                    <img class="img-fluid" src="<?php echo $row['obraz']['url'];?>" width="<?php echo $row['obraz']['width'];?>" height="<?php echo $row['obraz']['height'];?>" alt="" loading="lazy">
                  <?php endif; ?>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>

          <?php if( ! empty( $sekcja2['lista'])): ?>
          <div class="col-lg-9 offset-xl-1 col-xl-7">         
            <div class="nav-links-2-image-container">
              <?php $item=1; ?>
              <?php foreach( $sekcja2['lista'] as $row): ?>                 
                <div class="nav-links-2-item-image">
                  <img class="nav-links-2-item-view-<?php echo $item++;?> img-fluid" src="<?php echo $row['obraz']['url'];?>" width="<?php echo $row['obraz']['width'];?>" height="<?php echo $row['obraz']['height'];?>" alt="Agenda" loading="lazy">
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>

        </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="bg-elements">
      <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bg.php" ) ); ?></div>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bg.php" ) ); ?></div>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/logo-bg.php" ) ); ?></div>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-br-bg.php" ) ); ?></div>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bg.php" ) ); ?></div>
    </div>

  </div>

<?php include( get_theme_file_path( "/templates/components/testimonials.php" ) ); ?>

<?php include( get_theme_file_path( "/templates/components/trusted-us.php" ) ); ?>

  <div class="features-2 bg-elements-container section section-bg section-border">
    <div class="container">
      <h2 class="h1 mb-5"><?php echo filter_html_text( $fun_naglowek ); ?></h2>
      <?php if ( ! empty( $fun_lista ) ): ?>
        <div class="row row-spacer row-cols-1 row-cols-md-2 row-cols-lg-3">
          <?php foreach ( $fun_lista as $row ): ?>
            <?php
            $tytul = filter_html_text( $row['tytul'] );
            $opis  = filter_html_text( $row['opis'] );
            $ikona = $row['ikona'];
            ?>
            <div class="col">
              <div class="features-2-li">
                <div class="features-2-li-header">
                  <h3 class="h4 mb-0"><?php echo $tytul; ?></h3>
                  <?php if ( ! empty( $ikona ) ): ?>
                    <?php $ikona_img = wp_get_attachment_image( $ikona['id'], 'full', false ); ?>
                    <div>
                      <?php echo $ikona_img; ?>
                    </div>
                  <?php endif; ?>
                </div>
                <p><?php echo $opis; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <?php if ( ! empty( $fun_przycisk ) ): ?>
        <div class="row no-gutters">
          <div class="col-lg-5">
            <a href="<?php echo esc_url( $fun_przycisk['url'] ); ?>" class="btn btn-primary w-100 mt-4"><?php echo filter_html_text( $fun_przycisk['title'] ); ?></a>
          </div>
        </div>
      <?php endif; ?>

    </div>
    <div class="bg-elements bg-elements-gray">
      <div><?php include( get_theme_file_path( "/templates/partials/svg/logo-bg.php" ) ); ?></div>
      <div class="brand-pink-color"><?php include( get_theme_file_path( "/templates/partials/svg/circle-tr-bg.php" ) ); ?></div>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bg.php" ) ); ?></div>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bl-bg.php" ) ); ?></div>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bg.php" ) ); ?></div>
    </div>
  </div>

<?php include( get_theme_file_path( "/templates/components/start-meeting.php" ) ); ?>