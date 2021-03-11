<?php
/**
 * Template Name: Klienci
 */

 use function \App\Helper\filter_html_text;

 $casestudy_selected = get_field( 'wyroznione_case_study');
 $casestudies = get_field( 'wszystkie_case_studies');
 $naglowek1 = get_field( 'naglowek1');
 $opis = get_field( 'opis');
 $naglowek2 = get_field( 'naglowek2');
 $logotypy = get_field( 'logotypy');
 $naglowek3 = get_field( 'naglowek3');
?>

<div class="hero-sm">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <?php if( ! empty( $naglowek1)): ?>
          <h1><?php echo filter_html_text( $naglowek1); ?></h1>
        <?php endif; ?>
        <?php if( ! empty( $opis)): ?>
          <p class="mb-6"><?php echo filter_html_text( $opis); ?></p>
        <?php endif; ?>
        <?php if( ! empty( $naglowek2)): ?>
          <p class="headline-sm"><?php echo filter_html_text( $naglowek2); ?></p>
        <?php endif; ?>
        <div class="hero-sm-bg">
          <?php include( get_theme_file_path( "/templates/partials/svg/circle-inside.php" ) ); ?>
        </div>
      </div>
    </div>
    <?php if( ! empty( $logotypy)): ?>
      <div class="logos-list">
        <?php foreach( $logotypy as $logo): ?>
        <div><img width="<?php echo $logo['width'];?>" height="<?php echo $logo['height'];?>" src="<?php echo $logo['url'];?>" loading="lazy" alt="Nokia"></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php if( ! empty( $casestudy_selected)): ?>
  <?php 
    $cytat =  filter_html_text( get_field( 'cytat', $casestudy_selected));
    $imie_nazwisko = filter_html_text( get_field( 'imie_nazwisko', $casestudy_selected));
    $stanowisko = filter_html_text( get_field( 'stanowisko', $casestudy_selected));
    $url = get_post_permalink( $casestudy_selected);
    $logo_mono = get_field( 'logo_monochromatyczne', $casestudy_selected);
    $logo_mono_img = wp_get_attachment_image( $logo_mono['id'], 'medium_large', false, ['class' => 'mb-3'] );
  ?>

  <div class="section mt-0">
    <div class="container">
      <div class="image-box">
        <div class="image-box-content">
          <div class="row">
            <div class="offset-2 col-12 col-xl-6">
              <?php if( ! empty( $logo_mono)): ?>
                <?php echo $logo_mono_img; ?>
              <?php endif; ?>
              <p class="h3 text-white mb-2"><?php echo $cytat; ?></p>
              <p class="font-size-emp mb-5"><?php echo $imie_nazwisko . ', ' . $stanowisko; ?></p>
              <a href="<?php echo $url; ?>" class="btn-more-sm text-white"><?php _e('Czytaj case study', 'confly')?>
                <div>
                  <?php include( get_theme_file_path( "/templates/partials/svg/read-more.php" ) ); ?>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="image-box-bg">
          <img src="<?= get_template_directory_uri() ?>/dist/images/image-box-bg.jpg" loading="lazy">
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php include( get_theme_file_path( "/templates/components/numbers.php" ) ); ?>

<?php if( ! empty( $casestudies)): ?>
<div id="case-studies" class="section case-studies">
  <div class="container">
    <div class="row">
      <div class="offset-lg-1 col-lg-14">
        <h2 class="mb-8"><?php echo filter_html_text( $naglowek3); ?></h2>
      </div>
    </div>

    <div class="row">
      
      <?php foreach( $casestudies as $casestudy): ?>
        <?php 
          $excerpt = filter_html_text( get_the_excerpt( $casestudy)); 
          $imie_nazwisko = filter_html_text( get_field( 'imie_nazwisko', $casestudy));
          $stanowisko = filter_html_text( get_field( 'stanowisko', $casestudy));
          $url = get_post_permalink( $casestudy);
          $logo = get_field( 'logo', $casestudy);
          $logo_img = wp_get_attachment_image( $logo['id'], 'medium_large', false);
        ?>
        <div class="col-sm-8 offset-lg-1 col-lg-4">
          <div class="case-study-box">
            <?php if( ! empty( $logo)): ?>
            <div class="case-study-box-image">
              <?php echo $logo_img; ?>
            </div>
            <?php endif; ?>
            <p class="mb-4"><?php echo $excerpt; ?></p>
            <a href="<?php echo $url; ?>" class="btn-more-sm"><?php _e('Czytaj case study', 'confly')?>
              <div>
                <?php include( get_theme_file_path( "/templates/partials/svg/read-more.php" ) ); ?>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</div>
<?php endif; ?>

<?php include( get_theme_file_path( "/templates/components/testimonials.php" ) ); ?>

<?php include( get_theme_file_path( "/templates/components/start-meeting.php" ) ); ?>