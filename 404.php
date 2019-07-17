<?php 
/**
 * @Packge 	   : safariotravel
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

//  Call Header
get_header();

/**
 * 404 page
 * @Hook safariotravel_fof
 * @Hooked safariotravel_fof_cb
 *
 */

do_action( 'safariotravel_fof' );

// Call Footer
get_footer();
