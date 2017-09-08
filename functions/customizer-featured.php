<?php

/**
* ------------------------------------------------------------------------------------
* customizer-featured.php
*
* For adding customizer settings - Featured Posts settings
* ------------------------------------------------------------------------------------
*/


/**
* ADD NEW SECTION
*/
$wp_customize->add_section( 'shreeja_featured_section' , array(
	'title'      => esc_html__( 'Featured Posts Settings', 'shreeja' ),
	'priority'   => 21,
) );


/**
* FEATURED POSTS
*/
$wp_customize->add_setting(
	'shreeja_hide_featured_posts',
	array(
        'default' => false,
		'sanitize_callback' => 'shreeja_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_hide_featured_posts',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Featured Posts', 'shreeja' ),
        'section' => 'shreeja_featured_section',
        'description' => 'Check this to hide featured posts sider from Homepage.'
    )
);


/**
* Featured Category
*/
$wp_customize->add_setting(
	'shreeja_featured_category',
	array(
		'sanitize_callback'     => 'wp_kses_post'
	)
);
// Add Control
$wp_customize->add_control(
	new WP_Customize_Category_Dropdown(
		$wp_customize,
		'shreeja_featured_category',
		array(
			'label'    => esc_html__( 'Select Featured Category', 'shreeja' ),
			'settings' => 'shreeja_featured_category',
			'section'  => 'shreeja_featured_section'
		)
	)
);



/**
* Number of featured posts
*/
$wp_customize->add_setting(
	'shreeja_featured_count',
	array(
		'default' => '5',
		'sanitize_callback' => 'shreeja_sanitize_number'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_featured_count',
    array(
        'type' => 'number',
        'label' => esc_html__( 'Number of Featured Posts', 'shreeja' ),
        'section' => 'shreeja_featured_section',
        'description' => 'Enter maximum number of posts to be displayed in slider.'
    )
);



/**
* FEATURED POSTS IDS
*/
$wp_customize->add_setting(
	'shreeja_featured_ids',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
// Add control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'shreeja_featured_ids',
		array(
			'label' => esc_html__( 'Enter featured post IDs', 'shreeja' ),
			'section' => 'shreeja_featured_section',
			'settings' => 'shreeja_featured_ids',
			'type' => 'text',
			'description' => 'Enter comma separated list of post IDs. Featured category setting will be ignored.'
		)
	)
);
