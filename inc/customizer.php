<?php
/**
 * Register theme customizer
 */
function kreuz_customizer_register( $wp_customize ) {
	// New panel for the theme options.
	$wp_customize->add_panel(
		'kreuz_theme_panel',
		array(
			'priority'       => 20,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __( 'Kreuz Bern Options', 'kreuzbern' ),
			'description'    => __( 'Theme options for the Kreuz', 'kreuzbern' ),
		)
	);

	//require get_parent_theme_file_path( '/inc/customizer/social-links.php' );
	//require get_parent_theme_file_path( '/inc/customizer/product-settings.php' );
	//require get_parent_theme_file_path( '/inc/customizer/news-archive.php' );
	//require get_parent_theme_file_path( '/inc/customizer/forms-settings.php' );
	//require get_parent_theme_file_path( '/inc/customizer/cookie-settings.php' );

}
add_action( 'customize_register', 'kreuz_customizer_register' );
