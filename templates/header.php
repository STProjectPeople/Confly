<?php

use function \App\Helper\is_dark_hero;
use function \App\Helper\filter_html_text;

$naglowek = get_field( 'naglowek', 'options');
?>

<header class="header">
  <div class="container">
    <div class="header-content">
      <a class="brand" href="<?= esc_url( home_url( '/' ) ); ?>">
        <?php if( ! empty( $naglowek['logo_jasne'])): ?>
          <img width="122" height="30" class="logo" src="<?php echo $naglowek['logo_jasne']['url']; ?>" alt="Confly">
        <?php endif; ?>
        <?php if ( is_dark_hero() && ( ! empty( $naglowek['logo_ciemne']))) : ?>
          <img class="hero-dark-logo" src="<?php echo $naglowek['logo_ciemne']['url']; ?>" alt="Confly">
        <?php endif; ?>
      </a>
      <nav class="nav-primary">
        <?php
        if ( has_nav_menu( 'primary_navigation' ) ) :
          wp_nav_menu( [ 'theme_location' => 'primary_navigation', 'menu_class' => 'nav' ] );
        endif;
        ?>
        <div class="d-xl-none px-2 mt-3">
          <?php if( ! empty( $naglowek['przycisk2'])): ?>
            <a href="<?php echo esc_url( $naglowek['przycisk2']['url']); ?>" class="btn btn-primary w-100"><?php echo filter_html_text( $naglowek['przycisk2']['title']); ?></a>
          <?php endif; ?>
        </div>
      </nav>
      <div class="header-actions">
        <?php if( ! empty( $naglowek['przycisk1'])): ?>
          <a href="<?php echo esc_url( $naglowek['przycisk1']['url']); ?>" class="btn btn-link pl-0 text-primary"><?php echo filter_html_text( $naglowek['przycisk1']['title']); ?></a>
        <?php endif; ?>
        <?php if( ! empty( $naglowek['przycisk2'])): ?>
          <a href="<?php echo esc_url( $naglowek['przycisk2']['url']); ?>" class="btn btn-outline-primary"><?php echo filter_html_text( $naglowek['przycisk2']['title']); ?></a>
        <?php endif; ?>
      </div>
      <button class="hamburger hamburger--slider hamburger-nav" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
      </button>
      <div class="header-nav">
        <div>
          <button class="header-nav-prev">
            <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19 12H5M12 19l-7-7 7-7" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </div>
        <div class="header-nav-label"></div>
      </div>
    </div>
  </div>
</header>
