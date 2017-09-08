<?php
get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<div class="shreeja-cover-wrapper post-header-back small-post-header">
		
			<div class="shreeja-cover-content row align-items-center justify-content-center">
				<div class="col-md-6">
					<div class="entry-meta ">
					<?php
                        $authorUrl = get_the_author_meta( 'user_url' );
                        $authorTwitter = get_the_author_meta( 'twitter' );
                        $authorSkype = get_the_author_meta( 'skype' );
                        $authorAvatar = get_avatar_url( get_the_author_meta( 'ID' ) );
                    ?>

					<h5 class="page-title"><?php printf( esc_html__( 'Author %s', 'shreeja' ), '<h2 class="body-font">' . get_the_author() . '</h2>' ); ?></h5>
                    <?php if ( $authorAvatar ) : ?>
                        <img src="<?php echo $authorAvatar; ?>" alt="<?php echo get_the_author_meta( 'display_name' ); ?>" class="mb-2 img-fluid rounded">
                    <?php endif; ?>

					<p class="archive-description"><?php the_archive_description( '', '' ); ?></p>

                    <?php if ( $authorUrl ) : ?>
                        <i class="fa fa-globe mr-2 ml-3"></i><a href="<?php echo $authorUrl; ?>"><?php echo $authorUrl; ?></a>
                    <?php endif; ?>
                    <?php if ( $authorTwitter ) : ?>
                        <i class="fa fa-twitter mr-2 ml-3"></i><a href="<?php echo $authorTwitter; ?>"><?php echo $authorTwitter; ?></a>
                    <?php endif; ?>
                    <?php if ( $authorSkype ) : ?>
                        <i class="fa fa-skype mr-2 ml-3"></i><a href="<?php echo $authorSkype; ?>"><?php echo $authorSkype; ?></a>
                    <?php endif; ?>
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
