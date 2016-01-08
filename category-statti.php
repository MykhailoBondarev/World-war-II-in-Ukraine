<?php get_header(); ?>
<?php include(TEMPLATEPATH.'/headers/header-statti.php'); ?>
<?php include(TEMPLATEPATH.'/headers/main-menu.php'); ?>

 <div class="statti-bg">
 	<section class="container"> 	 		
 		<h1 class="page-name statti-caption"><?php wp_title("", true); ?></h1>
 		<div id="content_masonry">	 		
	 		<?php $posts = get_posts ("category=1&orderby=date&numberposts=-1"); ?> 
			<?php if ($posts) : ?>		
			<?php foreach ($posts as $post) : setup_postdata ($post); ?>
				<div class="masonry_item">
			  		<a a href="<?php the_permalink() ?>" rel="bookmark" class="block-statti">
							<p class="post-name"><?php the_title(); ?></p> 
			         	 	<?php echo content(35); ?>
			     			<?php the_post_thumbnail(); ?>      	 	
			  		</a>
		  		</div>
			<?php 
	  		endforeach;
	  		wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</section>
<?php include(TEMPLATEPATH.'/footers/footer-statti.php'); ?>
<?php get_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/statti-masonry.js"></script>
	
