<?php get_header(); ?>
<?php include(TEMPLATEPATH.'/headers/header-kluchovi-podii.php'); ?>
<?php include(TEMPLATEPATH.'/headers/main-menu.php'); ?>

 <div class="kluchovi-podii-bg">
 	<section class="container substrate"> 	 		
 		<h1 class="page-name"><?php wp_title("", true); ?></h1>
 		<?php $posts = get_posts ("category=3&orderby=date&numberposts=-1"); ?> 
		<?php if ($posts) : ?>
		<?php foreach ($posts as $post) : setup_postdata ($post); ?>
	  		<a a href="<?php the_permalink() ?>" rel="bookmark" class="block-postati">
					<p class="post-name"><?php the_title(); ?></p> 
	         	 	<?php the_excerpt(); ?>
	         	 	<div class="thumbnail-box">
	     				<?php the_post_thumbnail(); ?>
	     			</div>      	 	
	  		</a>
		<?php 
  		endforeach;
  		wp_reset_postdata(); ?>
		<?php endif; ?>
	</section>
 </div>

<?php include(TEMPLATEPATH.'/footers/footer-kluchovi-podii.php'); ?>
<?php get_footer(); ?>
