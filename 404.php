<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Shreeja
 */

get_header(); ?>

    <div class="container">
        <div class="row">

			<div class="st-primary-wrapper col-md-9">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<div class="card shreeja-card">
							<div class="card-block">
								<section class="error-404 not-found">
									<header class="page-header">
										<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'shreeja' ); ?></h1>
									</header><!-- .page-header -->

									<div class="page-content">
										<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'shreeja' ); ?></p>

										<div class="mb-4">
											<?php get_search_form(); ?>
										</div>

										<?php
											the_widget( 'WP_Widget_Recent_Posts', array(), array( 'before_title' => '<h5 class="widget-title">', 'after_title' => '</h5>' ) );

											// Only show the widget if site has multiple categories.
											if ( shreeja_categorized_blog() ) :
										?>

										<div class="widget widget_categories">
											<h5 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'shreeja' ); ?></h5>
											<ul>
											<?php
												wp_list_categories( array(
													'orderby'    => 'count',
													'order'      => 'DESC',
													'show_count' => 1,
													'title_li'   => '',
													'number'     => 10,
												) );
											?>
											</ul>
										</div><!-- .widget -->

										<?php
											endif;


											the_widget( 'WP_Widget_Tag_Cloud', array(), array( 'before_title' => '<h5 class="widget-title">', 'after_title' => '</h5>' ) );
										?>

									</div><!-- .page-content -->
								</section><!-- .error-404 -->
							</div>
							<!-- /.card-block -->
						</div>
						<!-- /.card -->

					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!-- .st-primary-wrapper -->

				<?php
			get_sidebar(); ?> 	
		</div><!-- .row -->
    </div><!-- .container -->

<?php
get_footer();
