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

/**
 *
 * Before Wrapper
 *
 * @Preloader
 *
 */
add_action( 'safariotravel_preloader', 'safariotravel_site_preloader', 10 );

/**
 * Header
 *
 * @Header Menu
 * @Header Bottom
 * 
 */

add_action( 'safariotravel_header', 'safariotravel_header_cb', 10 );

/**
 * Hook for footer
 *
 */
add_action( 'safariotravel_footer', 'safariotravel_footer_area', 10 );
add_action( 'safariotravel_footer', 'safariotravel_back_to_top', 20 );

/**
 * Hook for Blog, single, page, search, archive pages wrapper.
 */
add_action( 'safariotravel_wrp_start', 'safariotravel_wrp_start_cb', 10 );
add_action( 'safariotravel_wrp_end', 'safariotravel_wrp_end_cb', 10 );

/**
 * Hook for Page wrapper.
 */
add_action( 'safariotravel_page_wrp_start', 'safariotravel_page_wrp_start_cb', 10 );
add_action( 'safariotravel_page_wrp_end', 'safariotravel_page_wrp_end_cb', 10 );

/**
 * Hook for Blog, single, search, archive pages column.
 */
add_action( 'safariotravel_blog_col_start', 'safariotravel_blog_col_start_cb', 10 );
add_action( 'safariotravel_blog_col_end', 'safariotravel_blog_col_end_cb', 10 );

/**
 * Hook for Page column.
 */
add_action( 'safariotravel_page_col_start', 'safariotravel_page_col_start_cb', 10 );
add_action( 'safariotravel_page_col_end', 'safariotravel_page_col_end_cb', 10 );

/**
 * Hook for blog posts thumbnail.
 */
add_action( 'safariotravel_blog_posts_thumb', 'safariotravel_blog_posts_thumb_cb', 10 );
/**
 * Hook for blog posts Date Meta.
 */
add_action( 'safariotravel_blog_post_date', 'safariotravel_blog_post_date_cb', 10 );

/**
 * Hook for blog posts title.
 */
add_action( 'safariotravel_blog_posts_title', 'safariotravel_blog_posts_title_cb', 10 );

/**
 * Hook for blog posts meta.
 */
add_action( 'safariotravel_blog_posts_meta', 'safariotravel_blog_posts_meta_cb', 10 );

/**
 * Hook for blog posts bottom meta.
 */
add_action( 'safariotravel_blog_posts_bottom_meta', 'safariotravel_blog_posts_bottom_meta_cb', 10 );

/**
 * Hook for blog posts excerpt.
 */
add_action( 'safariotravel_blog_posts_excerpt', 'safariotravel_blog_posts_excerpt_cb', 10 );

/**
 * Hook for blog posts content.
 */
add_action( 'safariotravel_blog_posts_content', 'safariotravel_blog_posts_content_cb', 10 );

/**
 * Hook for blog sidebar.
 */
add_action( 'safariotravel_blog_sidebar', 'safariotravel_blog_sidebar_cb', 10 );

/**
 * Hook for page sidebar.
 */
add_action( 'safariotravel_page_sidebar', 'safariotravel_page_sidebar_cb', 10 );

/**
 * Hook for blog single post social share option.
 */
add_action( 'safariotravel_blog_posts_share', 'safariotravel_blog_posts_share_cb', 10 );

/**
 * Hook for blog single post meta category, tag, next - previous link and comments form.
 */
add_action( 'safariotravel_blog_single_meta', 'safariotravel_blog_single_meta_cb', 10 );

/**
 * Hook for blog single footer nav next - previous link and comments form.
 */
add_action( 'safariotravel_blog_single_footer_nav', 'safariotravel_blog_single_footer_nav_cb', 10 );

/**
 * Hook for page content.
 */
add_action( 'safariotravel_page_content', 'safariotravel_page_content_cb', 10 );


/**
 * Hook for 404 page.
 */
add_action( 'safariotravel_fof', 'safariotravel_fof_cb', 10 );
