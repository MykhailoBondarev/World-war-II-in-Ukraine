<?php get_header(); ?>
<?php include(TEMPLATEPATH.'/headers/header-statti.php'); ?>
<?php include(TEMPLATEPATH.'/headers/main-menu.php'); ?>

 <div class="statti-bg">
 	<section id="photo" class="container substrate">  	
 		<h1 class="page-name"><?php wp_title("", true); ?></h1>  				
 		<?php $posts = get_posts ("category=10&orderby=date&numberposts=-1"); ?> 
		<?php if ($posts) : ?>
		<?php foreach ($posts as $post) : setup_postdata ($post); ?>
	  		<a a href="<?php the_permalink() ?>" rel="bookmark" class="block">
					<div class="photo-frame">
	     				<?php the_post_thumbnail(); ?>
	     			</div>
	         	 	<p class="post-name"><?php the_title(); ?></p> 	         	 	 		
	  		</a>	  	
		<?php 
  		endforeach;
  		wp_reset_postdata(); ?>    		
		<?php endif; ?>			
	</section>	
 </div>

<?php include(TEMPLATEPATH.'/footers/footer-statti.php'); ?>
<?php get_footer(); ?>
