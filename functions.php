<?php

add_theme_support( 'post-thumbnails', array( 'post' ) ); 

add_action( 'wp_enqueue_scripts', 'sophia_styles' );

function sophia_styles() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css');
}

add_filter( 'nav_menu_css_class', 'headeruu', 10, 2 );
function headeruu( $classes, $item ){
	$classes[1] = 'header-nav__item';
	return $classes;
}