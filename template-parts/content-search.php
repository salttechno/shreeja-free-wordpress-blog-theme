<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shreeja
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="card shreeja-card">
		<div class="card-block">
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

	        <div class="entry excerpt entry-summary">
				<?php the_excerpt(); ?>
			</div><!--/.entry-->

            <div class="read-more text-center">
    			<h6 class="mb-0">
					<small><a href="<?php echo get_permalink() ?>" class="btn btn-primary"><?php esc_html_e( 'Continue Reading', 'shreeja' ); ?> <i class="fa fa-arrow-right "></i></a></small>
				</h6>
    		</div>

			<footer class="entry-footer">
				<?php shreeja_entry_footer(); ?>
			</footer><!-- .entry-footer -->

		</div><!-- /.card-block -->
	</div><!-- /.card -->
</article><!-- #post-<?php the_ID(); ?> -->
