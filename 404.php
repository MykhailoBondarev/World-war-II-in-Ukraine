<?php get_header(); ?>
<?php include(TEMPLATEPATH.'/headers/header-kluchovi-podii.php'); ?>
<?php include(TEMPLATEPATH.'/headers/main-menu.php'); ?>

 <div class="kluchovi-podii-bg">
 	<section class="container substrate"> 	 
		<h1 class="page-name alert"><?php _e( 'Вибачте, але такої сторінки не існує!', 'wwii' ); ?></h1>
		<div class="post">			
			<p><?php _e( 'Можливо вона була видалена або Ви помилилися під час пошуку. Спробуйте скласти інший пошуковий запит', 'wwii' ); ?></p>
			<div class="search-form-404"><?php get_search_form(); ?></div>				
		</div>
 	</section>
 </div>
 
<?php include(TEMPLATEPATH.'/footers/footer-kluchovi-podii.php'); ?>
<?php get_footer(); ?>