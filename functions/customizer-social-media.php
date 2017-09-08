<?php

/**
* ------------------------------------------------------------------------------------
* customizer-social-media.php
*
* For adding customizer settings - social media settings
* ------------------------------------------------------------------------------------
*/


/**
* ADD NEW SECTION
*/
$wp_customize->add_section( 'shreeja_social_media_section' , array(
	'title'      => esc_html__( 'Social Media Settings', 'shreeja' ),
	'priority'   => 22,
) );


/**
* Social Links
*/
// Add Settings
$wp_customize->add_setting(
	'shreeja_facebook',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_twitter',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_instagram',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_pinterest',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_tumblr',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_bloglovin',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_tumblr',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_google',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_youtube',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_dribbble',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_soundcloud',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_vimeo',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_linkedin',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_snapchat',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);
$wp_customize->add_setting(
	'shreeja_rss',
	array(
		'default'     => '',
		'sanitize_callback'     => 'wp_kses_post'
	)
);

// Add Control
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'facebook',
		array(
			'label'      => esc_html__( 'Facebook', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_facebook',
			'type'		 => 'text',
			'priority'	 => 1
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'twitter',
		array(
			'label'      => esc_html__( 'Twitter', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_twitter',
			'type'		 => 'text',
			'priority'	 => 2
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'instagram',
		array(
			'label'      => esc_html__( 'Instagram', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_instagram',
			'type'		 => 'text',
			'priority'	 => 3
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'pinterest',
		array(
			'label'      => esc_html__( 'Pinterest', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_pinterest',
			'type'		 => 'text',
			'priority'	 => 4
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'bloglovin',
		array(
			'label'      => esc_html__( 'Bloglovin', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_bloglovin',
			'type'		 => 'text',
			'priority'	 => 5
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'google',
		array(
			'label'      => esc_html__( 'Google Plus', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_google',
			'type'		 => 'text',
			'priority'	 => 6
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'tumblr',
		array(
			'label'      => esc_html__( 'Tumblr', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_tumblr',
			'type'		 => 'text',
			'priority'	 => 7
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'youtube',
		array(
			'label'      => esc_html__( 'Youtube', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_youtube',
			'type'		 => 'text',
			'priority'	 => 8
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'dribbble',
		array(
			'label'      => esc_html__( 'Dribbble', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_dribbble',
			'type'		 => 'text',
			'priority'	 => 9
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'soundcloud',
		array(
			'label'      => esc_html__( 'Soundcloud', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_soundcloud',
			'type'		 => 'text',
			'priority'	 => 10
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'vimeo',
		array(
			'label'      => esc_html__( 'Vimeo', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_vimeo',
			'type'		 => 'text',
			'priority'	 => 11
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'linkedin',
		array(
			'label'      => esc_html__( 'Linkedin', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_linkedin',
			'type'		 => 'text',
			'priority'	 => 12
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'snapchat',
		array(
			'label'      => esc_html__( 'Snapchat', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_snapchat',
			'type'		 => 'text',
			'priority'	 => 13
		)
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'rss',
		array(
			'label'      => esc_html__( 'RSS Link', 'shreeja' ),
			'section'    => 'shreeja_social_media_section',
			'settings'   => 'shreeja_rss',
			'type'		 => 'text',
			'priority'	 => 14
		)
	)
);
