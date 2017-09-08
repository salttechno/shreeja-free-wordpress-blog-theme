<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shreeja
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
		 <div class="shreeja-cover-wrapper small-post-header post-header-back">
			
			<div class="shreeja-cover-content row align-items-center justify-content-center">
				<div class="col-md-6">
					<div class="entry-meta ">
						<?php
						the_archive_title( '<h3 class="page-title">', '</h3>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					     ?>
					</div><!-- /.entry-meta -->
					
				</div><!-- /.col -->
			</div><!-- /.shreeja-cover-content -->
		</div>
	<?php endif; ?>

	<div class="container">
        <div class="row">

			<div class="st-primary-wrapper col-md-9">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

					<?php
					if ( have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						shreeja_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .st-primary-wrapper -->

			<?php
			get_sidebar(); ?> 
		</div><!-- .row -->
    </div><!-- .container -->

<?php
get_footer();
