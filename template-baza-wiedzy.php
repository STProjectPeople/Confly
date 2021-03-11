<?php
/**
 * Template Name: Baza wiedzy
 */

$popularne = get_field( 'najpopularniejsze', 'options');
$wpisy = \App\Helper\get_newest_posts( 'post', 3);
$webinary = \App\Helper\get_newest_posts( 'webinar', 3);
$podcasty = \App\Helper\get_newest_posts( 'podcast', 3);
$wideo = \App\Helper\get_newest_posts( 'wideo', 3);

?>

<div class="section section-top">
  <div class="container">
    <h2 class="mb-4"><?php _e('Wykorzystaj nasze materiały', 'confly')?></h2>
    <?php include( get_theme_file_path( "/templates/partials/baza-wiedzy-menu.php" ) ); ?>

    <?php if( ! empty( $popularne)): ?>
      <section>
        <h2 class="h3 mt-8 mb-4"><?php _e('Najpopularniejsze', 'confly')?></h2>
        <?php $post_box = $popularne[0]; ?>
        <?php include( get_theme_file_path( "/templates/components/entry-box-featured.php" ) ); ?>

        <?php if( count( $popularne) > 1): ?>
          <div class="row row-spacer row-cols-1 row-cols-md-2 row-cols-xl-3 mt-6">
            <?php for( $i=1; ($i < count( $popularne) && ($i < 4)); $i++): ?>
                <?php $post_box = $popularne[$i]; ?>
                <div class="col">
                  <?php include( get_theme_file_path( "/templates/components/entry-box.php" ) ); ?>
                </div>
            <?php endfor; ?>
          </div>
        <?php endif; ?>

      </section>
    <?php endif; ?>

    <?php if( ! empty( $wpisy)): ?>
      <section>
        <div class="knowledge-header mt-5">
          <div class="row">
            <div class="col-lg-12">
              <div class="knowledge-title">
                <h2 class="h3 mb-0"><?php _e('Ostatnio na blogu', 'confly')?></h2>
              </div>
            </div>
            <div class="col-lg-4">
              <a class="btn btn-outline-primary w-100" href="<?= get_permalink( get_option( 'page_for_posts' ) ) ?>"><?php _e('Zobacz wszystkie', 'confly')?></a>
            </div>
          </div>
        </div>

        <div class="row row-spacer row-cols-1 row-cols-md-2 row-cols-xl-3">
          <?php foreach( $wpisy as $wpis): ?>
            <?php $post_box = $wpis; ?>
            <div class="col">
              <?php include( get_theme_file_path( "/templates/components/entry-box.php" ) ); ?>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>


    <?php if( ! empty( $webinary)): ?>
      <section>
        <div class="knowledge-header mt-5">
          <div class="row">
            <div class="col-lg-12">
              <div class="knowledge-title">
                <h2 class="h3 mb-0"><?php _e('Webinary', 'confly')?></h2>
              </div>
            </div>
            <div class="col-lg-4">
              <a class="btn btn-outline-primary w-100" href="<?= get_permalink( get_option( 'page_for_posts' ) ) ?>"><?php _e('Zobacz wszystkie', 'confly')?></a>
            </div>
          </div>
        </div>
        <div class="row row-spacer row-cols-1 row-cols-md-2 row-cols-xl-2">
          <?php foreach( $webinary as $webinar): ?>
            <?php $post_box = $webinar; ?>
            <div class="col">
              <?php include( get_theme_file_path( "/templates/components/entry-box.php" ) ); ?>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php if( ! empty( $podcasty)): ?>
      <section>
        <div class="knowledge-header mt-5">
          <div class="row">
            <div class="col-lg-12">
              <div class="knowledge-title">
                <h2 class="h3 mb-0"><?php _e('Podcasty', 'confly')?></h2>
              </div>
            </div>
            <div class="col-lg-4">
              <a class="btn btn-outline-primary w-100" href="<?= get_permalink( get_option( 'page_for_posts' ) ) ?>"><?php _e('Zobacz wszystkie', 'confly')?></a>
            </div>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-1">
          <?php foreach( $podcasty as $podcast): ?>
            <?php $post_box = $podcast; ?>
            <div class="col">
              <?php include( get_theme_file_path( "/templates/components/entry-box-horizontal.php" ) ); ?>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>


    <?php if( ! empty( $wideo)): ?>
      <section>
        <div class="knowledge-header mt-5">
          <div class="row">
            <div class="col-lg-12">
              <div class="knowledge-title">
                <h2 class="h3 mb-0"><?php _e('Wideo poradniki', 'confly')?></h2>
              </div>
            </div>
            <div class="col-lg-4">
              <a class="btn btn-outline-primary w-100" href="<?= get_permalink( get_option( 'page_for_posts' ) ) ?>"><?php _e('Zobacz wszystkie', 'confly')?></a>
            </div>
          </div>
        </div>
        <div class="row row-spacer row-cols-1 row-cols-md-2 row-cols-xl-2">
          <?php foreach( $wideo as $wideo_post): ?>
            <?php $post_box = $wideo_post; ?>
            <div class="col">
              <?php include( get_theme_file_path( "/templates/components/entry-box.php" ) ); ?>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>    




  </div>
</div>
