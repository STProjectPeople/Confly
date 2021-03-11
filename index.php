<div class="section section-top">
  <div class="container">
    <h1 class="h2 mb-4"><?php _e('Wykorzystaj nasze materiały', 'confly')?></h1>
    <?php include( get_theme_file_path( "/templates/partials/baza-wiedzy-menu.php" ) ); ?>

    <?php if ( ! have_posts() ) : ?>
      <div class="alert alert-warning">
        <?php _e( 'Sorry, no results were found.', 'sage' ); ?>
      </div>
    <?php endif; ?>

    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format() ); ?>
    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>
  </div>
</div>