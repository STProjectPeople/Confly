<?php
/**
 * Args
 * $post_box - Post Object
 */

use function App\Helper\filter_html_text;

$post_type = get_post_type( $post_box);
$title = filter_html_text( get_the_title($post_box));
$exerpt = filter_html_text( get_the_excerpt( $post_box));
$button_title = filter_html_text( \App\Helper\get_entry_more_title( $post_box));
?>
<div class="entry-box">
  <div class="entry-box-image">
    <a href="<?=get_permalink($post_box);?>">
      <?php echo get_the_post_thumbnail( $post_box, 'medium_large' ); ?>
    </a>
  </div>
  <div class="entry-box-content">
    <?php $type = 'blog' ?>
    <?php include( get_theme_file_path( "/templates/partials/entry-box-details.php" ) ); ?>
    <h3 class="h4 mb-2"><a href="<?=get_permalink($post_box);?>"><?php echo $title; ?></a></h3>
    <p><?php echo $exerpt; ?></p>
    <a href="<?=get_permalink($post_box);?>" class="btn-more-sm"><?php echo $button_title; ?>
      <div>
        <?php include( get_theme_file_path( "/templates/partials/svg/read-more.php" ) ); ?>
      </div>
    </a>
  </div>
</div>