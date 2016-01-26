<div class="post--index">
	<header class="search-header">
		<h1 class="post-title"><?php printf( __( 'Search Results for: %s', 'dwmblank' ), get_search_query() ); ?></h1>
	</header>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php get_template_part( 'templates/content-preview' ); ?>

	<?php endwhile; ?>

	<?php else : ?>
		<article id="post-0" class="post no-results not-found">
			<header class="header">
				<h2 class="entry-title"><?php _e( 'Nothing Found', 'dwmblank' ); ?></h2>
			</header>
			<section class="entry-content">
				<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'dwmblank' ); ?></p>
				<h4>Suggestions:</h4>
				<ol>
					<li>Make sure all keywords are spelled correctly.</li>
					<li>Try different keywords.</li>
					<li>Try more general keywords.</li>
				</ol>
				<?php get_search_form(); ?>
			</section>
		</article>

	<?php endif; ?>
</div>	