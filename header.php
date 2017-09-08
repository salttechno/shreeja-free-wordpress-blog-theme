<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shreeja
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shreeja' ); ?></a>


		<div class="st-header-area">
			<div class="container">
				<header id="masthead" class="site-header row" role="banner">
					<div class="col-lg-12">
						<div class="site-branding">

							<?php if ( !get_theme_mod( 'shreeja_logo' ) ) : ?>

								<?php if(is_front_page()) : ?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php else : ?>
									<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
								<?php endif; ?>

							<?php else : ?>

								<?php if(is_front_page()) : ?>
									<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url(get_theme_mod('shreeja_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" class="shreeja-logo-img" height="<?php if ( get_theme_mod( 'shreeja_logo_height' ) ) : echo get_theme_mod( 'shreeja_logo_height' ); endif; ?>" /></a></h1>
								<?php else : ?>
									<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url(get_theme_mod('shreeja_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" class="shreeja-logo-img" height="<?php if ( get_theme_mod( 'shreeja_logo_height' ) ) : echo get_theme_mod( 'shreeja_logo_height' ); endif; ?>" /></a></h2>
								<?php endif; ?>

							<?php endif; ?>

							<?php
							if ( get_theme_mod( 'shreeja_display_tagline' ) ) :
								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
									<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
								<?php
								endif;
							endif; ?>
						</div><!-- .site-branding -->

						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle btn btn-primary btn-sm" aria-controls="primary-menu" aria-expanded="false" ><i class="fa fa-bars"></i></button>
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id' => 'primary-menu',
									'menu_class' => 'row justify-content-center shreeja-main-menu'
								) );
							?>
						</nav><!-- #site-navigation -->
					</div><!-- /.col-lg-12 -->

					<?php if ( !get_theme_mod( 'shreeja_hide_fixed_navbar' ) ) : ?>
						<div class="shreeja-main-navbar appear-fixed-on-scroll">
							<div class="container">
								<nav id="site-navigation" class="main-navigation" role="navigation">
									<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
									<?php
										wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id' => 'primary-menu',
											'menu_class' => 'row justify-content-center shreeja-main-menu'
										) );
									?>
								</nav><!-- #site-navigation -->
							</div>
							<!-- /.container -->
						</div><!-- /.shreeja-main-navbar appear-fixed-on-scroll -->
					<?php endif; ?>
				</header><!-- #masthead -->
			</div><!-- /.container -->
		</div><!-- /.st-header-area -->

		<div class="st-content-area">
			
				<div id="content" class="site-content">
