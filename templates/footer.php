<?php

use function App\Helper\filter_html_text;

$dotacje      = get_field( 'dotacje', 'options' );
$social_media = get_field( 'social_media', 'options' );
?>

<footer class="footer">
  <div class="footer-top">
	<div class="container">
	  <div class="row">
		<div class="offset-xl-1 col-xl-14">
		  <div class="row">
			<div class="col-lg-6">
			  
			  <?php if ( ! empty( $social_media['confly_logo'] ) ) : ?>
				<img class="mb-3" width="<?php echo $social_media['confly_logo']['width']; ?>" height="<?php echo $social_media['confly_logo']['height']; ?>" 
					 src="<?php echo $social_media['confly_logo']['url']; ?>" alt="Confly" loading="lazy">
			  <?php endif; ?>

			  <div class="sm mb-4">
				<?php if ( ! empty( $social_media['facebook'] ) ) : ?>
				  <a href="<?php echo esc_url( $social_media['facebook'] ); ?>" class="sm-item">
					<svg width="14" height="14" fill="none" xmlns="http://www.w3.org/2000/svg">
					  <path
						  d="M5.657 7.728H4.27c-.224 0-.294-.084-.294-.294V5.74c0-.224.084-.294.294-.294h1.386V4.214c0-.56.098-1.092.378-1.582.294-.504.714-.84 1.246-1.036.35-.126.7-.182 1.078-.182H9.73c.196 0 .28.084.28.28V3.29c0 .196-.084.28-.28.28-.378 0-.756 0-1.134.014-.378 0-.574.182-.574.574-.014.42 0 .826 0 1.26h1.624c.224 0 .308.084.308.308V7.42c0 .224-.07.294-.308.294H8.023v4.564c0 .238-.07.322-.322.322H5.95c-.21 0-.294-.084-.294-.294V7.728z"
						  fill="currentColor"/>
					</svg>
				  </a>
				<?php endif; ?>

				<?php if ( ! empty( $social_media['instagram'] ) ) : ?>
				  <a href="<?php echo esc_url( $social_media['instagram'] ); ?>" class="sm-item">
					<svg width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg">
					  <path
						  d="M8.25 0h-4.5A3.75 3.75 0 000 3.75v4.5A3.75 3.75 0 003.75 12h4.5A3.75 3.75 0 0012 8.25v-4.5A3.75 3.75 0 008.25 0zm2.625 8.25a2.628 2.628 0 01-2.625 2.625h-4.5A2.628 2.628 0 011.125 8.25v-4.5A2.628 2.628 0 013.75 1.125h4.5a2.628 2.628 0 012.625 2.625v4.5z"
						  fill="currentColor"/>
					  <path
						  d="M6 3a3 3 0 100 6 3 3 0 000-6zm0 4.875A1.878 1.878 0 014.125 6c0-1.034.841-1.875 1.875-1.875S7.875 4.965 7.875 6A1.878 1.878 0 016 7.875zM9.226 3.175a.4.4 0 100-.8.4.4 0 000 .8z"
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

				<?php if ( ! empty( $social_media['twitter'] ) ) : ?>
				<a href="<?php echo esc_url( $social_media['twitter'] ); ?>" class="sm-item">
				  <svg width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip1)">
					  <path
						  d="M12.02 2.299a5.128 5.128 0 01-1.418.388c.51-.304.9-.783 1.082-1.36-.475.284-1 .484-1.56.596a2.46 2.46 0 00-4.256 1.682c0 .195.017.383.058.561A6.963 6.963 0 01.855 1.593a2.464 2.464 0 00.756 3.288A2.43 2.43 0 01.5 4.578v.027c0 1.196.852 2.189 1.97 2.417-.2.055-.418.081-.644.081-.158 0-.317-.009-.466-.042a2.484 2.484 0 002.299 1.714 4.943 4.943 0 01-3.64 1.016 6.926 6.926 0 003.775 1.104c4.527 0 7.002-3.75 7.002-7.001 0-.109-.004-.214-.01-.318.489-.346.899-.78 1.234-1.277z"
						  fill="currentColor"/>
					</g>
					<defs>
					  <clipPath id="clip1">
						<path fill="currentColor" transform="translate(.02 .02)" d="M0 0h12v12H0z"/>
					  </clipPath>
					</defs>
				  </svg>
				</a>
				<?php endif; ?>

			  </div>
			</div>
			<div class="col-lg-10">
			  <div class="row justify-content-lg-between">
				<div class="col-8 mb-4 mb-md-0 col-sm-4 col-lg-auto">
				  <p class="h6"><?php _e( 'Confly', 'confly' ); ?></p>
				  <?php
					if ( has_nav_menu( 'footer_confly_navigation' ) ) :
						wp_nav_menu(
							array(
								'theme_location' => 'footer_confly_navigation',
								'menu_class'     => 'list nav flex-column',
							)
						);
				  endif;
					?>
				</div>
				<div class="col-8 mb-4 mb-md-0 col-sm-4 col-lg-auto">
				  <p class="h6"><?php _e( 'Firma', 'confly' ); ?></p>
				  <?php
					if ( has_nav_menu( 'footer_firma_navigation' ) ) :
						wp_nav_menu(
							array(
								'theme_location' => 'footer_firma_navigation',
								'menu_class'     => 'list nav flex-column',
							)
						);
				  endif;
					?>
				</div>
				<div class="col-8 mb-4 mb-md-0 col-sm-4 col-lg-auto">
				  <p class="h6"><?php _e( 'Materiały', 'confly' ); ?></p>
				  <?php
					if ( has_nav_menu( 'footer_materialy_navigation' ) ) :
						wp_nav_menu(
							array(
								'theme_location' => 'footer_materialy_navigation',
								'menu_class'     => 'list nav flex-column',
							)
						);
				  endif;
					?>
				</div>
				<div class="col-8 mb-4 mb-md-0 col-sm-4 col-lg-auto">
				  <p class="h6"><?php _e( 'Dokumenty', 'confly' ); ?></p>
				  <?php
					if ( has_nav_menu( 'footer_dokumenty_navigation' ) ) :
						wp_nav_menu(
							array(
								'theme_location' => 'footer_dokumenty_navigation',
								'menu_class'     => 'list nav flex-column',
							)
						);
				  endif;
					?>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row language-switcher">
			<?php if ( ! empty( $social_media['copyright'] ) ) : ?>
			  <div class="font-size-sm"><?php echo filter_html_text( $social_media['copyright'] ); ?></div>
			<?php endif; ?>
	  <?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-footer' ); ?>
	  <?php endif; ?>
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
			<div class="col-lg-6 mb-4 mb-lg-0">
			  <div class="row align-items-center">
				<?php if ( ! empty( $dotacje['obraz1'] ) ) : ?>
				  <div class="col-auto"><a href="<?php esc_url( $dotacje['obraz1']['url'] ); ?>">
					<img width="<?php echo $dotacje['obraz1']['width']; ?>" height="<?php echo $dotacje['obraz1']['height']; ?>" src="<?php echo $dotacje['obraz1']['url']; ?>" alt="" loading="lazy"></a>
				  </div>
				<?php endif; ?>
				<?php if ( ! empty( $dotacje['obraz2'] ) ) : ?>
				  <div class="col-auto">
					<a href="<?php echo $dotacje['obraz2']['url']; ?>"><img width="<?php echo $dotacje['obraz2']['width']; ?>" height="<?php echo $dotacje['obraz2']['height']; ?>" src="<?php echo $dotacje['obraz2']['url']; ?>" alt="" loading="lazy"></a>
				  </div>
				<?php endif; ?>
			  </div>
			</div>
			<div class="col-lg-10">
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
