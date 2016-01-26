<div class="post--index">
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'templates/content-preview' ); ?>

	<?php endwhile; ?>
</div>