<?php
/**
 * Template Name: Firma
 */

use function App\Helper\filter_html_text;

$fields = get_fields();
$sekcja1 = $fields['sekcja1'];
$sekcja2 = $fields['sekcja2'];
$sekcja3 = $fields['sekcja3'];
$sekcja4 = $fields['sekcja4'];
?>

<div class="hero-sm bg-elements-container">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <?php if( ! empty( $sekcja1['naglowek'])): ?>
          <h1><?php echo filter_html_text( $sekcja1['naglowek']); ?></h1>
        <?php endif; ?>
        <?php if( ! empty( $sekcja1['opis'])): ?>
          <p class="mb-4"><?php echo filter_html_text( $sekcja1['opis']); ?></p>
        <?php endif; ?>
        <div class="hero-sm-actions">
          <?php if( ! empty( $sekcja1['przycisk1'])): ?>
            <a href="<?php echo esc_url( $sekcja1['przycisk1']['url']); ?>" class="btn btn-primary"><?php echo filter_html_text( $sekcja1['przycisk1']['title']); ?></a>
          <?php endif; ?>
          <?php if( ! empty( $sekcja1['przycisk2'])): ?>
            <a href="<?php echo esc_url( $sekcja1['przycisk2']['url']); ?>" class="btn btn-link btn-more-sm ml-lg-2"><?php echo filter_html_text( $sekcja1['przycisk2']['title']); ?>
              <div>
                <?php include( get_theme_file_path( "/templates/partials/svg/read-more.php" ) ); ?>
              </div>
            </a>
          <?php endif; ?>
        </div>
        <div class="hero-sm-bg">
          <?php include( get_theme_file_path( "/templates/partials/svg/circle-inside.php" ) ); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-variant-2-bg-elements bg-elements bg-elements-gray">
    <div><?php include( get_theme_file_path( "/templates/partials/svg/logo-bg.php" ) ); ?></div>
    <div class="brand-pink-color"><?php include( get_theme_file_path( "/templates/partials/svg/circle-tr-bg.php" ) ); ?></div>
    <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bl-bg.php" ) ); ?></div>
    <div class="brand-green-color"><?php include( get_theme_file_path( "/templates/partials/svg/circle-bg.php" ) ); ?></div>
  </div>
</div>

<div id="about" class="who-we-are section mt-0">
  <div class="container">
    <div class="image-box content-blur">
      <div class="image-box-content">
        <div class="row">
          <div class="offset-2 col-12 offset-xl-3 col-xl-10 text-center">
            <?php if( ! empty( $sekcja2['naglowek'])): ?>
              <h2 class="h1"><?php echo filter_html_text( $sekcja2['naglowek']); ?></h2>
            <?php endif; ?>
            <?php if( ! empty( $sekcja2['opis'])): ?>
              <p class="mb-5"><?php echo filter_html_text( $sekcja2['opis']); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="image-box-content-blur">
        <div class="row">
          <div class="offset-2 col-12 offset-md-1 col-md-14">
            <div class="row">
              <div class="col-lg-6">
                <?php if( ! empty( $sekcja2['naglowek_listy'])): ?>
                  <h2 class="text-white mb-5"><?php echo filter_html_text( $sekcja2['naglowek_listy']); ?></h2>
                <?php endif; ?>
              </div>
              <?php if( ! empty( $sekcja2['lista'])): ?>
              <div class="col-lg-10">
                <div class="row row-cols-1 row-cols-md-2">                
                <?php foreach( $sekcja2['lista'] as $row): ?>
                  <div class="col">
                    <div class="value">
                      <div class="value-header">
                        <?php if( ! empty( $row['ikona'])): ?>
                          <div><img src="<?php echo $row['ikona']['url']; ?>" loading="lazy"></div>
                        <?php endif; ?>
                        <?php if( ! empty( $row['naglowek'])): ?>
                          <h3 class="text-white mb-0"><?php echo $row['naglowek']; ?></h3>
                        <?php endif; ?>
                      </div>
                      <?php if( ! empty( $row['opis'])): ?>
                        <p><?php echo $row['opis']; ?></p>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endforeach; ?>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="image-box-bg">
        <img width="1920" height="1280" src="<?= get_template_directory_uri() ?>/dist/images/image-box-bg-kim-jestesmy.jpg" loading="lazy">
      </div>
    </div>
  </div>
</div>

<div class="section bg-elements-container section-bg section-bg-light-p">
  <div class="container">
    <div class="row">
      <div class="offset-xl-1 col-xl-14">
        <div class="row align-items-center">
          <div class="col-md-8 col-lg-7">
            <?php if( ! empty( $sekcja3['naglowek'])): ?>
              <h2 class="mb-4"><?php echo filter_html_text( $sekcja3['naglowek']); ?></h2>
            <?php endif; ?>
            <?php if( ! empty( $sekcja3['opis'])): ?>
            <p class="mb-6 mb-lg-0"><?php echo filter_html_text( $sekcja3['opis']); ?></p>
            <?php endif; ?>
          </div>
          <div class="col-md-8 offset-lg-1 col-lg-8">
            <?php if( ! empty( $sekcja3['obraz'])): ?>
              <img width="<?php echo $sekcja3['obraz']['width'];?>" height="<?php echo $sekcja3['obraz']['height'];?>" class="img-fluid img-rounded" src="<?php echo $sekcja3['obraz']['url'];?>" loading="lazy">
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-elements">
    <div><?php include( get_theme_file_path( "/templates/partials/svg/logo-bg.php" ) ); ?></div>
    <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bg.php" ) ); ?></div>
    <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bl-bg.php" ) ); ?></div>
  </div>
</div>

<div id="jobs" class="newsletter section-bg section-overflow-h text-center">
  <div class="container">
    <?php if( ! empty( $sekcja4['naglowek'])): ?>
      <h2 class="h1 mb-2"><?php echo filter_html_text( $sekcja4['naglowek']); ?></h2>
    <?php endif; ?>
    <?php if( ! empty( $sekcja4['opis'])): ?>
      <p class="font-size-h3 text-secondary mb-0"><?php echo $sekcja4['opis']; ?></p>
    <?php endif; ?>
  </div>
  <div class="section-bg-circles sm">
    <?php include( get_theme_file_path( "/templates/partials/svg/circle-inside.php" ) ); ?>
  </div>
</div>