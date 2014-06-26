<?php get_header( dwm_template_base() ); ?>

<div class="gw">
	<section class="main-content">
		<?php include dwm_template_path(); ?>
		<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
		

	</section>

	<?php if ($wp_query->max_num_pages > 1) : ?>
		<?php get_template_part( 'templates/pagination' ); ?>
	<?php endif; ?>
	

	<?php get_sidebar( dwm_template_base() ); ?>
	
</div>

<?php get_footer( dwm_template_base() ); ?>