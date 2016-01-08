<?php
  $post = $wp_query->post;
 
  if (in_category('foto')) {
      include(TEMPLATEPATH.'/single-foto.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>

