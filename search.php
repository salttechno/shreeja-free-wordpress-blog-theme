<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Shreeja
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<div class="shreeja-cover-wrapper page-cover post-header-back">
		
			<div class="shreeja-cover-content row align-items-center justify-content-center">
				<div class="col-md-6">
					<h5 class="page-title"><?php printf( esc_html__( 'Search Results For %s', 'shreeja' ), '<h2 class="body-font">' . get_search_query() . '</h2>' ); ?></h5>
				</div><!-- /.col -->
			</div><!-- /.shreeja-cover-content -->
	    </div>
	<?php else: ?>
	    <div class="shreeja-cover-wrapper page-cover post-header-back">
		
			<div class="shreeja-cover-content row align-items-center justify-content-center">
				<div class="col-md-6">
					<h5 class="page-title"><?php printf( esc_html__( 'Nothing Found For %s', 'shreeja' ), '<h2 class="">' . get_search_query() . '</h2>' ); ?></h5>
				</div><!-- /.col -->
			</div><!-- /.shreeja-cover-content -->
	    </div>
	<?php endif; ?>
	<div class="container">
        <div class="row">
				<div class="st-primary-wrapper col-md-9">
					<section id="primary" class="content-area">
						<main id="main" class="site-main" role="main">

						<?php
						if ( have_posts() ) : ?>

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							shreeja_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>

						</main><!-- #main -->
					</section><!-- #primary -->
				</div><!-- .st-primary-wrapper -->

				<?php
				get_sidebar();  ?> 
		</div><!-- .row -->
    </div><!-- .container -->

<?php
get_footer();
