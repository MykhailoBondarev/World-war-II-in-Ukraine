<?php get_header(); ?>
<?php include(TEMPLATEPATH.'/headers/header-kluchovi-podii.php'); ?>
<?php include(TEMPLATEPATH.'/headers/main-menu.php'); ?>

 <div class="kluchovi-podii-bg">
 	<section class="container substrate"> 	 
		<h1 class="page-name"><?php the_title(); ?></h1>
		<div class="photo-post">
			<?php if ( have_posts() ) : query_posts(); ?> 
			<?php foreach ($posts as $post) : setup_postdata ($post); ?>				
	        <?php the_content(); ?>  	  	
			<?php endforeach; wp_reset_postdata(); ?> 						
			<?php endif; wp_reset_query(); ?>	
				
		</div>
 	</section>
 </div>

<?php include(TEMPLATEPATH.'/footers/footer-kluchovi-podii.php'); ?>
<?php get_footer(); ?>

