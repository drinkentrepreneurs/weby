<?php
/**
 *
 * desc: weby is a wordpress theme made for drinkentrepreneurs.org
 * author: antoine.angot@gmail.com
 * date: 6 Jul 2013
 *
 **/

if ( ! isset( $content_width ) )
        $content_width = 584;

add_action( 'after_setup_theme', 'wedy_setup' );

if ( ! function_exists( 'wedy_setup' ) ):
function wedy_setup() {

   register_nav_menu( 'primary', __( 'mainMenu', 'wedy' ) );
}
endif;
// setup


?>
