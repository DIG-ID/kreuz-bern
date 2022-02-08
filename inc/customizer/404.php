<?php

// Adds customizer section.
$wp_customize->add_section(
	'404_section',
	array(
		'priority'       => 100,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( '404', 'kreuz-bern' ),
		'description'    => __( 'Place to edit the 404 page content', 'kreuz-bern' ),
		'panel'          => 'kreuz_theme_panel',
	)
);

// Image
$wp_customize->add_setting(
	'404_image',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Media_Control(
		$wp_customize,
		'404_image',
		array(
			'label'       => __( 'Image', 'kreuz-bern' ),
			'description' => '',
			'section'     => '404_section',
			'mime_type'   => 'image',
		)
	)
);
