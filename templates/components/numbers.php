<?php

use function \App\Helper\filter_html_text;

$naglowek = filter_html_text( get_field( 'liczby_naglowek', 'options'));
$lista = get_field( 'liczby_lista', 'options');
?>

<div class="numbers bg-elements-container section section-bg section-bg-light-p">
  <div class="container">
    <h2 class="h1 mb-8 text-center"><?php echo $naglowek; ?></h2>
    <?php if( ! empty( $lista)): ?>
    <div class="row">
      <div class="offset-xl-1 col-xl-14">
        <div class="row justify-content-between">
          <?php foreach( $lista as $row): ?>
            <div class="col-auto number">
              <p class="h1"><?php echo filter_html_text( $row['liczba']); ?></p>
              <p class="h3 text-pink"><?php echo filter_html_text( $row['napis']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <div class="bg-elements">
    <div><?php include( get_theme_file_path( "/templates/partials/svg/logo-bg.php" ) ); ?></div>
    <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bg.php" ) ); ?></div>
    <div><?php include( get_theme_file_path( "/templates/partials/svg/circle-bl-bg.php" ) ); ?></div>
  </div>
</div>