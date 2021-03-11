<?php
/**
 * Template Name: Enterprise
 */
?>

<?php
// $hero_title            = 'Komunikator wideo dla Twojego&nbsp;biznesu';
// $hero_sub_title        = '';
// $hero_desc             = 'Spośród wszystkich aplikacji do wideorozmów, Confly wyróżnia się nie tylko jakością połączenia i&nbsp;bezpieczeństwem, ale przede wszystkim wyselekcjonowanymi funkcjonalnościami, które pomogą Ci zwiększyć efektywność spotkań.';
// $hero_primary_btn_text = 'Rozpocznij spotkanie';
// $hero_link_btn_text    = 'Zobacz wszystkie plany';
// $hero_link_btn_url = '/cennik/';
// $hero_image_url        = get_template_directory_uri() . '/dist/images/hero-enterprise-image-2.png';

use function \App\Helper\filter_html_text;

$fields = get_fields();
$sekcja1 = $fields['sekcja1'];
$sekcja2 = $fields['sekcja2'];
$sekcja3 = $fields['sekcja3'];
?>

<?php include( get_theme_file_path( "/templates/components/hero.php" ) ); ?>

<div class="features-3 section">
  <div class="container">
    <div class="row">

      <div class="offset-xl-1 col-lg-5 mb-6 mb-lg-0">
        <?php if( ! empty( $sekcja2['naglowek'])): ?>
          <h2 class="h1"><?php echo filter_html_text( $sekcja2['naglowek']); ?></h2>
        <?php endif; ?>
        <?php if( ! empty( $sekcja2['opis'])): ?>
          <p><?php echo filter_html_text( $sekcja2['opis']); ?></p>
        <?php endif; ?>
        <?php if( ! empty( $sekcja2['przycisk'])): ?>
          <a href="<?php echo esc_url( $sekcja2['przycisk']['url']); ?>" class="btn-more-sm mt-2"><?php echo filter_html_text( $sekcja2['przycisk']['title']); ?>
            <div>
              <?php include( get_theme_file_path( "/templates/partials/svg/read-more.php" ) ); ?>
            </div>
          </a>
        <?php endif; ?>
      </div>
      <?php if( ! empty( $sekcja2['lista'])): ?>
        <div class="offset-lg-1 col-lg-10 col-xl-9">
          <div class="row row-cols-1 row-cols-sm-2">
            <?php foreach( $sekcja2['lista'] as $row): ?>
            <div class="col">
              <div class="features-3-li">
                <div class="features-3-li-header">
                  <div><img src="<?php echo $row['ikona']['url']; ?>"></div>
                  <h3 class="h4 mb-0"><?php echo filter_html_text( $row['naglowek']); ?></h3>
                </div>
                <p><?php echo filter_html_text( $row['opis']); ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="features-4 section section-bg section-bg-light-b">
  <div class="container">
    <div class="row">
      <div class="offset-xl-1 col-xl-15">
        <?php if( ! empty( $sekcja3['naglowek'])): ?>
          <h2 class="mb-5"><?php echo filter_html_text( $sekcja3['naglowek']); ?></h2>
        <?php endif; ?>
        <?php if( ! empty( $sekcja3['lista'])): ?>
          <div class="row justify-content-between">
          <?php foreach( $sekcja3['lista'] as $row): ?>
            <div class="col-lg-5">
              <div class="features-4-li mb-5">
                <div class="mb-3"><img src="<?php echo $row['ikona']['url']; ?>"></div>
                <h3><?php echo filter_html_text( $row['naglowek']); ?></h3>
                <p><?php echo filter_html_text( $row['opis']); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        <?php endif;?>
      </div>
    </div>
  </div>
</div>

<?php include( get_theme_file_path( "/templates/components/testimonials.php" ) ); ?>

<?php include( get_theme_file_path( "/templates/components/trusted-us.php" ) ); ?>

<?php include( get_theme_file_path( "/templates/components/start-meeting.php" ) ); ?>
