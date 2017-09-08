<?php

/**
* ------------------------------------------------------------------------------------
* customizer-post.php
*
* For adding customizer settings - post settings
* ------------------------------------------------------------------------------------
*/


/**
* ADD NEW SECTION
*/
$wp_customize->add_section( 'shreeja_post_section' , array(
	'title' => esc_html__( 'Post Settings', 'shreeja' ),
	'priority' => 24,
) );



/**
* FULL WIDTH POST
*/
$wp_customize->add_setting(
	'shreeja_full_width_post',
	array(
        'default' => false,
		'sanitize_callback' => 'shreeja_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_full_width_post',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Full Width Post', 'shreeja' ),
        'section' => 'shreeja_post_section',
        'description' => 'Check this to show post in full width format.'
    )
);


/**
* SIDEBAR ON LEFT
*/
$wp_customize->add_setting(
	'shreeja_left_sidebar_post',
	array(
        'default' => false,
		'sanitize_callback' => 'shreeja_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_left_sidebar_post',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Sidebar on Left', 'shreeja' ),
        'section' => 'shreeja_post_section',
        'description' => 'Check this to show sidebar on left on post page. Uncheck Full width post above.'
    )
);



/**
* Hide Related Posts
*/
$wp_customize->add_setting(
	'shreeja_hide_related_posts',
	array(
        'default' => false,
		'sanitize_callback' => 'shreeja_sanitize_checkbox'
	)
);
// Add control
$wp_customize->add_control(
    'shreeja_hide_related_posts',
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Related Posts', 'shreeja' ),
        'section' => 'shreeja_post_section',
        'description' => 'Check this to hide related posts shown at the bottom of the post.'
    )
);
