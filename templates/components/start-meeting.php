<?php 

use function \App\Helper\filter_html_text;

$fields = get_field( 'zacznij_spotkanie', 'options'); 

?>

<aside class="start-meeting section">
  <div class="container">
    <div class="image-box bg-elements-container">
      <div class="image-box-content">
        <div class="row">
          <div class="offset-2 col-12 col-xl-9">
            <?php if( ! empty( $fields['naglowek'])): ?>
              <h2><?php echo filter_html_text( $fields['naglowek']); ?></h2>
            <?php endif; ?>
            <?php if( ! empty( $fields['opis'])): ?>
              <p class="mb-4"><?php echo filter_html_text( $fields['opis']); ?></p>
            <?php endif; ?>
            <div class="image-box-actions">
              <?php if( ! empty( $fields['przycisk1'])): ?>
                <a class="btn btn-blur-dark-bg" href="<?php echo esc_url( $fields['przycisk1']['url']); ?>"><?php echo filter_html_text(  $fields['przycisk1']['title']); ?></a>
              <?php endif; ?>
              <?php if( ! empty( $fields['przycisk2'])): ?>
                <a class="btn btn-outline-white" href="<?php echo esc_url( $fields['przycisk2']['url']); ?>"><?php echo filter_html_text(  $fields['przycisk2']['title']); ?></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="image-box-bg">
        <img width="1909" height="1271" src="<?= get_template_directory_uri() ?>/dist/images/image-box-bg-confly.jpg" alt="Rozpocznij wideokonferencję" loading="lazy">
      </div>
    </div>
  </div>
</aside>