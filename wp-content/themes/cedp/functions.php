<?php
add_action( 'wp_enqueue_scripts', 'add_vanta_script');
function add_vanta_script(){
	wp_enqueue_script('cedp_tree', get_stylesheet_directory_uri().'/assets/js/vanta/three.r95.min.js');
	wp_enqueue_script('cedp_net', get_stylesheet_directory_uri().'/assets/js/vanta/vanta.net.min.js',['cedp_tree']);
}

add_action( 'wp_enqueue_scripts', 'add_cedp_css');
function add_cedp_css(){
	wp_enqueue_style('cedp_flex_css', get_stylesheet_directory_uri().'/assets/css/flex.css');
	wp_enqueue_style('cedp_service_css', get_stylesheet_directory_uri().'/assets/css/service.css');
	wp_enqueue_style('cedp_contact_css', get_stylesheet_directory_uri().'/assets/css/contact.css');
}

add_action( 'wp_enqueue_scripts', 'remove_inline_css', 20);
function remove_inline_css() {
	$styles = wp_styles();
	$styles->add_data( 'twentytwenty-style', 'after', array() );
}
