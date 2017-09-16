<article class="post" id="post-<?php the_ID(); ?>">
	<header class="post--header">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<h1 class="post--title"><?php the_title(); ?></h1>
		</a>

		<?php if (!is_page() ) get_template_part("templates/content", "meta"); ?>

	</header>
	<section class="post--content">
		<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
		} 
		?>
		<?php the_content(); ?>
	</section>

	<?php if ( get_template_part( "templates/content", "footer" ); ?>

</article>