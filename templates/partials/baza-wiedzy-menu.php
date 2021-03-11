<?php use App\Helper; ?>

<?php $dokumenty_menu = Helper\get_custom_menu_items( 'baza_wiedzy_navigation' ); ?>

<?php
$blog_page_id = 0;
if ( is_home() && get_option( 'page_for_posts' ) ) {
  $blog_page_id = get_option( 'page_for_posts' );
}
?>

<?php if ( $dokumenty_menu ) : ?>

  <ul class="nav nav-pills nav-fill mb-4">
    <?php foreach ( $dokumenty_menu as $menu_item ) : ?>
      <li class="nav-item">
        <a href="<?= $menu_item->url ?>" class="nav-link

      <?= ( ! $blog_page_id && $post->ID == $menu_item->object_id )
          || $blog_page_id == $menu_item->object_id
          || is_archive() && is_post_type_archive( $menu_item->object )
            ? 'active' : '' ?>">

          <?= $menu_item->title ?></a>
      </li>
    <?php endforeach; ?>
  </ul>

<?php endif; ?>