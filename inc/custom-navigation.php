<?php
/**
 * Implementation of the Custom Navigation
 *
 * @package Shreeja
 */

if ( ! function_exists( 'shreeja_navigation' ) ) {
    function shreeja_navigation() { ?>
    	<div class="shreeja-navigation row">

    		<div class="dj-newer col-sm-6"><?php previous_posts_link(wp_kses( __( '<i class="fa fa-angle-left"></i> Newer Posts', 'shreeja' ), array( 'i' => array( 'class' => array() ) ) )); ?></div>
            <div class="dj-older col-sm-6 text-right"><?php next_posts_link(wp_kses( __( 'Older Posts <i class="fa fa-angle-right"></i>', 'shreeja' ), array( 'i' => array( 'class' => array() ) ) )); ?></div>

    	</div>
    <?php }
}
