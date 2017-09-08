<?php
/**
 * Shreeja functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shreeja
 */


 /**
 * ------------------------------------------------------------------------------------
 * SET UP THEME DEFAULTS & REGISTER SUPPORTED FUNCTIONS
 * ------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'shreeja_setup' ) ) {
	function shreeja_setup() {

		load_theme_textdomain( 'shreeja', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'shreeja' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'shreeja_custom_background_args', array(
			'default-color' => '302945',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );
	}
}
add_action( 'after_setup_theme', 'shreeja_setup' );



/**
* ------------------------------------------------------------------------------------
* SET CONTENT WIDTH
* ------------------------------------------------------------------------------------
*/
function shreeja_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shreeja_content_width', 640 );
}
add_action( 'after_setup_theme', 'shreeja_content_width', 0 );



/**
* ------------------------------------------------------------------------------------
* REGISTER WIDGET AREA
* ------------------------------------------------------------------------------------
*/
function shreeja_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'shreeja' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'shreeja' ),
		'before_widget' => '<section id="%1$s" class="widget card %2$s"><div class="card-block">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar(array(
		'name' => esc_html__('Subscribe Post', 'shreeja'),
		'id' => 'sidebar-subscribe-post',
		'before_widget' => '<div id="%1$s" class="subscribe-post-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="subscribe-post-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Display a "Subscription form" randomly in between posts loop.', 'shreeja'),
	) );
    register_sidebar(array(
		'name' => esc_html__('Instagram Footer', 'shreeja'),
		'id' => 'sidebar-footer',
		'before_widget' => '<div id="%1$s" class="instagram-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="instagram-title">',
		'after_title' => '</h4>',
		'description' => esc_html__('Add the "Instagram" widget here. You need to install "WP Instagram" plugin first. TIP: For best result, set number of photos to 10.', 'shreeja'),
	) );

	register_sidebar( array(
	    'name'          => esc_html__( 'First Footer Widget Area', 'shreeja' ),
	    'id'            => 'first-footer-widget-area',
	    'description'   => esc_html__( 'Add widgets here.', 'shreeja' ),
	    'before_widget' => '<section id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</section>',
	    'before_title'  => '<h3 class="widget-title">',
	    'after_title'   => '</h3>',
	) );

    register_sidebar( array(
	    'name'          => esc_html__( 'Second Footer Widget Area', 'shreeja' ),
	    'id'            => 'second-footer-widget-area',
	    'description'   => esc_html__( 'Add widgets here.', 'shreeja' ),
	    'before_widget' => '<section id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</section>',
	    'before_title'  => '<h3 class="widget-title">',
	    'after_title'   => '</h3>',
	) );

    register_sidebar( array(
	    'name'          => esc_html__( 'Third Footer Widget Area', 'shreeja' ),
	    'id'            => 'third-footer-widget-area',
	    'description'   => esc_html__( 'Add widgets here.', 'shreeja' ),
	    'before_widget' => '<section id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</section>',
	    'before_title'  => '<h3 class="widget-title">',
	    'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'shreeja_widgets_init' );


/**
* ------------------------------------------------------------------------------------
* ENQUEUE STYLES & SCRIPTS
* ------------------------------------------------------------------------------------
*/
function shreeja_scripts() {
    wp_enqueue_style( 'shreeja-google-fonts', '//fonts.googleapis.com/css?family=Esteban|Montserrat' );
    wp_enqueue_style( 'shreeja-bxslider', get_template_directory_uri() . '/css/jquery.bxslider.min.css' );
    wp_enqueue_style( 'shreeja-swiper', get_template_directory_uri() . '/css/swiper.min.css' );
	wp_enqueue_style( 'shreeja-style', get_stylesheet_uri() );

    // wp_enqueue_script( 'shreeja-tether', get_template_directory_uri() . '/js/tether.min.js', array( 'jquery' ), '', true );
	// wp_enqueue_script( 'shreeja-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'shreeja-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'shreeja-swiper', get_template_directory_uri() . '/js/swiper.jquery.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'shreeja-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'shreeja-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'shreeja-main', get_template_directory_uri() . '/js/shreeja-main.js', array( 'jquery' ), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action( 'wp_enqueue_scripts', 'shreeja_scripts' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function shreeja_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'shreeja_pingback_header' );

// Enqueue admin area script
function shreeja_admin_scripts() {
        wp_enqueue_script( 'shreeja-admin-scripts', get_template_directory_uri() . '/js/shreeja-admin.js', array( 'jquery' ), '', true );
}
add_action( 'admin_enqueue_scripts', 'shreeja_admin_scripts' );




/**
* ------------------------------------------------------------------------------------
* ADD EDITOR STYLE
* ------------------------------------------------------------------------------------
*/
function shreeja_add_editor_styles() {
    add_editor_style( '//fonts.googleapis.com/css?family=Esteban|Montserrat' );
    add_editor_style( get_template_directory_uri() . '/css/shreeja-editor-style.css' );
}
add_action( 'admin_init', 'shreeja_add_editor_styles' );




/**
* ------------------------------------------------------------------------------------
* REQUIRE FILES
* ------------------------------------------------------------------------------------
*/
// TGMPA
require get_template_directory() . '/framework/install-plugins.php';

// Customizer
require get_template_directory() . '/functions/customizer-settings.php';
require get_template_directory() . '/functions/customizer-style.php';

// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Custom navigation for this theme.
require get_template_directory() . '/inc/custom-navigation.php';

// Custom comments for this theme.
require get_template_directory() . '/inc/custom-comments.php';

// Additional features to allow styling of the templates.
require get_template_directory() . '/inc/template-functions.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.
require get_template_directory() . '/inc/jetpack.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
* ------------------------------------------------------------------------------------
* FUNCTIONS
* ------------------------------------------------------------------------------------
*/
// Get Social Links with icon
function shreeja_get_social_icons() { ?>
	<?php if(get_theme_mod('shreeja_facebook')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_facebook')); ?>" target="_blank" class="nav-link"><i class="fa fa-facebook"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_twitter')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_twitter')); ?>" target="_blank" class="nav-link"><i class="fa fa-twitter"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_instagram')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_instagram')); ?>" target="_blank" class="nav-link"><i class="fa fa-instagram"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_pinterest')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_pinterest')); ?>" target="_blank" class="nav-link"><i class="fa fa-pinterest"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_bloglovin')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_bloglovin')); ?>" target="_blank" class="nav-link"><i class="fa fa-heart"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_google')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_google')); ?>" target="_blank" class="nav-link"><i class="fa fa-google-plus"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_tumblr')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_tumblr')); ?>" target="_blank" class="nav-link"><i class="fa fa-tumblr"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_youtube')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_youtube')); ?>" target="_blank" class="nav-link"><i class="fa fa-youtube-play"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_dribbble')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_dribbble')); ?>" target="_blank" class="nav-link"><i class="fa fa-dribbble"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_soundcloud')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_soundcloud')); ?>" target="_blank" class="nav-link"><i class="fa fa-soundcloud"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_vimeo')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_vimeo')); ?>" target="_blank" class="nav-link"><i class="fa fa-vimeo-square"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_linkedin')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_linkedin')); ?>" target="_blank" class="nav-link"><i class="fa fa-linkedin"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_snapchat')) : ?><li class="social-item"><a href="<?php echo esc_html(get_theme_mod('shreeja_snapchat')); ?>" target="_blank" class="nav-link"><i class="fa fa-snapchat-ghost"></i></a></li><?php endif; ?>
	<?php if(get_theme_mod('shreeja_rss')) : ?><li class="social-item"><a href="<?php echo esc_url(get_theme_mod('shreeja_rss')); ?>" target="_blank" class="nav-link"><i class="fa fa-rss"></i></a></li><?php endif; ?>
<?php }

// Add Social Fields to Author User
function shreeja_add_user_contact_methods( $user_contact ) {

	// Add user contact methods
	$user_contact['twitter'] = __( 'Twitter Username', 'shreeja' );
	$user_contact['skype']   = __( 'Skype Username', 'shreeja' );

	return $user_contact;
}
add_filter( 'user_contactmethods', 'shreeja_add_user_contact_methods' );
