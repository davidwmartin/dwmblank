<header>
	<h1><?php
		if ( is_day() ) { printf( __( 'Daily Archives: %s', 'dwmblank' ), get_the_time( get_option( 'date_format' ) ) ); }
		elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'dwmblank' ), get_the_time( 'F Y' ) ); }
		elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'dwmblank' ), get_the_time( 'Y' ) ); }
		else { _e( 'Archives', 'dwmblank' ); }
	?></h1> 
</header>
<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', get_post_format() ); ?>

<?php endwhile; ?>