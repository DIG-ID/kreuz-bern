<?php

add_action( 'after_setup_theme', 'kreuzbern_setup' );

function kreuzbern_setup() {

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'kreuzbern' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

}


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {

	// Get the theme data
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', false, $theme_version, 'all' );
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/build/main.css', array(), $theme_version );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/build/main.js', array(), $theme_version, true );
}
