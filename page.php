<?php while ( have_posts() ) :
	the_post(); ?>
	<?php get_template_part( 'templates/page', 'header-landing' ); ?>
	<?php get_template_part( 'templates/content', 'page' ); ?>
	<?php
endwhile;
