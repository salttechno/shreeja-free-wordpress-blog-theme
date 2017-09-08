<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shreeja
 */

?>

			</div><!-- #content -->
		
	</div><!-- /.st-content-area -->

	<div class="st-footer-area">
		<?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
		<div id="footer-instagram">
			<?php dynamic_sidebar( 'sidebar-footer' ) ?>
		</div>
		<?php endif; ?>
		
			<footer id="colophon" class="site-footer  align-items-center" role="contentinfo">

                <div class="upper-footer">

	                <div class="container">
		                <aside class="shreeja-footer row" role="complementary">
							<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
							    <div class="col-md-4 widget-area">
							        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
							    </div><!-- .first .widget-area -->
							<?php endif; ?>

							<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
							    <div class="col-md-4 widget-area">
							        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
							    </div><!-- .second .widget-area -->
							<?php endif; ?>

							<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
							    <div class="col-md-4 widget-area">
							        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
							    </div><!-- .third .widget-area -->
							<?php endif; ?>

		               </aside><!-- #shreeja-footer -->
		            </div> <!-- .container -->
                </div> <!-- .upper-footer -->


                <div class="lower-footer"> <!--  Starting site-footer -->
                    <div class="container">
                        <div class="row">
							<div class="col-md-4 site-info self-align-first left-site-footer">
								<h6 class="mb-0"><?php echo wp_kses_post(get_theme_mod('shreeja_footer_text_left', '&copy; Copyright 2017 - All Rights Reserved')); ?></h6>
							</div><!-- .site-info -->
							<div class="col-md-4 text-center site-info">
								<?php if ( !get_theme_mod( 'shreeja_hide_social_icons_footer' ) ) : ?>
								<div class="social-links-footer">
									<ul class="d-flex justify-content-center">
										<?php shreeja_get_social_icons(); ?>
									</ul>
								</div>
								<!-- /.social-links-footer -->
								<?php endif; ?>
							</div><!-- .site-info -->
							<div class="col-md-4 site-info self-align-last text-right right-site-footer">
								<h6 class="mb-0"><?php echo wp_kses_post(get_theme_mod('shreeja_footer_text_right', 'Site by  <a href="https://themes.salttechno.com">Salt Techno</a>')); ?></h6>
							</div><!-- .site-info -->
					    </div><!-- .row of lower footer -->
					</div><!-- .container of lower footer -->
				</div><!-- .lower footer -->
			</footer><!-- #colophon -->
	

		<div class="scroll-to-top">
			<i class="fa fa-arrow-up"></i>
		</div>
		<!-- /.scroll-to-top -->
	</div>
	<!-- /.st-footer-area -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
