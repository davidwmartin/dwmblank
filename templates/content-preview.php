<article class="post-preview" id="post-preview--<?php the_ID(); ?>">
	<header class="preview--head">
		<h3 class="preview--title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h3>

		<?php get_template_part("templates/content", "meta"); ?>

	</header>

	<section class="preview--content">
		<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
		} 
		?>
		<?php the_excerpt(); ?>

	</section>

</article>