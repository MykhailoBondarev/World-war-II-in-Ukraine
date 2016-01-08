<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( is_search() ) : ?>	
			 <a a href="<?php the_permalink() ?>" rel="bookmark" class="block">
		     	<?php the_post_thumbnail(); ?>
		        <p class="post-name"><?php the_title(); ?></p> 
		        <?php the_excerpt(); ?>	     		
		  	</a>	
		<?php endif; ?>
	<?php endwhile; wp_reset_postdata(); ?>	
<?php get_footer(); ?>


