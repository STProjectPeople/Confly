<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-xl-1 col-xl-8">
          <header>
            <h1 class="entry-title h2"><?php the_title(); ?></h1>
            <?php $post_box = get_post(); ?>
            <?php include( get_theme_file_path( "/templates/partials/entry-box-details.php" ) ); ?>
          </header>
          <div class="entry-content pt-1">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="col-lg-6 offset-xl-1 col-xl-5">
          <div class="entry-col-sticky">
            <?php include( get_theme_file_path( "/templates/components/social-share.php" ) ); ?>
          </div>
        </div>
      </div>

      <?php $wpisy = \App\Helper\get_newest_posts( 'wideo', 2 ); ?>
      <?php if ( ! empty( $wpisy ) ) : ?>
        <aside class="section">
          <div class="row">
            <div class="offset-xl-1 col-xl-14">
              <h2 class="mb-6"><?php _e( 'Mogą Cię również zainteresować', 'confly' ) ?></h2>
              <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2">
                <?php foreach ( $wpisy as $wpis ): ?>
                  <?php $post_box = $wpis; ?>
                  <div class="col">
                    <?php include( get_theme_file_path( "/templates/components/entry-box.php" ) ); ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </aside>
      <?php endif; ?>
    </div>
  </article>

  <?php include( get_theme_file_path( "/templates/components/start-meeting.php" ) ); ?>

<?php endwhile; ?>
