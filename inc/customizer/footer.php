<?php

// Adds customizer section.
$wp_customize->add_section(
	'footer_section',
	array(
		'priority'       => 90,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Footer', 'kreuz-bern' ),
		'description'    => __( 'Place to edit the footer content', 'kreuz-bern' ),
		'panel'          => 'kreuz_theme_panel',
	)
);

// Footer logo upload
/*$wp_customize->add_setting(
	'footer-logo',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_html',
	)
);
$wp_customize->add_control(
	new WP_Customize_Media_Control(
		$wp_customize,
		'footer-logo',
		array(
			'mime_type'   => 'image',
			'section'     => 'footer_section',
			'priority'    => 1,
			'label'       => __( 'Footer logo', 'kreuz-bern' ),
			'description' => '',
		)
	)
);*/

// Block 1
$wp_customize->add_setting(
	'block-1',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new Kreuz_TinyMCE_Custom_control(
		$wp_customize,
		'block-1',
		array(
			'label'       => __( 'Block 1', 'kreuz-bern' ),
			'description' => '',
			'section'     => 'footer_section',
			'input_attrs' => array(
				'toolbar1'     => 'bold italic bullist numlist alignleft aligncenter alignright link',
				'toolbar2'     => 'formatselect outdent indent | blockquote charmap',
				'mediaButtons' => true,
			),
		)
	)
);

// Block 2
$wp_customize->add_setting(
	'block-2',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new Kreuz_TinyMCE_Custom_control(
		$wp_customize,
		'block-2',
		array(
			'label'       => __( 'Block 2', 'kreuz-bern' ),
			'description' => '',
			'section'     => 'footer_section',
			'input_attrs' => array(
				'toolbar1'     => 'bold italic bullist numlist alignleft aligncenter alignright link',
				'toolbar2'     => 'formatselect outdent indent | blockquote charmap',
				'mediaButtons' => true,
			),
		)
	)
);

// Block 3
$wp_customize->add_setting(
	'block-3',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new Kreuz_TinyMCE_Custom_control(
		$wp_customize,
		'block-3',
		array(
			'label'       => __( 'Block 3', 'kreuz-bern' ),
			'description' => '',
			'section'     => 'footer_section',
			'input_attrs' => array(
				'toolbar1'     => 'bold italic bullist numlist alignleft aligncenter alignright link',
				'toolbar2'     => 'formatselect outdent indent | blockquote charmap',
				'mediaButtons' => true,
			),
		)
	)
);

// Block 4
$wp_customize->add_setting(
	'block-4',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new Kreuz_TinyMCE_Custom_control(
		$wp_customize,
		'block-4',
		array(
			'label'       => __( 'Block 4', 'kreuz-bern' ),
			'description' => '',
			'section'     => 'footer_section',
			'input_attrs' => array(
				'toolbar1'     => 'bold italic bullist numlist alignleft aligncenter alignright link',
				'toolbar2'     => 'formatselect outdent indent | blockquote charmap',
				'mediaButtons' => true,
			),
		)
	)
);

// Block 5
$wp_customize->add_setting(
	'block-5',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new Kreuz_TinyMCE_Custom_control(
		$wp_customize,
		'block-5',
		array(
			'label'       => __( 'Block 5', 'kreuz-bern' ),
			'description' => '',
			'section'     => 'footer_section',
			'input_attrs' => array(
				'toolbar1'     => 'bold italic bullist numlist alignleft aligncenter alignright link',
				'toolbar2'     => 'formatselect outdent indent | blockquote charmap',
				'mediaButtons' => true,
			),
		)
	)
);
