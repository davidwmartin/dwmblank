<footer class="post--footer">
	<span class="postcat"><?php _e( 'Categories: ', 'dwmblank' ); ?>
		<?php the_category( ', ' ); ?>
	</span>
	<span class="posttags">
		<?php the_tags(); ?>
	</span>
	<?php if ( comments_open() ) { 
		echo '<span class="meta-sep">|</span> <span class="post-comments"><a href="' . get_comments_link() . '">' . sprintf( __( 'Comments', 'dwmblank' ) ) . '</a></span>';
	} ?>
</footer> 