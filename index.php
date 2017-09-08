<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shreeja
 */

get_header(); ?>

<?php if ( is_home() ) : ?>
  
	<?php if( ! get_theme_mod( 'shreeja_hide_featured_posts' ) ) : ?>
		<div class="container">
		  <?php get_template_part( 'inc/featured-posts' ); ?>
		</div>
	<?php endif; ?>
	
<?php endif; ?>

<div class="container">
    <div class="row">
		<?php if ( !get_theme_mod( 'shreeja_full_width_home' ) && get_theme_mod( 'shreeja_left_sidebar_home' ) ) : ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>

			<div class="st-primary-wrapper <?php if ( get_theme_mod( 'shreeja_full_width_home' ) ) : echo 'col-md-12'; else : echo 'col-md-9'; endif; ?>">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>

						<?php
						endif;
						?>

						<?php if ( get_theme_mod( 'shreeja_home_layout' ) == 'full' ) : ?>

							<?php
							/* Start the Loop */
							$counter = 0;
							$default_posts_per_page = get_option( 'posts_per_page' );

							$subscribe_post_pos = rand(1, $default_posts_per_page);

							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', get_post_format() );

								if ( $counter == $subscribe_post_pos ) {
									if ( is_active_sidebar( 'sidebar-subscribe-post' ) ) : ?>
										<div id="footer-instagram">
											<?php dynamic_sidebar( 'sidebar-subscribe-post' ) ?>
										</div>
									<?php endif;
								}

								$counter++;

							endwhile;
							?>


						<?php elseif ( get_theme_mod( 'shreeja_home_layout' ) == 'grid' ) : ?>

							<div class="row">
								<?php
								/* Start the Loop */
								$counter = 0;
								$default_posts_per_page = get_option( 'posts_per_page' );

								$subscribe_post_pos = rand(1, $default_posts_per_page);

								while ( have_posts() ) : the_post(); ?>

									<div class="col-md-6 grid-card">

										<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

									</div><!-- /.col-md-6 -->

									<?php
									if ( $counter == $subscribe_post_pos ) { ?>
										<div class="col-md-6 grid-card">
										<?php if ( is_active_sidebar( 'sidebar-subscribe-post' ) ) : ?>
											<div id="footer-instagram">
												<?php dynamic_sidebar( 'sidebar-subscribe-post' ) ?>
											</div>
										<?php endif; ?>
										</div><!-- /.col-md-6 -->
									<?php }

									$counter++;

								endwhile;
								?>
							</div>


						<?php else : ?>

							<div class="row">
								<div class="card-columns">
									<?php
									/* Start the Loop */
									$counter = 0;
									$default_posts_per_page = get_option( 'posts_per_page' );

									$subscribe_post_pos = rand(1, $default_posts_per_page);

									while ( have_posts() ) : the_post();

										get_template_part( 'template-parts/content', get_post_format() );

										if ( $counter == $subscribe_post_pos ) {
											if ( is_active_sidebar( 'sidebar-subscribe-post' ) ) : ?>
												<div id="footer-instagram">
													<?php dynamic_sidebar( 'sidebar-subscribe-post' ) ?>
												</div>
											<?php endif;
										}

										$counter++;

									endwhile;
									?>
								</div>
							</div>

						<?php endif; ?>

						<?php
						shreeja_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .st-primary-wrapper -->

		<?php
		if ( !get_theme_mod( 'shreeja_full_width_home' ) && !get_theme_mod( 'shreeja_left_sidebar_home' ) ) {
			get_sidebar();
		} ?>
    </div><!-- .row -->
</div><!-- .container -->
 <?php
get_footer();
