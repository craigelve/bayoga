<?php 

function bayoga_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/normalize.css', array(), 'all');
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:500,700', false );
    wp_enqueue_script('jquery');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/bayoga.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'bayoga_script_enqueue' );


function bayoga_theme_setup() {
    add_theme_support( 'menus');
    register_nav_menu( 'primary' , 'Primary Header Navigation');
	register_nav_menu( 'bookingbutton' , 'Book Now');
    register_nav_menu( 'secondary' , 'Footer Navigation');
    
}
add_action( 'init' , 'bayoga_theme_setup');

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' ); 