<?php

use function \App\Helper\filter_html_text;

$faq = get_field( 'faq', 'options');
$naglowek = $faq['naglowek'];
$lista = $faq['lista'];
?>

<?php if( ! empty( $lista)): ?>
    <div class="row">
      <div class="col-lg-5">
        <h2><?php echo filter_html_text( $naglowek); ?></h2>
      </div>

      <div class="offset-lg-1 col-lg-10">
        <div class="accordion" id="accordionContent">
          <?php $index=0; ?>
          <?php foreach( $lista as $row): ?>            
            <?php $card_id = 'heading-' . $index; ?>
            <?php $collapse_id = 'collapse-' . $index; ?>
            <?php $expanded = ( $index == 0 ) ? 'true' : 'false'; ?>
            <?php $show = ( $index == 0 ) ? ' show' : ''; ?>
            <?php $index ++; ?>

          <div class="card">
            <div class="card-header" id="<?php echo $card_id; ?>">
              <h3 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="<?php echo '#' . $collapse_id; ?>" aria-expanded="<?php echo $expanded; ?>"
                            aria-controls="<?php echo $collapse_id; ?>">
                  <?php echo filter_html_text( $row['pytanie']); ?>
                  <div><?php include( get_theme_file_path( "/templates/partials/svg/chevron-down-icon.php" ) ); ?></div>
                </button>
              </h3>
            </div>

            <div id="<?php echo $collapse_id; ?>" class="collapse<?php echo $show; ?>" aria-labelledby="<?php echo $card_id; ?>" data-parent="#accordionContent">
              <div class="card-body">
                <?php echo filter_html_text( $row['odpowiedz']); ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
<?php endif; ?>