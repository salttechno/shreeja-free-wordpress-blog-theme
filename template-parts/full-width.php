<?php
/**
* Template Name: Full Width Page Template
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Shreeja
*/

get_header(); ?>

	<div class="shreeja-cover-wrapper page-cover post-header-back">
		<div class="shreeja-cover-bg" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)"></div><!-- /.shreeja-cover -->
		<div class="shreeja-cover-content row align-items-center justify-content-center">
			<div class="col-md-6">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			</div><!-- /.col -->
		</div><!-- /.shreeja-cover-content -->
	</div>

    <div class="container">
        <div class="row">
			<div class="st-primary-wrapper col-lg-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .st-primary-wrapper -->
		</div><!-- .row -->
    </div><!-- .container -->




<?php

get_footer();
