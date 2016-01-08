<?php get_header(); ?>
<?php include(TEMPLATEPATH.'/headers/header-main.php'); ?>
<?php include(TEMPLATEPATH.'/headers/main-menu.php'); ?>

	<i id="bgimg"></i>	
	<div class="wrap">
		<video id="main_page_video" src="http://www.youtubeinmp4.com/redirect.php?video=DXaPYecIdiQ" controls="controls" muted="false" autoplay="autoplay" loop="loop" preload poster="<?php bloginfo('template_url'); ?>/img/war-bg.jpg"></video>
		
		<div class="container">			
			<section class="main-section"> 
				<!-- 	970px  -->
				<a name="#slider"><span id="go_down" class="go_down"></span></a>		
			</section>
		</div>	
	</div>			
		
		<!-- 320px -->
	<div id="main-slider" class="owl-carousel owl-theme">
			<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide1.jpg" alt="Victory">
				<span class="slide-caption">
					1939-1945
				</span>
				<span class="slide-text">
					ніколи знову
				</span>
			</div>
			<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide2.jpg" alt="WAR"></div>
			<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide1.jpg" alt="Victory">
				<span class="slide-caption">
					1939-1945
				</span>
				<span class="slide-text">
					ніколи знову
				</span>
			</div>
			<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide3.jpg" alt="WAR II"></div>
			<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide1.jpg" alt="Victory">
				<span class="slide-caption">
					1939-1945
				</span>
				<span class="slide-text">
					ніколи знову
				</span>
			</div> 
			<div class="item"><img src="<?php bloginfo('template_url'); ?>/img/slide4.jpg" alt="WAR III"></div>
	</div>

<?php include(TEMPLATEPATH.'/footers/footer-main.php'); ?>
<?php get_footer(); ?>