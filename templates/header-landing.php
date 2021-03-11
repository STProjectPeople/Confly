<?php

use function \App\Helper\is_dark_hero;
use function \App\Helper\filter_html_text;

$naglowek = get_field( 'naglowek', 'options' );
?>

<header class="header">
  <div class="container">
	<div class="header-content">
	  <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php if ( ! empty( $naglowek['logo_jasne'] ) ) : ?>
		  <img width="122" height="30" class="logo" src="<?php echo $naglowek['logo_jasne']['url']; ?>" alt="Confly">
		<?php endif; ?>
		<?php if ( is_dark_hero() && ( ! empty( $naglowek['logo_ciemne'] ) ) ) : ?>
		  <img class="hero-dark-logo" src="<?php echo $naglowek['logo_ciemne']['url']; ?>" alt="Confly">
		<?php endif; ?>
	  </a>
	  <div class="header-actions">
		<?php if ( ! empty( $naglowek['przycisk1_landing'] ) ) : ?>
		  <a href="<?php echo esc_url( $naglowek['przycisk1_landing']['url'] ); ?>" class="btn btn-link pl-0 text-primary"><?php echo filter_html_text( $naglowek['przycisk1_landing']['title'] ); ?></a>
		<?php endif; ?>
		<?php if ( ! empty( $naglowek['przycisk2_landing'] ) ) : ?>
		  <a href="<?php echo esc_url( $naglowek['przycisk2_landing']['url'] ); ?>" class="btn btn-outline-primary"><?php echo filter_html_text( $naglowek['przycisk2_landing']['title'] ); ?></a>
		<?php endif; ?>
	  </div>
	</div>
  </div>
</header>
