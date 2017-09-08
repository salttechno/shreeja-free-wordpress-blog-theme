<?php
/**
 * Implementation of the Featured Posts
 *
 * @package Shreeja
 */

?>


<div class="col-sm-12 st-featured-area">
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <?php
                $featured_category = get_theme_mod( 'shreeja_featured_category' );
                $featured_post_ids = get_theme_mod( 'shreeja_featured_ids' );
                $featured_count = get_theme_mod( 'shreeja_featured_count' );

                if ( ! $featured_count ) {
                    $featured_count = 5;
                }

                if( $featured_post_ids ) {
					$featured_posts = explode( ',', $featured_post_ids );
					$args = array( 'post_type' => array('post', 'page'), 'post__in' => $featured_posts, 'showposts' => $featured_count, 'orderby' => 'post__in', 'ignore_sticky_posts' => true );
				} else {
					$args = array( 'cat' => $featured_category, 'showposts' => $featured_count, 'ignore_sticky_posts' => true );
				}

				$featured_query = new WP_Query( $args );
            ?>

            <?php if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
                <?php
                    if(has_post_thumbnail()) {
                        $get_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                        $feat_image = $get_feat_image[0];
                    } else {
                        $feat_image = get_template_directory_uri() . '/images/trans.png';
                    }
                ?>
                <a class="swiper-slide shreeja-slide" href="<?php echo get_permalink(); ?>" style="background-image:url(<?php echo $feat_image; ?>)">
                    <div class="slide-content d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <h6 class="featured-title"><?php echo esc_html_e( 'Featured Post', 'shreeja' ); ?></h6>
                            <h4><?php echo get_the_title(); ?></h4>
                			<h6>
                                <small class="mr-3"><span class="fa fa-calendar mr-2"></span><?php the_time( get_option('date_format') ); ?></small>
                                <small class=""><span class="fa fa-user mr-2"></span><?php the_author(); ?></small>
                            </h6>
                        </div>
                    </div>
                </a>
            <?php endwhile; endif; ?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>

    <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
            <?php
                $featured_category = get_theme_mod( 'shreeja_featured_category' );
                $featured_post_ids = get_theme_mod( 'shreeja_featured_ids' );
                $featured_count = get_theme_mod( 'shreeja_featured_count' );

                if ( ! $featured_count ) {
                    $featured_count = 5;
                }

                if( $featured_post_ids ) {
					$featured_posts = explode( ',', $featured_post_ids );
					$args = array( 'post_type' => array('post', 'page'), 'post__in' => $featured_posts, 'showposts' => $featured_count, 'orderby' => 'post__in', 'ignore_sticky_posts' => true );
				} else {
					$args = array( 'cat' => $featured_category, 'showposts' => $featured_count, 'ignore_sticky_posts' => true );
				}

				$featured_query = new WP_Query( $args );
            ?>

            <?php if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
                <?php
                    if(has_post_thumbnail()) {
                        $get_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                        $feat_image = $get_feat_image[0];
                    } else {
                        $feat_image = get_template_directory_uri() . '/images/trans.png';
                    }
                ?>
                <div class="swiper-slide shreeja-slide" style="background-image:url(<?php echo $feat_image; ?>)">
                    <div class="slide-content d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <h6><small><?php echo get_the_title(); ?></small></h6>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>
<!-- /.col-sm-12 -->
