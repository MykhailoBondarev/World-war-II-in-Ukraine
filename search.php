<?php get_header(); ?>
<?php include(TEMPLATEPATH.'/headers/header-kluchovi-podii.php'); ?>
<?php include(TEMPLATEPATH.'/headers/main-menu.php'); ?>

<div class="kluchovi-podii-bg">
 	<section class="container substrate"> 	 

		<?php if ( have_posts() ) : ?>		
				<h1 class="page-name alert"><?php printf( __( 'Результати пошуку для: %s', 'wwii' ), get_search_query() ); ?></h1>
		<div class="post">		

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'container', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php wwii_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'container', 'none' ); ?>
		<?php endif; ?>

		</div>
	</section>
</div>

<?php include(TEMPLATEPATH.'/footers/footer-kluchovi-podii.php'); ?>
<?php get_footer(); ?>