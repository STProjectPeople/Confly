<?php
/**
 * Template Name: home-alternative
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

$acf_fields       = get_fields();
$sekcja1          = $acf_fields['sekcja1'];
$sekcja2          = $acf_fields['sekcja2'];
$sekcja3          = $acf_fields['sekcja3'];
$sekcja4          = $acf_fields['sekcja4'];
$sekcja5          = $acf_fields['sekcja5'];
$sekcja6          = $acf_fields['sekcja6'];
$sekcjaNaszaMisja = $acf_fields['sekcjaNaszaMisja'];
$sekcjaDbamy      = $acf_fields['sekcjaDbamy'];
?>
<!-- Hotjar Tracking Code for www.confly.pl -->
<script>
	(function(h,o,t,j,a,r){
		h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		h._hjSettings={hjid:2162395,hjsv:6};
		a=o.getElementsByTagName('head')[0];
		r=o.createElement('script');r.async=1;
		r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		a.appendChild(r);
	})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<?php require get_theme_file_path( '/templates/components/hero.php' ); ?>

<div class="advantages-top bg-elements-container section section-bg">
  <div class="container">
	<div class="row">
	  <div class="col-lg-6 mb-6 mb-lg-0">
		<?php if ( ! empty( $sekcja2['naglowek'] ) ) : ?>
		  <h2 class="h1"><?php echo filter_html_text( $sekcja2['naglowek'] ); ?></h2>
		<?php endif; ?>
		<?php if ( ! empty( $sekcja2['opis'] ) ) : ?>
		  <p><?php echo $sekcja2['opis']; ?></p>
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
		  <p class="mb-4"><?php echo $sekcja3['opis']; ?></p>
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
				<p><?php echo $row['opis']; ?></p>
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

<div class="product-preview-section section section-overflow">
	  <?php if ( ! empty( $sekcja4['lista'] ) ) : ?>
		<div class="mt-4 mt-lg-0 col-lg-16 order-lg-1">
			<?php $i = 1; ?>
			<?php foreach ( $sekcja4['lista'] as $row ) : ?>
				<div class="single-block col-lg-16 bg-elements-container">
					<div class="container">
						<div class="row no-gutters d-flex align-items-center">
							<div class="
							<?php
							if ( $i % 2 == 0 ) {
								echo 'col-lg-7 offset-lg-1  order-lg-2';
							} else {
								echo 'col-lg-6 offset-lg-1';}
							?>
							">
								<h2><?php echo filter_html_text( $row['tekst'] ); ?></h2>
								<p><?php echo $row['opis']; ?></p>
							</div>
							<div class="
							<?php
							if ( $i % 2 == 0 ) {
								echo 'col-lg-8 order-lg-1';
							} else {
								echo 'offset-lg-1 col-lg-8 order-lg-1';}
							?>
							 ">
								<img class="img-fluid mb-6" src="<?php echo $row['obraz']['url']; ?>" width="<?php echo $row['obraz']['width']; ?>" height="<?php echo $row['obraz']['height']; ?>" alt="" loading="lazy">
							</div>
						</div>
					  </div>
					  <div class="bg-elements">
						<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bl-bg.php' ); ?></div>
						<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
						<div><?php require get_theme_file_path( '/templates/partials/svg/logo-bg.php' ); ?></div>
						<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
						<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
					</div>
				</div>
				  <?php $i++; ?>
			<?php endforeach; ?>
		</div>
	  <?php endif; ?>
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

<div class="advantages-top bg-elements-container section section-bg security-section">
  <div class="container">
	<div class="row">
	  <div class="col-lg-6 mb-6 mb-lg-0">
		<?php if ( ! empty( $sekcjaDbamy['naglowek'] ) ) : ?>
		  <h2 class="h1"><?php echo filter_html_text( $sekcjaDbamy['naglowek'] ); ?></h2>
		<?php endif; ?>
		<?php if ( ! empty( $sekcjaDbamy['opis'] ) ) : ?>
		  <p><?php echo $sekcjaDbamy['opis']; ?></p>
		<?php endif; ?>
		<?php if ( ! empty( $sekcjaDbamy['przycisk'] ) ) : ?>
		  <a href="<?php echo esc_url( $sekcjaDbamy['przycisk']['url'] ); ?>" class="btn btn-primary mt-4"><?php echo filter_html_text( $sekcjaDbamy['przycisk']['title'] ); ?></a>
		<?php endif; ?>
	  </div>

	  <?php if ( ! empty( $sekcjaDbamy['lista'] ) ) : ?>        
		<div class="offset-xl-1 col-lg-10 col-xl-9">
		  <div class="row row-spacer row-cols-1 row-cols-sm-2">
			<?php foreach ( $sekcjaDbamy['lista'] as $row ) : ?>            
				<?php
				if ( empty( $row ) ) {
					continue; }
				?>
			  <div class="col mb-6">
				<?php if ( ! empty( $row['ikona'] ) ) : ?>
				  <img class="mb-2" src="<?php echo $row['ikona']['url']; ?>" width="31" height="31" alt="" loading="lazy">
				<?php endif; ?>
				<h3><?php echo filter_html_text( $row['naglowek'] ); ?></h3>
				<p><?php echo $row['opis']; ?></p>
			  </div>
		  <?php endforeach; ?>
		  </div>
		</div>
	  <?php endif; ?>

	</div>
  </div>
</div>

<div class="section bg-elements-container section-bg section-bg-light-p">
  <div class="container">
	<div class="row">
	  <div class="offset-xl-1 col-xl-14">
		<div class="row align-items-center">
		  <div class="col-md-8 col-lg-7">
			<?php if ( ! empty( $sekcjaNaszaMisja['naglowek'] ) ) : ?>
			  <h2 class="mb-4"><?php echo filter_html_text( $sekcjaNaszaMisja['naglowek'] ); ?></h2>
			<?php endif; ?>
			<?php if ( ! empty( $sekcjaNaszaMisja['opis'] ) ) : ?>
			<p class="mb-6 mb-lg-0"><?php echo $sekcjaNaszaMisja['opis']; ?></p>
			<?php endif; ?>
		  </div>
		  <div class="col-md-8 offset-lg-1 col-lg-8">
			<?php if ( ! empty( $sekcjaNaszaMisja['obraz'] ) ) : ?>
			  <img width="<?php echo $sekcjaNaszaMisja['obraz']['width']; ?>" height="<?php echo $sekcjaNaszaMisja['obraz']['height']; ?>" class="img-fluid img-rounded" src="<?php echo $sekcjaNaszaMisja['obraz']['url']; ?>" loading="lazy">
			<?php endif; ?>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <div class="bg-elements">
	<div><?php require get_theme_file_path( '/templates/partials/svg/logo-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bg.php' ); ?></div>
	<div><?php require get_theme_file_path( '/templates/partials/svg/circle-bl-bg.php' ); ?></div>
  </div>
</div>

<div id="newsletter" class="newsletter bg-elements-container section section-bg text-center">
  <div class="container">
	<div class="row">
	  <div class="offset-lg-3 col-lg-10">
	  <?php if ( ! empty( $sekcja6['naglowek'] ) ) : ?>
		<h2 class="h1 mb-4"><?php echo filter_html_text( $sekcja6['naglowek'] ); ?></h2>
	  <?php endif; ?>
	  <?php if ( ! empty( $sekcja6['opis'] ) ) : ?>
		<p class="mb-5"><?php echo filter_html_text( $sekcja6['opis'] ); ?></p>
	  <?php endif; ?>
<!-- Begin Mailchimp Signup Form -->
<div id="">
		<form action="https://confly.us7.list-manage.com/subscribe/post?u=fe8573194b2628b96ebdbd973&amp;id=0da6cdffa8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll">
				<div class="form-control-btn">
					<div class="mc-field-group">
						<input class="form-control" type="email" value="" placeholder="Twój adres e-mail" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
						<input type="submit" value="Zapisz się" name="subscribe" id="" class="btn btn-primary" class="button">
				</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fe8573194b2628b96ebdbd973_0da6cdffa8" tabindex="-1" value=""></div>
			</div>
		</form>
		</div>
		<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday'; /*
 * Translated default messages for the $ validation plugin.
 * Locale: PL
 */
$.extend($.validator.messages, {
	required: "To pole jest wymagane.",
	remote: "Proszę o wypełnienie tego pola.",
	email: "Proszę o podanie prawidłowego adresu email.",
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
		<!--End mc_embed_signup-->
		<?php if ( ! empty( $sekcja6['tekst_pod_formularzem'] ) ) : ?>
		<p class="mt-2"><?php echo $sekcja6['tekst_pod_formularzem']; ?></p>
	  <?php endif; ?>
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

