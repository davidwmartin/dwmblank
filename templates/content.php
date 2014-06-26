<article class="post" id="post-<?php the_ID(); ?>">
<header class="post-header">
	<?php if ( is_singular() ) { echo '<h1 class="post-title">'; } else { echo '<h2 class="post-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
	<?php if (!is_page() ) get_template_part("templates/content", "meta"); ?>
</header>
<section class="post-content">
	<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
	} 
	?>
	<?php the_content(); ?>
</section>
<!--
	<?php if ( !is_archive() ) get_template_part( "templates/content", "summary" ); ?>
-->
<?php if ( !is_search() ) get_template_part( "templates/content", "footer" ); ?>
</article>