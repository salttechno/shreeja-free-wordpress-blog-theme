<?php

/**
* ------------------------------------------------------------------------------------
* customizer-footer.php
*
* For adding customizer settings - footer settings
* ------------------------------------------------------------------------------------
*/


/**
* ADD NEW SECTION
*/
$wp_customize->add_section( 'shreeja_footer_section' , array(
	'title'      => esc_html__( 'Footer Settings', 'shreeja' ),
	'priority'   => 40,
) );


/**
* Footer Left Text
*/
$wp_customize->add_setting(
	'shreeja_footer_text_left',
	array(
		'default'     => esc_html__( '(c) COPYRIGHT 2017 - ALL RIGHTS RESERVED', 'shreeja' ),
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'shreeja_footer_text_left',
		array(
			'label'      => esc_html__( 'Footer Text Left', 'shreeja' ),
			'section'    => 'shreeja_footer_section',
			'settings'   => 'shreeja_footer_text_left',
			'type'		 => 'text'
		)
	)
);




/**
* Hide Social Media Icons
*/
$wp_customize->add_setting(
	'shreeja_hide_social_icons_footer',
	array(
        'default' => false,
		'sanitize_callback' => 'shreeja_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_hide_social_icons_footer',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Social Icons in Footer', 'shreeja' ),
        'section' => 'shreeja_footer_section',
        'priority'	 => 0
    )
);



/**
* Background Pattern
*/
$wp_customize->add_setting(
	'shreeja_footer_bg',
	array(
		'sanitize_callback' => 'esc_url_raw'
	)
);
// Add control
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'shreeja_footer_bg',
		array(
			'label' => esc_html__( 'Footer Background Pattern', 'shreeja' ),
			'section' => 'shreeja_footer_section',
			'settings' => 'shreeja_footer_bg'
		)
	)
);
