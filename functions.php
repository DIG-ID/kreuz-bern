<?php 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-styles', get_stylesheet_directory_uri() . '/css/main.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-scripts', get_stylesheet_directory_uri() . '/js/main.js', array(), $the_theme->get( 'Version' ), true );
}
