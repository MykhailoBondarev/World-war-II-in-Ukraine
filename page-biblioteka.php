<?php get_header(); ?>
<?php include(TEMPLATEPATH.'/headers/header-statti.php'); ?>
<?php include(TEMPLATEPATH.'/headers/main-menu.php'); ?>

 <div class="statti-bg">
 	<section class="container substrate"> 	 
		<h1 class="page-name"><?php the_title(); ?></h1>
		<div id="ebibl-post" class="post">		
	        <?php if ( have_posts() ) : query_posts(); ?> 
			<?php foreach ($posts as $post) : setup_postdata ($post); ?>				
	        <?php the_content(); ?>  	  	
			<?php endforeach; wp_reset_postdata(); ?> 						
			<?php endif; wp_reset_query(); ?>	
		</div>
 	</section>
 </div>

<?php include(TEMPLATEPATH.'/footers/footer-statti.php'); ?>
<?php get_footer(); ?>

