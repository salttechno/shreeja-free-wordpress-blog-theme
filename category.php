<?php
get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<div class="shreeja-cover-wrapper post-header-back small-post-header">
			<div class=""></div><!-- /.shreeja-cover -->
			<div class="shreeja-cover-content row align-items-center justify-content-center">
				<div class="col-md-6">
					<div class="entry-meta ">
						<h5 class="page-title"><?php printf( esc_html__( 'Category %s', 'shreeja' ), '<h2 class="body-font">' . single_cat_title( '', false ) . '</h2>' ); ?></h5>
					<?php
                        the_archive_description( '<div class="archive-description">', '</div>' );
					?>
					</div><!-- /.entry-meta -->
					
				</div><!-- /.col -->
			</div><!-- /.shreeja-cover-content -->
		</div>  <!-- /.shreeja-cover-wrapper -->
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
			get_sidebar();?> 
		</div><!-- .row -->
    </div><!-- .container -->

<?php
get_footer();
