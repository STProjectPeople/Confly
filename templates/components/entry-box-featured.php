<?php
/**
 * Args
 * $post_box - Post Object
 */

use function App\Helper\filter_html_text;

$post_type = get_post_type( $post_box );
$title     = filter_html_text( get_the_title( $post_box ) );
$exerpt    = filter_html_text( get_the_excerpt( $post_box ) );
?>

<div class="entry-box-featured">
  <div class="row no-gutters">
	<div class="col-lg-8 col-xl-7">
	  <div class="entry-box-featured-image">

		<?php echo get_the_post_thumbnail( $post_box, 'medium_large' ); ?>

		<div class="entry-box-featured-more d-none d-lg-flex">
		  <a href="<?php echo get_permalink( $post_box ); ?>" class="btn-more-sm text-white"><?php _e( 'Czytaj więcej', 'confly' ); ?>
			<div>
			  <?php require get_theme_file_path( '/templates/partials/svg/read-more.php' ); ?>
			</div>
		  </a>
		</div>
	  </div>
	</div>
	<div class="offset-lg-1 col-lg-7 offset-xl-1 col-xl-8">
	  <?php require get_theme_file_path( '/templates/partials/entry-box-details.php' ); ?>
	  <h2><a href="<?php echo get_permalink( $post_box ); ?>"><?php echo $title; ?></a></h2>
	  <p><?php echo $exerpt; ?></p>
	  <div class="d-lg-none">
		<a href="<?php echo get_permalink( $post_box ); ?>" class="btn-more-sm mt-2"><?php _e( 'Czytaj więcej', 'confly' ); ?>
		  <div>
			<?php require get_theme_file_path( '/templates/partials/svg/read-more.php' ); ?>
		  </div>
		</a>
	  </div>
	</div>
  </div>
</div>
