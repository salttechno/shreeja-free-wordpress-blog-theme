<?php
/**
 * Template part for displaying related posts
 *
 * @package Shreeja
 */


$categories = get_the_category( $post->ID );

if ( $categories ) {

    $category_ids = array();

    foreach( $categories as $one_category ) {
        $category_ids[] = $one_category->term_id;
    }

    $related_posts_query = new wp_query( array(
        'category__in' => $category_ids,
		'post__not_in' => array($post->ID),
		'posts_per_page' => 2,
		'orderby' => 'rand'
    ) ); ?>

    <?php if( $related_posts_query->have_posts() ) : ?>
        <div class="row shreeja-related-posts mb-4">
            <?php while ( $related_posts_query->have_posts() ) : ?>
                <?php $related_posts_query->the_post(); ?>
                <div class="col-md-6">
                    <div class="card shreeja-card related-card">
                        <div class="card-block">

                            <p><?php echo esc_html__('You might be interested in...', 'shreeja'); ?></p>

                            <?php the_title( '<h5 class="entry-title card-title mb-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' ); ?>

                            <div class="entry-meta ">
        						<?php
        							$categories_list = get_the_category_list( esc_html__( ' &#8226; ', 'shreeja' ) );
        							if ( $categories_list && shreeja_categorized_blog() ) {
        								/* translators: 1: list of categories. */
        								printf( '<span class="cat-links shreeja-cat-links">' . esc_html__( '%1$s', 'shreeja' ) . '</span>', $categories_list ); // WPCS: XSS OK.
        							}
        						?>
        					</div><!-- /.entry-meta -->

                            <a href="<?php echo get_permalink(); ?>"><span class="icon ion-document-text mr-2"></span><?php esc_html_e( 'Read Article', 'shreeja' ); ?></a>
                        </div>

                    </div><!-- /.card -->
                </div><!-- /.col-md-4 -->
            <?php endwhile; ?>
        </div><!-- /.row -->

    <?php endif; ?>

<?php
}

wp_reset_postdata();
