<?php

/**
* ------------------------------------------------------------------------------------
* customizer-logo-header.php
*
* For adding customizer settings - header & logo settings
* ------------------------------------------------------------------------------------
*/


/**
* ADD NEW SECTION
*/
$wp_customize->add_section( 'shreeja_logo_header_section' , array(
	'title' => esc_html__( 'Logo & Header Settings', 'shreeja' ),
	'priority' => 22,
) );




/**
* Add logo
*/
$wp_customize->add_setting(
	'shreeja_logo',
	array(
		'sanitize_callback' => 'esc_url_raw'
	)
);
// Add control
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'shreeja_logo',
		array(
			'label' => esc_html__( 'Upload Logo', 'shreeja' ),
			'section' => 'shreeja_logo_header_section',
			'settings' => 'shreeja_logo'
		)
	)
);



/**
* Add logo height
*/
$wp_customize->add_setting(
	'shreeja_logo_height',
	array(
		'default' => '50',
		'sanitize_callback' => 'shreeja_sanitize_number'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_logo_height',
    array(
        'type' => 'number',
        'label' => esc_html__( 'Logo Height (in px)', 'shreeja' ),
        'section' => 'shreeja_logo_header_section',
        'description' => 'Width will be adjusted proportionally.'
    )
);




/**
* Display Tagline option
*/
$wp_customize->add_setting(
	'shreeja_display_tagline',
	array(
        'default' => true,
		'sanitize_callback' => 'shreeja_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_display_tagline',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Display Tagline Under Logo', 'shreeja' ),
        'section' => 'shreeja_logo_header_section'
    )
);



/**
* Display Top Navbar

$wp_customize->add_setting(
	'shreeja_hide_topbar',
	array(
        'default' => false,
		'sanitize_callback' => 'shreeja_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_hide_topbar',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Top Navigation Bar', 'shreeja' ),
        'section' => 'shreeja_logo_header_section'
    )
);
*/


/**
* Hide Fixed Main Navbar
*/
$wp_customize->add_setting(
	'shreeja_hide_fixed_navbar',
	array(
        'default' => false,
		'sanitize_callback' => 'shreeja_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_hide_fixed_navbar',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Fixed Main Navbar', 'shreeja' ),
        'section' => 'shreeja_logo_header_section',
        'description' => 'Hide main navbar that appears fixed at top when visitor scrolls page.'
    )
);
