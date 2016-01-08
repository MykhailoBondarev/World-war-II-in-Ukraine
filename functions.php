<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Правий сайдбар',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

add_theme_support( 'menus' );

add_theme_support('post-thumbnails');
set_post_thumbnail_size(298, 172, true);


add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );


add_action( 'after_setup_theme', 'slug_post_formats' );
function slug_post_formats() {
    add_theme_support(
        'post-formats', array(
            'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
        )
    );
}

if ( ! current_user_can( 'manage_options' ) ) {
	show_admin_bar( false );
}


function content($limit) {
  $content = explode(' ', strip_tags(get_the_content()), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...'.'<br />';
  } else {
    $content = implode(" ",$content);
  } 
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

?>



