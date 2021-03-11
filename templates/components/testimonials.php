<?php

use function \App\Helper\filter_html_text;

$wybrane_opinie = get_field( 'wybrane_opinie', 'options');

?>

<?php if( ! empty( $wybrane_opinie)): ?>
  
<div class="testimonials section section-bg section-bg-light-y">
  <div class="container">
    <div class="row">
      <div class="offset-xl-1 col-xl-14">
        <div class="testimonials">


          <?php for( $i=0; ($i < 2) && ($i < count( $wybrane_opinie)); $i++): ?>
            <?php 
              $opinia_post = $wybrane_opinie[$i];
              $zdjecie = get_field( 'zdjecie', $opinia_post);
              $zdjecie_img = wp_get_attachment_image( $zdjecie['id'], 'thumbnail', false );

              $logo = get_field( 'logo', $opinia_post);
              $logo_img = wp_get_attachment_image( $logo['id'], 'full', false);

              $opinia_tekst = filter_html_text( get_field( 'opinia', $opinia_post));
              $imie_nazwisko = filter_html_text( get_field( 'imie_nazwisko', $opinia_post));
              $stanowisko = filter_html_text( get_field( 'stanowisko', $opinia_post));
            ?>
          <div class="testimonial-box">
            <div class="testimonial-box-content">
              <div class="mb-4 d-lg-none">
                <?php echo $logo_img; ?>
              </div>
              <p><?php echo $opinia_tekst; ?></p>
            </div>
            <div class="testimonial-box-sign">
              <div class="testimonial-box-sign-image">
                <?php echo $zdjecie_img; ?>
              </div>
              <div>
                <div class="font-bold"><?php echo $imie_nazwisko; ?></div>
                <div><?php echo $stanowisko; ?></div>
              </div>
              <div class="ml-auto d-none d-lg-block">
                <?php echo $logo_img; ?>
              </div>
            </div>
          </div>
          <?php endfor; ?>

        </div>
      </div>
    </div>
  </div>
  <div class="bg-elements">
    <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bg.php" ) ); ?></div>
    <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-tl-bg.php" ) ); ?></div>
    <div><?php include( get_theme_file_path( "/templates/partials/svg/logo-bg.php" ) ); ?></div>
    <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bg.php" ) ); ?></div>
  </div>
</div>
<?php endif; ?>