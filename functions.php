<?php
add_action( 'after_setup_theme', 'kreuzbern_setup' );
function kreuzbern_setup() {

register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'kreuzbern' ),
		) );

add_theme_support( 'menus' );
}
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',false,'1.1','all');

function nd_dosth_theme_setup() {
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-styles', get_stylesheet_directory_uri() . '/css/main.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-scripts', get_stylesheet_directory_uri() . '/js/main.js', array(), $the_theme->get( 'Version' ), true );
}
