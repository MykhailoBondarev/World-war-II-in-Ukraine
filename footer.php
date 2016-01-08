
      				<section class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
      					<p class="caption">методичні матеріали</p>
    						<ul class="method-list">
    							<li><a href="<?php the_permalink(); ?>">Щодо відзначення 8-9 травня</a></li>
    							<li><a href="#">Щодо відзначення 70 років від дня завершення Другої світової війни</a></li>
    							<li><a href="#">Урок мужності для МОН-2</a></li>
    						</ul>
      				</section>              
      				<form class="col-xs-12 col-sm-6 col-md-6 col-lg-6 callback-form">
	      				<p class="caption">отримувати новини</p>
	      				<input type="text" class="subscribe" placeholder="ваше ім’я" required>
	      				<input type="email" class="subscribe" placeholder="ваш e-mail" required>
	      				<button class="subscribe-btn" type="submit">Підписатись</button>
      				</form>
      				<section class="col-xs-12 col-sm-6 col-md-6 col-lg-3 about-project">                  
                  <?php  wp_nav_menu( array('menu' => 'footer-menu','container' => '','menu_class' => '', 'menu_id' => '','fallback_cb' => '__return_empty_string')); ?>            
      				</section>   
      				<section class="social-btn col-xs-12 col-sm-12 col-md-12 col-lg-12">
      					<a href="#" class="fb-btn"></a>
      					<a href="#" class="tw-btn"></a>
      					<a href="#" class="yt-btn"></a>
                <a href="/dlya-zavantazhennya/" class="dl-btn" title="Для завантаження"></a>
      				</section>   				
      			</div>
      	</div>
      	<div class="col-lg-12 footer-down">
      		<div class="container">
      			<div class="footer-down-in">
      				<!-- 60px --> (C) CopyRight
      			</div>      			
      		</div>
      	</div>
    </footer>     
    
    <?php wp_footer(); ?>
