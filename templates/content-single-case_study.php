<?php

use function \App\Helper\filter_html_text; ?>

<?php while ( have_posts() ) : the_post(); ?>

  <?php
  $excerpt       = filter_html_text( get_the_excerpt( $post ) );
  $logo          = get_field( 'logo' );
  $logo_mono     = get_field( 'logo_monochromatyczne' );
  $cytat         = filter_html_text( get_field( 'cytat' ) );
  $imie_nazwisko = filter_html_text( get_field( 'imie_nazwisko' ) );
  $stanowisko    = filter_html_text( get_field( 'stanowisko' ) );
  $branza        = filter_html_text( get_field( 'branza' ) );
  $liczba_prac   = filter_html_text( get_field( 'liczba_pracownikow' ) );
  $wsparcie      = filter_html_text( get_field( 'wsparcie_ze_strony_confly' ) );

// wp_get_attachment_image( $logo['id'], 'medium_large', false, ['class' => 'img-fluid'] );
// wp_get_attachment_image( $logo_mono['id'], 'medium_large', false, ['class' => 'img-fluid'] );
  ?>
  <article <?php post_class( 'pt-5' ); ?>>
    <div class="container">
      <header>
        <div class="entry-image">
          <div class="row">
            <div class="offset-2 col-12 offset-sm-1 col-xl-8">
              <h1 class="entry-title h2"><?php the_title(); ?></h1>
              <p class="byline author vcard"><a href="<?= get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
            </div>
          </div>
          <?php the_post_thumbnail(); ?>
        </div>
      </header>
      <div class="entry-content">
        <div class="row">
          <div class="col-lg-10 offset-xl-1 col-xl-8">
            <?php the_content(); ?>
          </div>
          <div class="col-lg-6 offset-xl-1 col-xl-5">
            <div class="entry-col-sticky">
              <div class="case-study-summary">
                <p class="case-study-summary-title"><?php _e('Podsumowanie', 'confly')?></p>
                <p class="h4 mb-1"><?php _e('Branża', 'confly')?></p>
                <p class="mb-4"><?= $branza ?></p>
                <p class="h4 mb-1"><?php _e('Liczba pracowników', 'confly')?></p>
                <p class="mb-4"><?= $liczba_prac ?></p>
                <p class="h4 mb-1"><?php _e('Wsparcie ze strony Confly', 'confly')?></p>
                <p><?= $wsparcie ?></p>
                <button class="btn btn-primary mt-3 w-100 mb-0" data-toggle="modal" data-target="#contactPlan"><?php _e('Wyślij wiadomość', 'confly')?></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $casestudies = \App\Helper\get_newest_posts( 'case_study', 2 ); ?>
      <?php if ( ! empty( $casestudies ) ): ?>
        <aside class="section">

          <div class="row">
            <div class="offset-lg-1 col-lg-14">
              <h2 class="mb-8"><?php _e('Mogą Cię również zainteresować', 'confly')?></h2>
            </div>
          </div>

          <div class="row case-studies">

            <?php foreach ( $casestudies as $casestudy ): ?>
              <?php
              $excerpt       = filter_html_text( get_the_excerpt( $casestudy ) );
              $imie_nazwisko = filter_html_text( get_field( 'imie_nazwisko', $casestudy ) );
              $stanowisko    = filter_html_text( get_field( 'stanowisko', $casestudy ) );
              $url           = get_post_permalink( $casestudy );
              $logo          = get_field( 'logo', $casestudy );
              $logo_img      = wp_get_attachment_image( $logo['id'], 'medium_large', false );
              ?>
              <div class="col-sm-8 offset-lg-1 col-lg-4">
                <div class="case-study-box">
                  <?php if ( ! empty( $logo ) ): ?>
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

        </aside>
      <?php endif; ?>
    </div>
  </article>

<?php endwhile; ?>
