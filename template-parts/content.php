<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shreeja
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="card shreeja-card">
		<?php if ( has_post_thumbnail() ) : ?>
	        <?php if ( !is_single() ) : ?>
	    		<a href="<?php echo get_permalink() ?>" title="<?php the_title_attribute(); ?>" class="shreeja-thumb-link">
	                <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'card-img-top d-block img-fluid w-100']); ?>
	            </a>
	        <?php endif; ?>
		<?php else : ?>
			<?php if ( get_theme_mod( 'shreeja_default_image_home' ) ) : ?>
				<?php if ( !is_single() ) : ?>
		    		<a href="<?php echo get_permalink() ?>" title="<?php the_title_attribute(); ?>" class="shreeja-thumb-link">
		                <img src="<?php echo get_template_directory_uri() . '/images/default-img.png'; ?>" alt="<?php the_title_attribute(); ?>" class="card-img-top d-block img-fluid w-100">
		            </a>
		        <?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>

		<div class="card-block">
			<?php if ( !is_single() ) : ?>
				<header class="entry-header">
					<div class="entry-meta">
						<?php
							$categories_list = get_the_category_list( esc_html__( ' &#8226; ', 'shreeja' ) );
							if ( $categories_list && shreeja_categorized_blog() ) {
								/* translators: 1: list of categories. */
								printf( '<span class="cat-links shreeja-cat-links">' . esc_html__( '%1$s', 'shreeja' ) . '</span>', $categories_list ); // WPCS: XSS OK.
							}
						?>
					</div><!-- /.entry-meta -->
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
					endif;

					if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php shreeja_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php
					endif; ?>
				</header><!-- .entry-header -->
			<?php endif; ?>

			<?php if ( is_single() ) : ?>
				<div class="entry-content add-dropcap">
					<?php
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shreeja' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shreeja' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

			<?php else : ?>
		        <div class="entry excerpt entry-summary">
					<?php the_excerpt(); ?>
				</div><!--/.entry-->
		    <?php endif; ?>

			<?php if ( !is_single() ) : ?>
                <div class="read-more text-center">
        			<h6 class="mb-0">
						<small><a href="<?php echo get_permalink() ?>" class="btn btn-primary"><?php esc_html_e( 'Continue Reading', 'shreeja' ); ?> <i class="fa fa-arrow-right "></i></a></small>
					</h6>
        		</div>
            <?php endif; ?>

			<footer class="entry-footer">
				<?php shreeja_entry_footer(); ?>
			</footer><!-- .entry-footer -->

			<?php if ( is_sticky() && !is_single() ) : ?>
	            <div class="sticky-icon">
	                <i class="fa fa-bookmark" title="<?php echo esc_html__( 'Sticky Post', 'shreeja' ) ?>"></i>
	            </div>
	            <!-- /.sticky-icon -->
	        <?php endif; ?>
		</div><!-- /.card-block -->
	</div><!-- /.card -->
</article><!-- #post-<?php the_ID(); ?> -->
