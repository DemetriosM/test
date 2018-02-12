<?php

function blackandwhite_styles() {
	wp_enqueue_style( 'main_style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'blackandwhite_styles' );

function blackandwhite_scripts() {
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', false, false, true);
    wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'bootstrap_transition', get_template_directory_uri() . '/js/bootstrap-transition.js', array( 'jquery' ), false, true);
	wp_enqueue_script( 'bootstrap_carousel', get_template_directory_uri() . '/js/bootstrap-carousel.js', array( 'jquery' ), false, true);
	wp_enqueue_script( 'js', get_template_directory_uri() . '/js/js.js', array( 'jquery' ), false, true);
}

add_action('wp_enqueue_scripts', 'blackandwhite_scripts');

function blackandwhite_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'blackandwhite_register_nav_menu' );