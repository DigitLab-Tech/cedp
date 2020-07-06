<?php
add_action( 'wp_enqueue_scripts', 'add_vanta_script');

function add_vanta_script(){
	wp_enqueue_script('cedp_tree', includes_url().'/js/vanta/three.r95.min.js');
	wp_enqueue_script('cedp_net', includes_url().'/js/vanta/vanta.net.min.js',['cedp_tree']);
}

add_action('wp_enqueue_scripts', 'add_ajax_script');
function add_ajax_script(){
	wp_enqueue_script('ajax', get_stylesheet_directory_uri() . '/js/ajax.js');
	wp_localize_script('ajax', 'ajax',['url' => admin_url( 'admin-ajax.php' )]);
}

add_action('wp_ajax_nopriv_send_contact_form', 'send_contact_form');
add_action('wp_ajax_send_contact_form', 'send_contact_form');
function send_contact_form(){
	wp_die('test');
}
