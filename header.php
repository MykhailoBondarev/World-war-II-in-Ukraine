<!DOCTYPE html>
<html lang="uk">
<head>	
	<title><?php bloginfo('name');?><?php wp_title(); ?></title>
	<meta name="generator" content="WodrPress <?php bloginfo('version'); ?>">
	<meta http-equiv="X-UA-Compatible" content="<?php bloginfo('html_type'); ?>;" charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">      
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>    
    <script src="<?php bloginfo('template_url'); ?>/js/mainslider.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/wwii.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="menu-wrap">
    <ul class="menu container">
        <li class="menu-item-close menu-item0" id="menu-close"><a href="#" class="pic-item0">X</a></li>
        <li class="hidden-lg" id="search-menu-item"><?php get_search_form(); ?></li>
        <li class="menu-item menu-item1"><a href="<?php home_url(); ?>/pro-proekt/" class="pic-item pic-item1"><span>про проект</span></a></li>
        <li class="menu-item menu-item2"><a href="<?php home_url(); ?>/category/statti/" class="pic-item pic-item2"><span>Тексти</span></a></li>
        <li class="menu-item menu-item3"><a href="<?php home_url(); ?>/karty/" class="pic-item pic-item3"><span>карти</span></a></li>
        <li class="menu-item menu-item4"><a href="<?php home_url(); ?>/category/kluchovi-podii/" class="pic-item pic-item4"><span>ключові події</span></a></li>
        <li class="menu-item menu-item5"><a href="<?php home_url(); ?>/category/foto/" class="pic-item pic-item5"><span>фото</span></a></li>
        <li class="menu-item menu-item6"><a href="<?php home_url(); ?>/infografika/" class="pic-item pic-item6"><span>інфографіка</span></a></li>
        <li class="menu-item menu-item7"><a href="<?php home_url(); ?>/category/postati/" class="pic-item pic-item7"><span>постаті</span></a></li>
        <li class="menu-item menu-item8"><a href="<?php home_url(); ?>/video/" class="pic-item pic-item8"><span>відео</span></a></li>
        <li class="menu-item menu-item9"><a href="<?php home_url(); ?>/biblioteka/" class="pic-item pic-item9"><span>бібліотека</span></a></li>
        <li class="menu-item menu-item10"><a href="<?php home_url(); ?>/vystavka/" class="pic-item pic-item10"><span>виставка</span></a></li>
    </ul>
    <div class="social-btn container">
        <a href="#" class="fb-btn"></a>
        <a href="#" class="tw-btn"></a>
        <a href="#" class="yt-btn"></a>
    </div>   
</div>
