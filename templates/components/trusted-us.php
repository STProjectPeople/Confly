<?php $galeria = get_field( 'zaufali_nam', 'options' ); ?>
<?php if ( ! empty( $galeria ) ) : ?>
  <div class="section section-sm">
	<div class="container">
	  <p class="headline-sm"><?php _e( 'Zaufali nam', 'sage' ); ?></p>
	  <div class="logos-list">      
		<?php foreach ( $galeria as $obraz ) : ?>
		  <div><img width="<?php echo $obraz['width']; ?>" height="<?php echo $obraz['height']; ?>" src="<?php echo esc_url( $obraz['url'] ); ?>" loading="lazy" alt=""></div>
		<?php endforeach; ?>
	  </div>
	</div>
  </div>
<?php endif; ?>
