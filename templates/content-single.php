<?php while ( have_posts() ) :
	the_post(); ?>
  <article <?php post_class( 'pt-5' ); ?>>
	<div class="container">
	  <header>
		<div class="entry-image">
		  <div class="row">
			<div class="offset-2 col-12 offset-sm-1 col-xl-8">
			  <h1 class="entry-title h2"><?php the_title(); ?></h1>
			  <?php get_template_part( 'templates/entry-meta' ); ?>
			</div>
		  </div>
		  <?php the_post_thumbnail(); ?>
		</div>
	  </header>
	  <div class="entry-content">
		<div class="row">
		  <div class="col-lg-16">
			<?php the_content(); ?>
		  </div>
		  <!--<div class="col-lg-6 offset-xl-1 col-xl-5">
			<div class="entry-col-sticky">
			  <div class="toc">
				<p class="toc-title"><?php _e( 'Spis treści', 'sage' ); ?></p>
				<div class="nav-links">
				  <button class="nav-links-item">
					<div class="nav-links-item-number">01.</div>
					<div>Swtórz agendę spotkania</div>
					<div class="nav-links-item-more">
					  <?php include get_theme_file_path( '/templates/partials/svg/read-more.php' ); ?>
					</div>
				  </button>
				  <div class="nav-links">
					<button class="nav-links-item">
					  <div class="nav-links-item-number">02.</div>
					  <div>Swtórz agendę spotkania</div>
					  <div class="nav-links-item-more">
						<?php include get_theme_file_path( '/templates/partials/svg/read-more.php' ); ?>
					  </div>
					</button>
				  </div>
				</div>
			  </div>
			  <?php include get_theme_file_path( '/templates/components/social-share.php' ); ?>
			</div>
		  </div>-->
		</div>
	  </div>
	  <?php $wpisy = \App\Helper\get_newest_posts( 'post', 2 ); ?>
	  <?php if ( ! empty( $wpisy ) ) : ?>
		<aside class="section">
		  <div class="row">
			<div class="offset-xl-1 col-xl-14">
			  <h2 class="mb-6"><?php _e( 'Mogą Cię również zainteresować', 'confly' ); ?></h2>
			  <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2">
				<?php foreach ( $wpisy as $wpis ) : ?>
					<?php $post_box = $wpis; ?>
				  <div class="col">
					<?php include get_theme_file_path( '/templates/components/entry-box.php' ); ?>
				  </div>
				<?php endforeach; ?>
			  </div>
			</div>
		  </div>
		</aside>
	  <?php endif; ?>
	</div>
  </article>

	<?php include get_theme_file_path( '/templates/components/start-meeting.php' ); ?>

<?php endwhile; ?>
