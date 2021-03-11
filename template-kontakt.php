<?php
/**
 * Template Name: Kontakt
 */

use function App\Helper\filter_html_text;

$kontakt = get_fields();
$mapa = $kontakt['mapa'];
?>

<div class="hero-sm">
  <div class="container">
    <div class="row">
      <div class="offset-xl-1 col-xl-14">
        <?php if( ! empty( $kontakt['naglowek'])): ?>
          <h1><?php echo filter_html_text( $kontakt['naglowek']); ?></h1>
        <?php endif; ?>
        <?php if( ! empty( $kontakt['opis'])): ?>
          <p class="mb-4"><?php echo filter_html_text( $kontakt['opis']); ?></p>
        <?php endif; ?>

        <?php if( ! empty( $kontakt['lista'])): ?>
          <div class="row justify-content-center">
            <?php foreach( $kontakt['lista'] as $row): ?>
            <div class="col-lg-8">
              <div class="card mb-4 mb-lg-0 text-left" data-toggle="modal" data-target="#contactPlan">
                <div class="card-body">
                  <?php if( ! empty( $row['naglowek'])): ?>
                    <h2 class="h3 mb-3"><?php echo filter_html_text( $row['naglowek']); ?></h2>
                  <?php endif; ?>                 
                  <?php if( ! empty( $row['opis'])): ?>
                    <p class="mb-4"><?php echo filter_html_text( $row['opis']); ?></p>
                  <?php endif; ?>
                  <?php if( ! empty( $row['przycisk'])): ?>
                  <a href="<?php echo esc_url( $row['przycisk']['url']); ?>" class="btn-more-sm"><?php echo filter_html_text( $row['przycisk']['title']); ?>
                    <div>
                      <?php include( get_theme_file_path( "/templates/partials/svg/read-more.php" ) ); ?>
                    </div>
                  </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <div class="hero-sm-bg">
          <?php include( get_theme_file_path( "/templates/partials/svg/circle-inside.php" ) ); ?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="contact-location section mt-0">
  <div class="container">
    <div class="row">
      <div class="offset-1 offset-lg-0 offset-xl-1 col-xl-4 col-md-5">
        <?php if( ! empty( $mapa['naglowek'])): ?>
          <h2 class="mb-5"><?php echo filter_html_text( $mapa['naglowek']); ?></h2>
        <?php endif; ?>
        <div class="contact-location-info">
          <h3 class="mb-1"><?php echo filter_html_text( $mapa['nazwa_punktu_na_mapie']); ?></h3>
          <p class="mb-4"><?php echo filter_html_text( $mapa['opis_punktu']); ?></p>
          <address class="mb-4"><?php echo filter_html_text( $mapa['adres']); ?></address>
          <p><?php echo filter_html_text( $mapa['identyfikatory']); ?></p>
        </div>
      </div>
      <div class="col-sm-10 col-lg-11">
        <img class="ml-auto" src="<?= get_template_directory_uri() ?>/dist/images/map.svg" alt="Mapa">
      </div>
    </div>
  </div>
</div>

<?php include( get_theme_file_path( "/templates/components/start-meeting.php" ) ); ?>

