<?php
/**
 * Args
 * $post_box - Post Object
 */

$post_type = get_post_type( $post_box);
$name = \App\Helper\get_name_for_post( $post_box);
$czas = trim( get_field( 'czas_trwania', $post_box));

if( $post_type == 'webinar')
{
  $link_do_webinaru = trim( get_field( 'link_do_webinaru', $post_type));
  $data_rozpoczecia = get_field( 'data_rozpoczecia', $post_box);
  $czas = \App\Helper\format_date( $data_rozpoczecia, 'd.m.y H:i');
}

?>
<div class="entry-box-details">
  <div>
    <?php if ( $post_type === 'post' ) : ?>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/blog-icon.php" ) ); ?></div>
    <?php elseif( $post_type === 'webinar' ) : ?>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/webinar-icon.php" ) ); ?></div>
    <?php elseif( $post_type === 'podcast' ) : ?>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/podcast-icon.php" ) ); ?></div>
    <?php elseif( $post_type === 'wideo' ) : ?>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/wideo-icon.php" ) ); ?></div>
    <?php endif; ?>
    <div><?php echo $name; ?></div>
  </div>
  <div>
    <?php if( $post_type === 'webinar' ) : ?>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/calendar-icon.php" ) ); ?></div>
    <?php else : ?>
      <div><?php include( get_theme_file_path( "/templates/partials/svg/clock-icon.php" ) ); ?></div>
    <?php endif; ?>
    <div><?php echo \App\Helper\filter_html_text( $czas); ?></div>
  </div>
</div>