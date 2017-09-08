<?php

/**
* ------------------------------------------------------------------------------------
* customizer-style.php
*
* For adding styling to page as per customizer
* ------------------------------------------------------------------------------------
*/


function shreeja_customizer_style() {
    ?>

    <style type="text/css">
        <?php if ( get_theme_mod( 'shreeja_logo_height' ) ) : ?> .shreeja-logo-img { height: <?php echo get_theme_mod( 'shreeja_logo_height' ); ?>px; } <?php endif; ?>

        <?php if ( get_theme_mod( 'shreeja_header_bg_color' ) ) : ?> .st-header-area { background-color: <?php echo get_theme_mod( 'shreeja_header_bg_color' ); ?> !important; } .shreeja-main-navbar { background-color: <?php echo get_theme_mod( 'shreeja_header_bg_color' ); ?> !important; } <?php endif; ?>

        <?php if ( get_theme_mod( 'shreeja_main_brand_color' ) ) : ?>
            p a, a{
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?>;
            }
            .btn-primary {
                background-color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
                border-color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .btn-primary:hover {
                filter: brightness(90%);
            }
            .post .entry-meta .shreeja-cat-links {
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .post .shreeja-comments-link {
                background: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .sticky .sticky-icon {
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .page .shreeja-comments-link {
                background: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .subscribe-post-widget .shreeja-subscribe-card .btn-secondary:hover {
                background: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .widget.card .post-date {
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .widget.card .calendar_wrap tbody td a {
                background: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .widget.card>.card-block>div>ul li a:before, .widget.card>.card-block>ul li a:before, .widget.card>.card-block>ul li:before, .widget_calendar caption:before  {
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .widget_recent_comments>.card-block>ul>li>span:before {
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .shreeja-cover-wrapper .shreeja-cover-content .entry-meta {
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .shreeja-post-share .shreeja-share-it:hover {
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .shreeja-navigation .dj-newer a, .shreeja-navigation .dj-older a {
                background: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .shreeja-comment .date {
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .shreeja-comment .reply a {
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .comment-list .fa-reply {
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .comment-notes, .logged-in-as {
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .social-links a:hover {
                color: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .bx-wrapper .bx-controls-direction a:hover {
                background: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
            .bx-wrapper .bx-pager.bx-default-pager a.active, .bx-wrapper .bx-pager.bx-default-pager a:focus, .bx-wrapper .bx-pager.bx-default-pager a:hover  {
                background: <?php echo get_theme_mod( 'shreeja_main_brand_color' ); ?> !important;
            }
        <?php endif; ?>

        <?php if ( get_theme_mod( 'shreeja_dark_accent_color' ) ) : ?>
            .post .entry-title a:hover {
                color: <?php echo get_theme_mod( 'shreeja_dark_accent_color' ); ?> !important;
            }
            .post .entry-meta, .post .entry-meta a, .post .entry-meta .shreeja-cat-links a {
                color: <?php echo get_theme_mod( 'shreeja_dark_accent_color' ); ?> !important;
            }
            .subscribe-post-widget .shreeja-subscribe-card, .related-card {
                background: <?php echo get_theme_mod( 'shreeja_dark_accent_color' ); ?> !important;
            }
            .subscribe-post-widget .shreeja-subscribe-card .btn-secondary {
                color: <?php echo get_theme_mod( 'shreeja_dark_accent_color' ); ?> !important;
            }
            .widget.card li a, .shreeja-share-it, .swiper-pagination-bullet-active {
                color: <?php echo get_theme_mod( 'shreeja_dark_accent_color' ); ?> !important;
            }
            .shreeja-navigation .dj-newer a:hover, .shreeja-navigation .dj-older a:hover, .shreeja-cancel-reply {
                background: <?php echo get_theme_mod( 'shreeja_dark_accent_color' ); ?> !important;
            }
            .shreeja-main-menu li, .shreeja-main-menu li a {
                color: <?php echo get_theme_mod( 'shreeja_dark_accent_color' ); ?>;
            }
            .site-title a:hover {
                color: <?php echo get_theme_mod( 'shreeja_dark_accent_color' ); ?>;
            }
            .related-card:hover {
                filter: brightness(90%);
            }
        <?php endif; ?>

        <?php if ( get_theme_mod( 'shreeja_post_title_color' ) ) : ?> .post .entry-title, .post .entry-title a { color: <?php echo get_theme_mod( 'shreeja_post_title_color' ); ?> !important; } <?php endif; ?>
        <?php if ( get_theme_mod( 'shreeja_body_text_color' ) ) : ?> body { color: <?php echo get_theme_mod( 'shreeja_body_text_color' ); ?> !important; } <?php endif; ?>


                         /* Upper styling for footer start*/
        <?php if ( get_theme_mod( 'shreeja_footer_text_color' ) ) : ?>
          .upper-footer,  .upper-footer p, .upper-footer h1, .upper-footer h2, .upper-footer h3, .upper-footer h4, .upper-footer h5, .upper-footer h6, .upper-footer a { color: <?php echo get_theme_mod( 'shreeja_footer_text_color' ); ?> !important; }
        <?php endif; ?>
        <?php if ( get_theme_mod( 'shreeja_footer_bg' ) ) : ?>
              .upper-footer { background-image: url('<?php echo get_theme_mod( 'shreeja_footer_bg' ); ?>') repeat fixed !important; }
        <?php else : ?>
       .upper-footer { background-color: <?php echo get_theme_mod( 'shreeja_footer_back_color' ); ?>;}
       <?php endif; ?>
                         /* Upper styling for footer  End*/

                        /* Lower styling for footer start*/
        <?php if ( get_theme_mod( 'shreeja_lower_footer_text_color' ) ) : ?>

          .lower-footer,  .lower-footer p, .lower-footer h1, .lower-footer h2, .lower-footer h3, .lower-footer h4, .lower-footer h5, .lower-footer h6, .lower-footer a { color: <?php echo get_theme_mod( 'shreeja_lower_footer_text_color' ); ?> !important; }
        <?php endif; ?>

        <?php if ( get_theme_mod( 'shreeja_lower_footer_back_color' ) ) : ?>
              .lower-footer { background-color: <?php echo get_theme_mod( 'shreeja_lower_footer_back_color' ); ?>;}
        <?php endif; ?>
                       /* Lower styling for footer End  */

        <?php if ( get_theme_mod( 'shreeja_post_header_back_color' ) ) : ?>
              .shreeja-cover-wrapper .shreeja-cover-bg, .post-header-back { background-color: <?php echo get_theme_mod( 'shreeja_post_header_back_color' ); ?>;}  
        <?php endif; ?>


    </style>

    <?php
}
add_action( 'wp_head', 'shreeja_customizer_style' );
