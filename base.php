<?php

use App\Helper;
use Roots\Sage\Wrapper;

$body_class = '';

if ( Helper\is_dark_hero() ) {
	$body_class .= 'hero-dark';
}

?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<?php get_template_part( 'templates/head' ); ?>
<body <?php body_class( $body_class ); ?>>

<?php
do_action( 'get_header' );

	get_template_part( 'templates/header-landing' );
	get_template_part( 'templates/components/breadcrumbs' );
?>

<main class="main">
  <?php require Wrapper\template_path(); ?>
</main>
<?php
do_action( 'get_footer' );

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

<?php
	get_template_part( 'templates/footer-landing' );
	get_template_part( 'templates/cookies-info' );

if ( Helper\show_contact_form() ) {
	include get_theme_file_path( '/templates/contact-form.php' );
}

wp_footer();
?>
</body>
</html>
