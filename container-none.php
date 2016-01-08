<?php ?>
		<h1 class="page-name alert"><?php _e( 'Нічого не знайдено', 'wwii' ); ?></h1>

		<div class="post">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wwii' ), admin_url( 'post-new.php' ) ); ?></p>

			<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Вибачте, але за Вашим запитом нічого не знайдено. Будь ласка, спробуйте ще раз, використовуючи інші ключові слова', 'wwii' ); ?></p>
			<?php get_search_form(); ?>

			<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wwii' ); ?></p>
			<?php get_search_form(); ?>

			<?php endif; ?>
		</div>