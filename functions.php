<?php

function true_style_frontend() {
 	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
 	wp_enqueue_style('font_proxima_nova', get_stylesheet_directory_uri() . '/fonts/proxima-nova/fonts/fonts.css');
 	wp_enqueue_style('rfdewi-black', get_stylesheet_directory_uri() . '/fonts/RFDewiExpanded-Black/style.css');
 	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'true_style_frontend' ); 
 
function true_include_myscript() {
    wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/vendor/jquery-3.6.0.min.js', '', '3.0', false);
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', '', '3.0', false);
}
add_action( 'wp_enqueue_scripts', 'true_include_myscript' );

register_nav_menus(array(
	'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
));