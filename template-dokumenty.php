<?php
/**
 * Template Name: Dokumenty
 */

use function App\Helper\filter_html_text;

?>

<div class="section section-top">
  <div class="container">

    <?php $elementy_menu = \App\Helper\get_custom_menu_items( 'dokumenty_navigation' ); ?>
    <?php if ( $elementy_menu ) : ?>
      <!--
      <ul class="nav nav-pills nav-fill mb-4">
        <?php /*foreach ( $elementy_menu as $menu_item ) : /?>
          <li class="nav-item">
            <a href="<?= $menu_item->url ?>" class="nav-link <?= $post->ID == $menu_item->object_id ? 'active' : '' ?>"><?= $menu_item->title ?></a>
          </li>
        <?php endforeach; */?>
      </ul>
      -->
    <?php endif; ?>

    <?php $content = get_the_content(); ?>

    <?php if ( $content ) : ?>

      <div class="row">
        <div class="offset-xl-2 col-xl-12">
          <div class="entry-content">
            <?= $content ?>
          </div>
        </div>
      </div>

    <?php endif; ?>

    <?php $akordeon = get_field( 'akordeon' ); ?>
    <?php if ( ! empty( $akordeon ) ): ?>

      <div class="row pt-5">
        <div class="offset-xl-2 col-xl-12">

          <div class="accordion" id="accordionContent">

            <?php $index = 0; ?>
            <?php foreach ( $akordeon as $element ): ?>
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
                      <?php echo filter_html_text( $element['naglowek'] ); ?>
                      <div><?php include( get_theme_file_path( "/templates/partials/svg/chevron-down-icon.php" ) ); ?></div>
                    </button>
                  </h3>
                </div>

                <div id="<?php echo $collapse_id; ?>" class="collapse<?php echo $show; ?>" aria-labelledby="<?php echo $card_id; ?>" data-parent="#accordionContent">
                  <div class="card-body">
                    <?php echo filter_html_text( $element['opis'] ); ?>
                    <?php if ( ! empty( $element['zalaczniki'] ) ): ?>
                      <div class="attachments mt-4">
                        <p class="headline-sm text-left font-bold mb-3"><?php _e('Załączniki', 'confly')?></p>
                        <?php foreach ( $element['zalaczniki'] as $zalacznik ): ?>
                          <?php if ( ! empty( $zalacznik['plik'] ) ): ?>
                            <?php $url = esc_url( $zalacznik['plik']['url'] ); ?>
                            <div class="attachment">
                              <div><?php include( get_theme_file_path( "/templates/partials/svg/file-icon.php" ) ); ?></div>
                              <div><a href="<?php echo $url; ?>"><?php echo filter_html_text( $zalacznik['nazwa'] ); ?></a></div>
                              <div><a href="<?php echo $url; ?>"><?php _e('Pobierz', 'confly')?></a></div>
                            </div>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

  </div>
</div>
