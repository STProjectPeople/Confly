<?php if ( is_single() ) : ?>
  <div class="main-content">
	<!--<div class="breadcrumbs-wrap">
	  <div class="container">
		<div class="row">
		  <div class="offset-xl-1 col-xl-14">
			<nav aria-label="breadcrumb" class="breadcrumbs">
			  <ol class="breadcrumb">
				<li><a href="<?php echo home_url(); ?>">
					<svg width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg">
					  <path d="M13.042 7.5H1.958M7.5 13.042L1.958 7.5 7.5 1.958" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				  </a></li>
				<?php if ( ! is_singular( 'case_study' ) ) : ?>
				  <li class="breadcrumb-item">
					<a href="/baza-wiedzy/">
					  Baza wiedzy
					</a>
				  </li>
				  <li class="breadcrumb-item">
					<?php $post_type = get_post_type_object( get_post_type() ); ?>
					<a href="<?php echo get_post_type_archive_link( get_post_type() ); ?>"><?php echo $post_type->labels->name; ?></a>
				  </li>
				<?php else : ?>
				  <li class="breadcrumb-item">
					<?php $post_type = get_post_type_object( get_post_type() ); ?>
					<a href="/klienci/#case-studies"><?php echo $post_type->labels->name; ?></a>
				  </li>
				<?php endif; ?>
				<li class="breadcrumb-item"><a href="#" aria-current="page">
					<strong><?php the_title(); ?></strong>
				  </a>
				</li>
			  </ol>
			</nav>
		  </div>
		</div>
	  </div>
	</div>-->
  </div>
<?php endif; ?>
