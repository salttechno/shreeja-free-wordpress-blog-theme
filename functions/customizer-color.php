<?php

/**
* ------------------------------------------------------------------------------------
* customizer-color.php
*
* For adding customizer settings - color settings
* ------------------------------------------------------------------------------------
*/


/**
* Header Background Color
*/
$wp_customize->add_setting(
	'shreeja_header_bg_color',
	array(
        'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
// Add control
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'shreeja_header_bg_color',
        array(
            'label' => __( 'Header Background Color', 'shreeja' ),
            'section' => 'colors',
			'settings' => 'shreeja_header_bg_color'
        )
    )
);



/**
* Post Title Color
*/
$wp_customize->add_setting (
	'shreeja_post_title_color',
	array(
        'default' => '#323232',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);

// Add control
$wp_customize->add_control (
    new WP_Customize_Color_Control(
        $wp_customize,
        'shreeja_post_title_color',
        array(
            'label' => __( 'Post Title Color', 'shreeja' ),
            'section' => 'colors',
			'settings' => 'shreeja_post_title_color'
        )
    )
);


/**
* Post Header Default Color */

$wp_customize->add_setting (
    'shreeja_post_header_back_color',
    array(
        'default' => '#20b2aa',
        'sanitize_callback' => 'sanitize_hex_color'
    )
);

// Add control
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'shreeja_post_header_back_color',
        array(
            'label' => esc_html__( 'Default Post Header Background color', 'shreeja' ),
            'section' => 'colors',
            'settings' => 'shreeja_post_header_back_color'
        )
    )
);



/**
* Body Text Color
*/
$wp_customize->add_setting(
	'shreeja_body_text_color',
	array(
        'default' => '#434343',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
// Add control
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'shreeja_body_text_color',
        array(
            'label' => __( 'Body Text Color', 'shreeja' ),
            'section' => 'colors',
			'settings' => 'shreeja_body_text_color'
        )
    )
);




/**
* Main Brand Color
*/
$wp_customize->add_setting(
	'shreeja_main_brand_color',
	array(
        'default' => '#9E9CBD',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
// Add control
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'shreeja_main_brand_color',
        array(
            'label' => __( 'Main Brand Color', 'shreeja' ),
            'section' => 'colors',
			'settings' => 'shreeja_main_brand_color'
        )
    )
);



/**
* Dark Accent Color
*/
$wp_customize->add_setting(
	'shreeja_dark_accent_color',
	array(
        'default' => '#7F6891',
		'sanitize_callback' => 'sanitize_hex_color'
	)
);
// Add control
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'shreeja_dark_accent_color',
        array(
            'label' => __( 'Dark Accent Color', 'shreeja' ),
            'section' => 'colors',
			'settings' => 'shreeja_dark_accent_color'
        )
    )
);



/**
* Footer Background Color
*/
$wp_customize->add_setting(
    'shreeja_footer_back_color',
    array(
        'default' => '#272B30',
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
// Add control
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'shreeja_footer_back_color',
        array(
            'label' => esc_html__( 'Upper Footer Background Color', 'shreeja' ),
            'section' => 'colors',
            'settings' => 'shreeja_footer_back_color'
        )
    )
);


/**
*  Upper Footer Text Color
*/
$wp_customize->add_setting(
    'shreeja_footer_text_color',
    array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
// Add control
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'shreeja_footer_text_color',
        array(
            'label' => esc_html__( 'Upper Footer Text Color', 'shreeja' ),
            'section' => 'colors',
            'settings' => 'shreeja_footer_text_color'
        )
    )
);



/**
* Lower Footer Background Color
*/
$wp_customize->add_setting(
    'shreeja_lower_footer_back_color',
    array(
        'default' => '#302945',
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
// Add control
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'shreeja_lower_footer_back_color',
        array(
            'label' => esc_html__( 'Lower Footer Background Color', 'shreeja' ),
            'section' => 'colors',
            'settings' => 'shreeja_lower_footer_back_color'
        )
    )
);


/**
* Lower Footer Text Color
*/
$wp_customize->add_setting(
    'shreeja_lower_footer_text_color',
    array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color'
    )
);
// Add control
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'shreeja_lower_footer_text_color',
        array(
            'label' => esc_html__( 'Lower Footer Text Color', 'shreeja' ),
            'section' => 'colors',
            'settings' => 'shreeja_lower_footer_text_color'
        )
    )
);
