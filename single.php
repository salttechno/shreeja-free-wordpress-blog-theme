<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Shreeja
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

	<?php if ( is_single() ) : ?>
		
		<div class="shreeja-cover-wrapper">
			<div class="shreeja-cover-bg" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)"></div><!-- /.shreeja-cover -->
			<div class="shreeja-cover-content row align-items-center justify-content-center">
				<div class="col-md-6">
					<div class="entry-meta ">
						<?php
							$categories_list = get_the_category_list( esc_html__( ' &#8226; ', 'shreeja' ) );
							if ( $categories_list && shreeja_categorized_blog() ) {
								/* translators: 1: list of categories. */
								printf( '<span class="cat-links shreeja-cat-links">' . esc_html__( '%1$s', 'shreeja' ) . '</span>', $categories_list ); // WPCS: XSS OK.
							}
						?>
					</div><!-- /.entry-meta -->
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<div class="entry-meta">
						<?php shreeja_posted_on(); ?>
					</div><!-- .entry-meta -->
				</div><!-- /.col -->
			</div><!-- /.shreeja-cover-content -->
		</div>
		
	<?php endif; ?>

	<div class="w-100"></div>
 	<div class="container">
        <div class="row">
			<?php
				if ( !get_theme_mod( 'shreeja_full_width_post' ) && get_theme_mod( 'shreeja_left_sidebar_post' ) ) {
					get_sidebar();
				}
		 	?>

			<div class="st-primary-wrapper <?php if ( get_theme_mod( 'shreeja_full_width_post' ) ) : echo 'col-md-12'; else : echo 'col-md-9'; endif; ?>">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<?php

							get_template_part( 'template-parts/content', get_post_format() );

							// the_post_navigation();
							if ( !get_theme_mod( 'shreeja_hide_related_posts' ) ) {
								get_template_part( 'template-parts/related-posts' );
							}

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .st-primary-wrapper -->

			<?php endwhile; ?>
			<?php
			if ( !get_theme_mod( 'shreeja_full_width_post' ) && !get_theme_mod( 'shreeja_left_sidebar_post' ) ) {
				get_sidebar();
			} ?>
        </div><!-- .row -->
    </div><!-- .container -->
 <?php
get_footer();
