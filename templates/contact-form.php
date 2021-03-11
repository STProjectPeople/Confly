<div class="modal fade" id="contactPlan" tabindex="-1" role="dialog" aria-labelledby="contactPlanTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<p class="modal-title h2" id="contactPlanTitle">Formularz kontaktowy</p>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true"><?php require get_theme_file_path( '/templates/partials/svg/close-icon.php' ); ?></span>
		</button>
	  </div>
	  <div class="modal-body">
		<?php
		if ( ICL_LANGUAGE_CODE == 'pl' ) {

			echo do_shortcode( '[contact-form-7 id="293" title="Formularz kontaktowy"]' );
		} elseif ( ICL_LANGUAGE_CODE == 'en' ) {

			echo do_shortcode( '[contact-form-7 id="797" title="Formularz kontaktowy En"]' );
		}
		?>
	  </div>
	</div>
  </div>
</div>
