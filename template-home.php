<?php
/**
 * Template Name: home
 */
use function \App\Helper\filter_html_text;

// $hero_title            = 'Meet <br>with <br>results';
// $hero_sub_title        = 'Efektywna wideokonferencja';
// $hero_desc             = 'Wierzymy, że aplikacje do wideokonferencji nie służą tylko łączeniu ludzi na odległość, ale przede wszystkim pomagają zwiększyć efektywność. Dzięki Confly skrócisz czas
// swojej pracy, by skupić na tym, co naprawdę ważne.';
// $hero_primary_btn_text = 'Rozpocznij spotkanie';
// $hero_link_btn_text    = 'Zobacz jak działa Confly';
// $hero_link_btn_url     = '/funkcjonalnosci/';
// $hero_image_url        = get_template_directory_uri() . '/dist/images/hero-image.png';

$acf_fields = get_fields();
$sekcja1    = $acf_fields['sekcja1'];
$sekcja2    = $acf_fields['sekcja2'];
$sekcja3    = $acf_fields['sekcja3'];
$sekcja4    = $acf_fields['sekcja4'];
$sekcja5    = $acf_fields['sekcja5'];
$sekcja6    = $acf_fields['sekcja6'];
?>

<?php require get_theme_file_path( '/templates/components/hero.php' ); ?>

<div class="advantages-top bg-elements-container section section-bg">
  <div class="container">
	<div class="row">
	  <div class="col-lg-6 mb-6 mb-lg-0">
		<?php if ( ! empty( $sekcja2['naglowek'] ) ) : ?>
		  <h2 class="h1"><?php echo filter_html_text( $sekcja2['naglowek'] ); ?></h2>
		<?php endif; ?>
		<?php if ( ! empty( $sekcja2['opis'] ) ) : ?>
		  <p>Jesteś freelancerem, działasz w małej firmie, czy jesteś częścią międzynarodowej korporacji? Różnimy się, dlatego w Confly przeprowadzisz swoje spotkanie tak, jak lubisz, a cele zrealizujesz w zależności od tego, czego potrzebujesz.</p>
		<?php endif; ?>
		<?php if ( ! empty( $sekcja2['przycisk'] ) ) : ?>
		  <a href="<?php echo esc_url( $sekcja2['przycisk']['url'] ); ?>" class="btn btn-primary mt-4"><?php echo filter_html_text( $sekcja2['przycisk']['title'] ); ?></a>
		<?php endif; ?>
	  </div>

	  <?php if ( ! empty( $sekcja2['lista'] ) ) : ?>        
		<div class="offset-xl-1 col-lg-10 col-xl-9">
		  <div class="row row-spacer row-cols-1 row-cols-sm-2">
			<?php foreach ( $sekcja2['lista'] as $row ) : ?>            
				<?php
				if ( empty( $row ) ) {
					continue; }
				?>
			  <div class="col mb-6">
				<?php if ( ! empty( $row['ikona'] ) ) : ?>
				  <img class="mb-2" src="<?php echo $row['ikona']['url']; ?>" width="31" height="31" alt="" loading="lazy">
				<?php endif; ?>
				<h3><?php echo filter_html_text( $row['naglowek'] ); ?></h3>
				<p><?php echo filter_html_text( $row['opis'] ); ?></p>
			  </div>
		  <?php endforeach; ?>
		  </div>
		</div>
	  <?php endif; ?>

	</div>
  </div>
  <div class="bg-elements bg-elements-gray">
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bl-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
	<div class="brand-green-color"><?php require get_theme_file_path( '/templates/partials/svg/circle-bl-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
  </div>
</div>

<div class="advantages bg-elements-container section section-bg section-bg-light-b">
  <div class="container">
	<div class="row">
	  <div class="offset-xl-1 col-xl-8">
		<?php if ( ! empty( $sekcja3['naglowek'] ) ) : ?>
		  <h2 class="h1"><?php echo filter_html_text( $sekcja3['naglowek'] ); ?></h2>
		<?php endif; ?>
		<?php if ( ! empty( $sekcja3['opis'] ) ) : ?>
		  <p class="mb-4"><?php echo filter_html_text( $sekcja3['opis'] ); ?></p>
		<?php endif; ?>
		<?php if ( ! empty( $sekcja3['przycisk'] ) ) : ?>
		  <a href="<?php echo esc_url( $sekcja3['przycisk']['url'] ); ?>" class="btn-more-sm"><?php echo filter_html_text( $sekcja3['przycisk']['title'] ); ?>
			<div>
			  <?php include get_theme_file_path( '/templates/partials/svg/read-more.php' ); ?>
			</div>
		  </a>
		<?php endif; ?>
	  </div>
	</div>
	<?php if ( ! empty( $sekcja3['lista'] ) ) : ?>
	  <div class="row mt-6">
		<div class="offset-xl-1 col-xl-14">
		  <div class="row justify-content-between">
			<?php foreach ( $sekcja3['lista'] as $row ) : ?>
			  <div class="col-md-8 col-lg-5 mb-6">
				<?php if ( ! empty( $row['ikona'] ) ) : ?>
				  <img class="mb-2" src="<?php echo $row['ikona']['url']; ?>" width="31" height="31" alt="" loading="lazy">
				<?php endif; ?>
				<h3><?php echo filter_html_text( $row['naglowek'] ); ?></h3>
				<p><?php echo filter_html_text( $row['opis'] ); ?></p>
			  </div>
			<?php endforeach; ?>
		  </div>
		</div>
	  </div>
	<?php endif; ?>
  </div>
  <div class="advantages-bg-elements bg-elements">
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/logo-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-br-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
  </div>
</div>

<div class="fn-slider bg-elements-container section section-overflow">
  <div class="container">
	<div class="row no-gutters">
	  <div class="offset-lg-1 col-lg-7 order-lg-2">
		<?php if ( ! empty( $sekcja4['naglowek'] ) ) : ?>
		  <h2 class="h1 mb-5"><?php _e( 'Co oferuje Confly?', 'sage' ); ?></h2>
		<?php endif; ?>
		<?php if ( ! empty( $sekcja4['lista'] ) ) : ?>
		  <div class="nav-links fn-slider-links">
			<?php $slider_id = 1; ?>
			<?php foreach ( $sekcja4['lista'] as $row ) : ?>
			  <button class="nav-links-item<?php echo ( $slider_id == 1 ) ? ' active' : ''; ?>" data-fn-slider-id="<?php echo $slider_id++; ?>">
				<div class="nav-links-item-number"><?php echo filter_html_text( $row['numer'] ); ?></div>
				<div><?php echo filter_html_text( $row['tekst'] ); ?></div>
				<div class="nav-links-item-more">
				  <?php include get_theme_file_path( '/templates/partials/svg/read-more.php' ); ?>
				</div>
			  </button>
			<?php endforeach; ?>
		  </div>
		<?php endif; ?>
		<?php if ( ! empty( $sekcja4['przycisk'] ) ) : ?>
		  <a href="<?php echo esc_url( $sekcja4['przycisk']['url'] ); ?>" class="btn-more-sm mt-2 d-none d-lg-inline-flex"><?php echo filter_html_text( $sekcja4['przycisk']['title'] ); ?>
			<div><?php include get_theme_file_path( '/templates/partials/svg/read-more.php' ); ?></div>
		  </a>
		<?php endif; ?>
	  </div>

	  <?php if ( ! empty( $sekcja4['lista'] ) ) : ?>
		<div class="mt-4 mt-lg-0 col-lg-8 order-lg-1">
		  <div class="fn-slider-items">
			<?php $slider_id = 1; ?>
			<?php foreach ( $sekcja4['lista'] as $row ) : ?>
			  <div class="fn-slider-item<?php echo ( $slider_id == 1 ) ? ' active' : ''; ?>" data-fn-slider-item="<?php echo $slider_id++; ?>">
				<img class="img-fluid mb-6" src="<?php echo $row['obraz']['url']; ?>" width="<?php echo $row['obraz']['width']; ?>" height="<?php echo $row['obraz']['height']; ?>" alt="" loading="lazy">
				<p><?php echo filter_html_text( $row['opis'] ); ?></p>
			  </div>
			<?php endforeach; ?>
		  </div>
			<?php if ( ! empty( $sekcja4['przycisk'] ) ) : ?>
			<a href="<?php echo esc_url( $sekcja4['przycisk']['url'] ); ?>" class="btn-more-sm mt-2 d-inline-flex d-lg-none"><?php echo filter_html_text( $sekcja4['przycisk']['title'] ); ?>
			  <div><?php include get_theme_file_path( '/templates/partials/svg/read-more.php' ); ?></div>
			</a>
		  <?php endif; ?>
		</div>
	  <?php endif; ?>

	</div>
  </div>
  <div class="fn-slider-bg-elements bg-elements bg-elements-gray">
	<div class="brand-pink-color"><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/logo-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bl-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
  </div>
</div>

<div class="section">
  <div class="container">
	<div class="box-cta bg-elements-container">
	  <div class="row align-items-center">
		<div class="offset-2 col-12 offset-lg-1 col-lg-7">
		  <?php if ( ! empty( $sekcja5['naglowek'] ) ) : ?>
			<h2><?php echo filter_html_text( $sekcja5['naglowek'] ); ?></h2>
		  <?php endif; ?>
		  <?php if ( ! empty( $sekcja5['opis'] ) ) : ?>
			<p class="mb-0"><?php echo $sekcja5['opis']; ?></p>
		  <?php endif; ?>
		</div>
		<div class="mt-4 mt-lg-0 offset-2 col-12 offset-lg-2 col-lg-4">
		  <?php if ( ! empty( $sekcja5['przycisk'] ) ) : ?>
			<div class="btn-circles">
			  <a href="<?php echo esc_url( $sekcja5['przycisk']['url'] ); ?>" class="btn btn-primary w-100"><?php echo filter_html_text( $sekcja5['przycisk']['title'] ); ?></a>
			  <div class="btn-circles-item"><?php include get_theme_file_path( '/templates/partials/svg/circles-btn.php' ); ?></div>
			</div>
		  <?php endif; ?>
		</div>
	  </div>
	  <div class="bg-elements">
		<div><?php require get_theme_file_path( '/templates/partials/svg/circle-br-bg.php' ); ?></div>
		<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
		<div><?php require get_theme_file_path( '/templates/partials/svg/logo-bg.php' ); ?></div>
	  </div>
	</div>
  </div>
</div>

<?php require get_theme_file_path( '/templates/components/testimonials.php' ); ?>

<?php require get_theme_file_path( '/templates/components/trusted-us.php' ); ?>

<?php require get_theme_file_path( '/templates/components/numbers.php' ); ?>

<div class="find-out-more bg-elements-container section section-overflow">
  <div class="container">
	<h2 class="h1 mb-5"><?php _e( 'Dowiedz się więcej', 'sage' ); ?></h2>
	<ul class="nav nav-pills nav-fill mb-4" id="pills-tab" role="tablist">
	  <li class="nav-item">
		<a class="nav-link active" id="pills-blog-tab" data-toggle="pill" href="#pills-blog" role="tab" aria-controls="pills-blog" aria-selected="true">Blog</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" id="pills-podcasts-tab" data-toggle="pill" href="#pills-podcasts" role="tab" aria-controls="pills-podcasts" aria-selected="false"><?php _e( 'Podcasty', 'sage' ); ?></a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" id="pills-webinars-tab" data-toggle="pill" href="#pills-webinars" role="tab" aria-controls="pills-webinars" aria-selected="false"><?php _e( 'Webinary', 'sage' ); ?></a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" id="pills-videos-tab" data-toggle="pill" href="#pills-videos" role="tab" aria-controls="pills-videos" aria-selected="false"><?php _e( 'Wideo', 'sage' ); ?></a>
	  </li>
	</ul>

	<?php
	$wpisy    = \App\Helper\get_newest_posts( 'post', 3 );
	$podcasty = \App\Helper\get_newest_posts( 'podcast', 3 );
	$webinary = \App\Helper\get_newest_posts( 'webinar', 3 );
	$wideo    = \App\Helper\get_newest_posts( 'wideo', 3 );
	?>
	<div class="tab-content" id="pills-tabContent">

	  <div class="tab-pane fade show active" id="pills-blog" role="tabpanel" aria-labelledby="pills-blog-tab">
		<div class="row row-spacer row-cols-1 row-cols-md-2 row-cols-xl-3">
		  <?php if ( ! empty( $wpisy ) ) : ?>
				<?php foreach ( $wpisy as $wpis ) : ?>
					<?php $post_box = $wpis; ?>
			  <div class="col">
					<?php include get_theme_file_path( '/templates/components/entry-box.php' ); ?>
			  </div>
			<?php endforeach; ?>
		  <?php endif; ?>
		</div>
	  </div>

	  <div class="tab-pane fade" id="pills-podcasts" role="tabpanel" aria-labelledby="pills-podcasts-tab">
		<div class="row row-spacer row-cols-1 row-cols-md-2 row-cols-xl-3">
		  <?php if ( ! empty( $podcasty ) ) : ?>
				<?php foreach ( $podcasty as $podcast ) : ?>
					<?php $post_box = $podcast; ?>
			  <div class="col">
					<?php include get_theme_file_path( '/templates/components/entry-box.php' ); ?>
			  </div>
			<?php endforeach; ?>
		  <?php endif; ?>
		</div>
	  </div>

	  <div class="tab-pane fade" id="pills-webinars" role="tabpanel" aria-labelledby="pills-webinars-tab">
		<div class="row row-spacer row-cols-1 row-cols-md-2 row-cols-xl-3">
		  <?php if ( ! empty( $webinary ) ) : ?>
				<?php foreach ( $webinary as $webinar ) : ?>
					<?php $post_box = $webinar; ?>
			  <div class="col">
					<?php include get_theme_file_path( '/templates/components/entry-box.php' ); ?>
			  </div>
			<?php endforeach; ?>
		  <?php endif; ?>
		</div>
	  </div>

	  <div class="tab-pane fade" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab">
		<div class="row row-spacer row-cols-1 row-cols-md-2 row-cols-xl-3">
		  <?php if ( ! empty( $wideo ) ) : ?>
				<?php foreach ( $wideo as $wideo_post ) : ?>
					<?php $post_box = $wideo_post; ?>
			  <div class="col">
					<?php include get_theme_file_path( '/templates/components/entry-box.php' ); ?>
			  </div>
			<?php endforeach; ?>
		  <?php endif; ?>
		</div>
	  </div>

	</div>

  </div>
  <div class="bg-elements">
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/logo-bg.php' ); ?></div>
	<div class="brand-yellow-color"><?php require get_theme_file_path( '/templates/partials/svg/circle-br-bg.php' ); ?></div>
  </div>
</div>


<div class="newsletter bg-elements-container section section-bg section-border text-center">
  <div class="container">
	<div class="row">
	  <div class="offset-lg-3 col-lg-10">
	  <?php if ( ! empty( $sekcja6['naglowek'] ) ) : ?>
		<h2 class="h1 mb-4"><?php echo filter_html_text( $sekcja6['naglowek'] ); ?></h2>
	  <?php endif; ?>
	  <?php if ( ! empty( $sekcja6['opis'] ) ) : ?>
		<p class="mb-5"><?php echo filter_html_text( $sekcja6['opis'] ); ?></p>
	  <?php endif; ?>
		<form>
		  <label class="sr-only" for="news-email"><?php _e( 'Adres e-mail', 'sage' ); ?></label>
		  <div class="form-control-btn">
			<input id="news-email" name="news-email" placeholder="Adres e-mail" class="form-control" type="text">
			<?php $napis = ( ! empty( $sekcja6['napis_na_przycisku'] ) ) ? filter_html_text( $sekcja6['napis_na_przycisku'] ) : 'Zapisz się'; ?>
			<button type="submit" class="btn btn-primary"><?php echo $napis; ?></button>
		  </div>
		</form>
	  </div>
	</div>
  </div>
  <div class="bg-elements">
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bl-bg.php' ); ?></div>
	<div class="brand-blue-color"><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/logo-bg.php' ); ?></div>
	<div class="brand-green-color"><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
  </div>
</div>

<?php require get_theme_file_path( '/templates/components/start-meeting.php' ); ?>
