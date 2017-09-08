<?php

/**
* ------------------------------------------------------------------------------------
* customizer-home.php
*
* For adding customizer settings - Homepage settings
* ------------------------------------------------------------------------------------
*/


/**
* ADD NEW SECTION
*/
$wp_customize->add_section( 'shreeja_home_section' , array(
	'title'      => esc_html__( 'Homepage Settings', 'shreeja' ),
	'priority'   => 20,
) );



/**
* Home page layout
*/
$wp_customize->add_setting(
	'shreeja_home_layout',
	array(
		'default'     => 'masonry',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'shreeja_home_layout',
		array(
			'label' => esc_html__( 'Homepage Layout', 'shreeja' ),
			'section' => 'shreeja_home_section',
			'settings' => 'shreeja_home_layout',
			'type' => 'radio',
			'choices' => array(
				'masonry' => esc_html__( 'Masonry Layout', 'shreeja' ),
				'full' => esc_html__( 'Full Post Layout', 'shreeja' ),
				'grid' => esc_html__( 'Grid Post Layout', 'shreeja' ),
			)
		)
	)
);


/**
* DISPLAY DEFAULT IMAGE
*/
$wp_customize->add_setting(
	'shreeja_default_image_home',
	array(
        'default' => false,
		'sanitize_callback' => 'shreeja_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_default_image_home',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Display Default Thumbnail Image', 'shreeja' ),
        'section' => 'shreeja_home_section',
        'description' => 'Check this to show default image if post thumbnail is not set.'
    )
);




/**
* REMOVE SIDEBAR
*/
$wp_customize->add_setting(
	'shreeja_full_width_home',
	array(
        'default' => false,
		'sanitize_callback' => 'shreeja_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_full_width_home',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Remove Sidebar', 'shreeja' ),
        'section' => 'shreeja_home_section',
        'description' => 'Check this to remove sidebar from Homepage.'
    )
);



/**
* SIDEBAR ON LEFT
*/
$wp_customize->add_setting(
	'shreeja_left_sidebar_home',
	array(
        'default' => false,
		'sanitize_callback' => 'shreeja_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_left_sidebar_home',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Sidebar on Left', 'shreeja' ),
        'section' => 'shreeja_home_section',
        'description' => 'Check this to show sidebar on left on home page. Uncheck "Remove Sidebar" above.'
    )
);



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
        'section' => 'shreeja_home_section',
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
			'section'  => 'shreeja_home_section'
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
        'section' => 'shreeja_home_section',
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
			'section' => 'shreeja_home_section',
			'settings' => 'shreeja_featured_ids',
			'type' => 'text',
			'description' => 'Enter comma separated list of post IDs. Featured category setting will be ignored.'
		)
	)
);
