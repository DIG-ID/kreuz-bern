<?php

add_action( 'after_setup_theme', 'kreuzbern_setup' );

// Setup theme
function kreuzbern_setup() {

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'kreuz-bern' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'widgets-block-editor' );

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_image_size( 'main-block-thumbnail', 462, 330, array( 'center', 'center' ) );

	add_image_size( 'offers-banner-block-image', 954, 330, array( 'center', 'center' ) );

	add_image_size( 'gallery-full-image', 1920, 1080, array( 'center', 'center' ) );

	add_image_size( 'gallery-thumbnail-image', 465, 300, array( 'center', 'center' ) );

}

if ( ! function_exists( 'kreuz_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 */
	function kreuz_preload_webfonts() {
		?>
		<!--<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( '/assets/fonts/GT-Sectra-Fine-Bold.woff' ) ); ?>" as="font" type="font/woff" crossorigin>-->
		<!--<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( '/assets/fonts/GT-Walsheim-Thin.woff' ) ); ?>" as="font" type="font/woff" crossorigin>-->
		<?php
	}

endif;

//add_action( 'wp_head', 'kreuz_preload_webfonts' );

// Enqueue styles and scripts
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	if ( ! is_admin() ) :
		// Get the theme data
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/dist/main.css', array(), $theme_version );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/main.js', array( 'jquery' ), $theme_version, true );
		wp_enqueue_script( 'hotels-network', 'https://www.thehotelsnetwork.com/js/loader.js?property_id=1035300&account_key=668E52580FD704ACA0928FDBBD450775', array( 'jquery' ), $theme_version, false );
		if ( is_page_template( array( 'page-templates/page-attractions.php', 'page-templates/page-contacts.php' ) ) ) :
			wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBAZN5TfX1aWmjodZ4e_6sOcaJV4D59jfo&callback=Function.prototype', array(), $theme_version, false );
			wp_enqueue_script( 'google-map-settings', get_stylesheet_directory_uri() . '/dist/google-maps.js', array( 'jquery' ), $theme_version, false );
		endif;
	endif;
}

// Custom widget for mobile language switcher
add_action( 'widgets_init', 'register_custom_language_widget' );
function register_custom_language_widget() {
	register_sidebar(
		array(
			'id'            => 'lang-switcher-mobile',
			'name'          => esc_html__( 'Language Switcher Mobile Widget' ),
			'description'   => esc_html__( 'Widget area for language selector mobile' ),
			'before_widget' => '<div id="%1$s" class="col-sm-12 col-md-2 widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}

// Google maps
function my_acf_init() {
	acf_update_setting( 'google_api_key', 'AIzaSyBAZN5TfX1aWmjodZ4e_6sOcaJV4D59jfo' );
}

if ( is_page_template( array( 'page-templates/page-attractions.php', 'page-templates/page-contacts.php' ) ) || is_admin() ) :
	add_action( 'acf/init', 'my_acf_init' );
endif;

// Theme otimizations.
//require get_template_directory() . '/inc/theme-optimizations.php';

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// Theme customizer options.
require get_template_directory() . '/inc/customizer.php';

// Theme custom admin settings.
require get_template_directory() . '/inc/theme-admin-settings.php';
