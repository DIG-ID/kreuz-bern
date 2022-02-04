<?php

add_action( 'after_setup_theme', 'kreuzbern_setup' );

// Setup theme
function kreuzbern_setup() {

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'kreuzbern' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'widgets-block-editor' );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_image_size( 'main-block-thumbnail', 462, 328, array( 'center', 'center' ) );

	add_image_size( 'offers-banner-block-image', 953, 318, array( 'center', 'center' ) );

	add_image_size( 'gallery-full-image', 1920, 1080, array( 'center', 'center' ) );

	add_image_size( 'gallery-thumbnail-image', 465, 297.5, false );

}

// Enqueue styles and scripts
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

// Register ustom theme sidebar.
add_action( 'widgets_init', 'kreuzbern_register_sidebars' );
function kreuzbern_register_sidebars() {
	/* Register the 'footer' sidebar. */
	register_sidebar(
		array(
			'id'            => 'footer-widgets',
			'name'          => __( 'Footer Widgets' ),
			'description'   => __( 'Widgets that appears on the footer of the website.' ),
			'before_widget' => '<div id="%1$s" class="col-sm-12 col-md-2 widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

// Theme otimizations.
require get_template_directory() . '/inc/theme-optimizations.php';

// Theme customizer options.
require get_template_directory() . '/inc/customizer.php';
