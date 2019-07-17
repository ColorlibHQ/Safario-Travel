<?php
/**
 * @Packge     : Animalshelter
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

// enqueue css
function safariotravel_common_custom_css() {

	wp_enqueue_style( 'safariotravel-common', get_template_directory_uri().'/assets/css/common.css' );

	$headerBg          =  ! empty( get_header_image() ) ? 'url(' . esc_url( get_header_image() ) . ')' : '';
	$headerTextColor   = esc_attr( safariotravel_opt( 'safariotravel_headertextcolor', '#fff' ) );
	$headerbgcolor     = esc_attr( safariotravel_opt( 'safariotravel_headerbgcolor' ) );
	$headerOverlay     = esc_attr( safariotravel_opt( 'safariotravel_headeroverlaycolor' ) );
	$navbarbg 		   = esc_attr( safariotravel_opt( 'safariotravel_header_navbar_bgColor' ) );
	$stickynavbarbg    = esc_attr( safariotravel_opt( 'safariotravel_header_navbarsticky_bgColor' ) );
	$navmenuColor 			= esc_attr( safariotravel_opt( 'safariotravel_header_navbar_menuColor' ) );
	$navmenuHovColor 		= esc_attr( safariotravel_opt( 'safariotravel_header_navbar_menuHovColor', '#6059f6' ) ); 
	$stickynavmenuColor 	= esc_attr( safariotravel_opt( 'safariotravel_header_sticky_navbar_menuColor') );
	$stickynavmenuHovColor 	= esc_attr( safariotravel_opt( 'safariotravel_header_sticky_navbar_menuHovColor' ) );
	$foftext1     	   = esc_attr( safariotravel_opt( 'safariotravel_fof_textonecolor_settings' ) );
	$foftext2     	   = esc_attr( safariotravel_opt( 'safariotravel_fof_texttwocolor_settings' ) );
	$fofbgcolor        = esc_attr( safariotravel_opt( 'safariotravel_fof_bgcolor_settings' ) );
	$footerbgImg       = safariotravel_opt( 'safariotravel_footer_bgimg_settings' );

	$footerbgImg = json_decode( $footerbgImg );

	$footerbgImgAttr = '';

	if( ! empty( $footerbgImg->url ) ) {
		$footerbgImgAttr = 'background-image:url( ' .esc_url( $footerbgImg->url ). ' );';
	}

	$footerbgColor     = esc_attr( safariotravel_opt( 'safariotravel_footer_widget_bgColor_settings' ) );
	$footerTextColor   = esc_attr( safariotravel_opt( 'safariotravel_footer_widget_color_settings' ) );
	$anchorcolor 	   = esc_attr( safariotravel_opt( 'safariotravel_footer_widget_anchorcolor_settings' ) );
	$anchorhovcolor    = esc_attr( safariotravel_opt( 'safariotravel_footer_widget_anchorhovcolor_settings' ) );
	$widgettitlecolor  = esc_attr( safariotravel_opt( 'safariotravel_footer_widgettitlecolor_settings' ) );
	$themecolor  	   = esc_attr( safariotravel_opt( 'safariotravel_themecolor' ) );

	$footerbtombg  	   			= esc_attr( safariotravel_opt( 'safariotravel_footer_bottom_bgcolor_settings' ) );
	$footerbtomtextcolor 		= esc_attr( safariotravel_opt( 'safariotravel_footer_bottom_textcolor_settings' ) );
	$footerbtomanchorcolor 		= esc_attr( safariotravel_opt( 'safariotravel_footer_bottom_anchorcolor_settings' ) );
	$footerbtomanchorhovercolor = esc_attr( safariotravel_opt( 'safariotravel_footer_bottom_anchorhovercolor_settings' ) );

	$themeImg = get_template_directory_uri().'/assets/img/';

	$customcss ="

			.global-banner,
			.header_area .navbar .nav li.submenu ul li:hover a,
			.navbar-toggler span,
			.testimonial .owl-dots .owl-dot.active span,
			.causes_slider .owl-dots .owl-dot.active,
			.causes_item .causes_img .c_parcent span,
			.causes_item .causes_img .c_parcent span:before,
			.causes_item .causes_bottom a,
			.tags .tag_btn:before,
			.blog_item_img .blog_item_date,
			.blog_right_sidebar .widget_tag_cloud .tagcloud a:hover,
			.single-footer-widget .tagcloud a:hover,
			.button,
			.button-hero,
			.footer-area .primary-btn,
			.footer-area .primary-btn:hover,
			.single-footer-widget .bb-btn,
			.blog_item_img .blog_item_date
			{
				background-color: {$themecolor}
			}
			
			b, 
			sup, 
			sub, 
			u,
			del,
			.hero-banner-sm h1,
			.primary-text,
			.header_area .navbar-social li a:hover i,
			.header_area .navbar-social li span,
			.header_area .navbar .nav li.active a,
			.header_area .navbar .nav li:hover a,
			.header_area .navbar .nav li.submenu ul li a,
			.header_area.navbar_fixed .main_menu .navbar .nav li.active a,
			.header_area.navbar_fixed .main_menu .navbar .nav li:hover a, 
			.header_area .navbar li.active a,
			.hero-banner h1,
			.hero-banner-sm h1,
			.wpcf7-form label,
			.l_blog_item .l_blog_text h4:hover,
			.causes_item .causes_text h4:hover,
			.blog_right_sidebar .widget_categories ul li:hover a,
			.blog_right_sidebar .widget_safariotravel_recent_widget .post_item .media-body h3:hover,
			.single-post-area .navigation-top .social-icons li:hover i,
			.single-post-area .navigation-top .social-icons li:hover span,
			.comments-area .btn-reply:hover,
			.footer-area .primary-btn.white:hover,
			.footer-area .primary-btn.white:hover span,
			.copy-right-text a,
			.copy-right-text i,
			.footer-social a:hover i,
			.single-footer-widget .info.error,
			.single-footer-widget ul li a:hover,
			.footer-text a,
			.footer-text i,
			.blog_right_sidebar .widget_rss ul li:hover a,
			.blog_right_sidebar .widget_recent_entries ul li:hover a,
			.blog_right_sidebar .widget_recent_comments ul li:hover a,
			.blog_right_sidebar .widget_archive ul li:hover a,
			.blog_right_sidebar .widget_meta ul li:hover a,
			.blog_right_sidebar .widget_nav_menu ul li a:hover,
			.blog_right_sidebar .widget_pages ul li a:hover,
			.ui-state-active, .ui-state-highlight,
			.widget_categories ul li a:hover			
			 {
				color: {$themecolor};
			}
			
			.magic-ball::before,
			.causes_item .causes_bottom a,
			.single-post-area .quotes,
			.wp-block-quote p, blockquote p
			{
				border-color: {$themecolor};
			}

			.global-banner {
				background: {$headerBg};
			}
			.global-banner .overlay-bg {
				background-color: {$headerOverlay}
			} 
			.hero-banner-sm-content p {
				color: {$headerTextColor};
			}
			.global-banner {
				background-color: {$headerbgcolor}
			}

			#f0f{
				background-color: {$fofbgcolor}
			}
			.inner-child-fof .h1 {
				color: {$foftext1}
			}
			.inner-child-fof a,
			.inner-child-fof p {
				color: {$foftext2}
			}
			.footer-area{
				{$footerbgImgAttr}
				background-color: {$footerbgColor};
				color: {$footerTextColor};
			}
			caption,
			.single-footer-widget p,
			.single-footer-widget,
			footer {
				color: {$footerTextColor};
			}
			.footer-widget ul li a,
			.single-footer-widget ul li a,
			.single-footer-widget a,
			.footer-widget a {
				color: {$anchorcolor};
			}
			.single-footer-widget a:hover,
			.single-footer-widget ul li a:hover,
			.footer-bottom a:hover{
				color: {$anchorhovcolor};
			}
			.footer-area .single-footer-widget h6{
				color: {$widgettitlecolor};
			}
			.footer-area .copyright-text{
				background-color: {$footerbtombg};
				color: {$footerbtomtextcolor};
			}
			.footer-area .copyright-text .footer-social a,
			.footer-area .copyright-text a {
				color: {$footerbtomanchorcolor};
			}
			.footer-area .copyright-text .footer-social a:hover,
			.footer-area .copyright-text a:hover {
				color: {$footerbtomanchorhovercolor};
			}
			.header_area {
				background-color: {$navbarbg};
			}
			.header_area.navbar_fixed .main_menu .navbar{
				background-color: {$stickynavbarbg};
			}
			.header_area .navbar .nav li a {
				color: {$navmenuColor};
			}
			.header_area .navbar .nav li:hover a, .header_area .navbar .nav li.active a{
				color: {$navmenuHovColor};
			}
			.header_area.navbar_fixed .navbar .nav li a {
				color: {$stickynavmenuColor};
			}
			.header_area.navbar_fixed .navbar .nav li a:hover {
				color: {$stickynavmenuHovColor};
			}


        ";

	wp_add_inline_style( 'safariotravel-common', $customcss );

}
add_action( 'wp_enqueue_scripts', 'safariotravel_common_custom_css', 50 );