<div class="post-index">
	<?php if ( have_posts() ) : ?>
	<header>
		<h1><?php
			if ( is_day() ) { printf( __( 'Daily Archives: %s', 'dwmblank' ), get_the_time( get_option( 'date_format' ) ) ); }
			elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'dwmblank' ), get_the_time( 'F Y' ) ); }
			elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'dwmblank' ), get_the_time( 'Y' ) ); }
			elseif ( is_category()) {
				_e( "Category Archive for: ", "dwmblank").single_cat_title();
			}
			elseif ( is_tag()) {
				_e( "Tag Archive for: ", "dwmblank").single_cat_title();
			}
			elseif ( is_author()) {
				_e("Author Archive", "dwmblank");
			}
			else { _e( 'Archives', 'dwmblank' ); }
		?></h1>
	</header>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'templates/content-preview', get_post_format() ); ?>

	<?php endwhile; ?>

	<?php else: ?>

		<h2><?php _e('Nothing Found','dwmblank'); ?></h2>

	<?php endif; ?>
</div>	