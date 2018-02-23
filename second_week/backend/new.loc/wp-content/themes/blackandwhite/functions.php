<?php

// Ключ google map api
function blackandwhite_gm_key() {
	return 'AIzaSyAIoz9ImV-s4eG1TRbQsOiLyBfSlme8eHg';
}

// Подключение стилей и скриптов
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
	wp_enqueue_script( 'google_map_api', 'https://maps.googleapis.com/maps/api/js?key='.blackandwhite_gm_key(), array( 'jquery' ), false, true);
	wp_enqueue_script( 'js', get_template_directory_uri() . '/js/js.js', array( 'jquery' ), false, true);
}
add_action('wp_enqueue_scripts', 'blackandwhite_scripts');

// Общие настройки темы
function blackandwhite_setup() {
	//Размеры логотипа и миниатюр
	add_theme_support( 'custom-logo', array(
		'height'      => 154,
		'width'       => 60,
		'flex-height' => true,
		'flex-width' => true,
	) );
	remove_image_size('thumbnail');
	remove_image_size('medium');
	remove_image_size('medium-large');
	remove_image_size('large');
	add_image_size('thumbnail', 201, 143, true);
	//Регистрация меню
	register_nav_menu( 'primary-menu', 'Primary Menu' );
	register_nav_menu( 'footer-menu', 'Footer Menu' );
}
add_action( 'after_setup_theme', 'blackandwhite_setup' );

// Виджеты
function blackandwhite_widgets(){
	register_sidebar( array(
		'name' => "Футер 1",
		'id' => 'footer1',
		'description' => 'Это виджет для футера сайта'
	) );
}
add_action( 'widgets_init', 'blackandwhite_widgets' );

// Отключение автоформатирования постов
remove_filter( 'the_content', 'wpautop' );

// Регистрация ключа google map для плагина ACF
function blackandwhite_acf_google_map_api( $api ){	
	$api['key'] = blackandwhite_gm_key();
	return $api;
}
add_filter('acf/fields/google_map/api', 'blackandwhite_acf_google_map_api');