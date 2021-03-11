<?php

use function App\Helper\filter_html_text;

$dotacje      = get_field( 'dotacje', 'options' );
$social_media = get_field( 'social_media', 'options' );
?>

<footer class="footer footer-landing">
  <div class="footer-top">
	<div class="container">
	  <div class="row">
		<div class="offset-xl-1 col-xl-14">
		  <div class="row d-flex align-items-center">
			<div class="col-lg-3 footer-landing__logo">
			  
			  <?php if ( ! empty( $social_media['confly_logo'] ) ) : ?>
				<img width="<?php echo $social_media['confly_logo']['width']; ?>" height="<?php echo $social_media['confly_logo']['height']; ?>" 
					 src="<?php echo $social_media['confly_logo']['url']; ?>" alt="Confly" loading="lazy">
			  <?php endif; ?>

			</div>
			<div class="col-lg-11 footer-landing__menu">
				<div class="">
					<?php if ( ! empty( $social_media['copyright'] ) ) : ?>
						<div class="font-size-sm mb-1"><?php echo filter_html_text( $social_media['copyright'] ); ?></div>
					<?php endif; ?>
				</div>
				<div class="">
				<div class="landing-footer-menu">
				  <?php
					if ( has_nav_menu( 'stopka_landing_navigation' ) ) :
						wp_nav_menu(
							array(
								'theme_location' => 'stopka_landing_navigation',
								'menu_class'     => 'list nav flex-row',
							)
						);
				  endif;
					?>
				</div>
				</div>
			</div>
			<div class="col-lg-2 footer-landing__social">
			<div class="sm">
				<?php if ( ! empty( $social_media['facebook'] ) ) : ?>
				  <a href="<?php echo esc_url( $social_media['facebook'] ); ?>" class="sm-item">
					<svg width="14" height="14" fill="none" xmlns="http://www.w3.org/2000/svg">
					  <path
						  d="M5.657 7.728H4.27c-.224 0-.294-.084-.294-.294V5.74c0-.224.084-.294.294-.294h1.386V4.214c0-.56.098-1.092.378-1.582.294-.504.714-.84 1.246-1.036.35-.126.7-.182 1.078-.182H9.73c.196 0 .28.084.28.28V3.29c0 .196-.084.28-.28.28-.378 0-.756 0-1.134.014-.378 0-.574.182-.574.574-.014.42 0 .826 0 1.26h1.624c.224 0 .308.084.308.308V7.42c0 .224-.07.294-.308.294H8.023v4.564c0 .238-.07.322-.322.322H5.95c-.21 0-.294-.084-.294-.294V7.728z"
						  fill="currentColor"/>
					</svg>
				  </a>
				<?php endif; ?>

				<?php if ( ! empty( $social_media['linkedin'] ) ) : ?>
				  <a href="<?php echo esc_url( $social_media['linkedin'] ); ?>" class="sm-item">
					<svg width="11" height="12" fill="none" xmlns="http://www.w3.org/2000/svg">
					  <g clip-path="url(#clip0)" fill="currentColor">
						<path
							d="M2.576 3.457H.34v7.563h2.236V3.457zM8.667 3.546l-.07-.025a1.335 1.335 0 00-.092-.02 1.829 1.829 0 00-.4-.044C6.8 3.457 5.973 4.5 5.7 4.903V3.457H3.465v7.563H5.7V6.895s1.69-2.59 2.403-.688v4.813h2.236V5.916c0-1.142-.712-2.095-1.673-2.37zM1.434 2.426c.604 0 1.093-.539 1.093-1.203C2.527.558 2.037.02 1.434.02.83.02.34.558.34 1.223c0 .664.49 1.203 1.094 1.203z"/>
					  </g>
					  <defs>
						<clipPath id="clip0">
						  <path fill="currentColor" transform="translate(.34 .02)" d="M0 0h10v11H0z"/>
						</clipPath>
					  </defs>
					</svg>
				  </a>
				<?php endif; ?>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>

  <?php if ( $dotacje['widoczne'] ) : ?>
  <div class="footer-info">
	<div class="container">
	  <div class="row">
		<div class="offset-xl-1 col-xl-14">
		  <div class="row align-items-center">
			<div class="col-lg-10 mb-4 mb-lg-0">
			  <div class="row align-items-center">
				<?php if ( ! empty( $dotacje['obraz1'] ) ) : ?>
				  <div class="col-auto"><a href="<?php esc_url( $dotacje['obraz1']['url'] ); ?>">
					<img width="<?php echo $dotacje['obraz1']['width']; ?>" height="<?php echo $dotacje['obraz1']['height']; ?>" src="<?php echo $dotacje['obraz1']['url']; ?>" alt="" loading="lazy"></a>
				  </div>
				<?php endif; ?>
				<?php if ( ! empty( $dotacje['obraz2'] ) ) : ?>
				  <div class="col-auto"><a href="<?php esc_url( $dotacje['obraz2']['url'] ); ?>">
					<img width="<?php echo $dotacje['obraz2']['width']; ?>" height="<?php echo $dotacje['obraz2']['height']; ?>" src="<?php echo $dotacje['obraz2']['url']; ?>" alt="" loading="lazy"></a>
				  </div>
				<?php endif; ?>
				<?php if ( ! empty( $dotacje['obraz3'] ) ) : ?>
				  <div class="col-auto"><a href="<?php esc_url( $dotacje['obraz3']['url'] ); ?>">
					<img width="<?php echo $dotacje['obraz3']['width']; ?>" height="<?php echo $dotacje['obraz3']['height']; ?>" src="<?php echo $dotacje['obraz3']['url']; ?>" alt="" loading="lazy"></a>
				  </div>
				<?php endif; ?>
				<?php if ( ! empty( $dotacje['obraz4'] ) ) : ?>
				  <div class="col-auto"><a href="<?php esc_url( $dotacje['obraz4']['url'] ); ?>">
					<img width="<?php echo $dotacje['obraz4']['width']; ?>" height="<?php echo $dotacje['obraz4']['height']; ?>" src="<?php echo $dotacje['obraz4']['url']; ?>" alt="" loading="lazy"></a>
				  </div>
				<?php endif; ?>
			  </div>
			</div>
			<div class="col-lg-6">
			  <?php if ( ! empty( $dotacje['link_dla_opisu'] ) ) : ?>
				<a href="<?php echo esc_url( $dotacje['link_dla_opisu'] ); ?>">
					<?php echo filter_html_text( $dotacje['opis'] ); ?>
				</a>
			  <?php endif; ?>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <?php endif; ?>

</footer>
