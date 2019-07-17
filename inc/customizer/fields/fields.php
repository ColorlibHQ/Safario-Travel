<?php 
/**
 * @Packge     : safariotravel
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

/***********************************
 * General Section Fields
 ***********************************/


// Theme Main Color Picker
Epsilon_Customizer::add_field(
    'safariotravel_themecolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Main Color.', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_general_options_section',
        'default'     => '#6059f6',
    )
);
// Google map api key field
$url = 'https://developers.google.com/maps/documentation/geocoding/get-api-key';

Epsilon_Customizer::add_field(
    'safariotravel_map_apikey',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Google map api key', 'safariotravel' ),
        'description'       => sprintf( __( 'Set google map api key. To get api key %s click here %s.', 'safariotravel' ), '<a target="_blank" href="'.esc_url( $url  ).'">', '</a>' ),
        'section'           => 'safariotravel_general_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
        
    )
);

// Instagram api key field
$url = 'https://www.instagram.com/developer/authentication/';

Epsilon_Customizer::add_field(
	'safariotravel_igaccess_token',
	array(
		'type' => 'text',
		'label' => esc_html__( 'Instagram Access Token', 'safariotravel' ),
		'description' => sprintf( __( 'Set instagram access token. To get access token %s click here %s.', 'safariotravel' ), '<a target="_blank" href="'.esc_url( $url ).'">', '</a>' ),
		'section' => 'safariotravel_general_options_section',
		'sanitize_callback' => 'sanitize_text_field',
		'default' => '',

	)
);

/***********************************
 * Header Section Fields
 ***********************************/

 //Call to Action Toggle
 Epsilon_Customizer::add_field(
    'safariotravel_cta_toggle_settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Call To Action Show/Hide', 'safariotravel' ),
        'section'     => 'safariotravel_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

Epsilon_Customizer::add_field(
	'safariotravel_cta_label',
	array(
		'type' => 'text',
		'label' => esc_html__( 'Call To Action Button Label', 'safariotravel' ),
		'section' => 'safariotravel_headertop_options_section',
		'sanitize_callback' => 'sanitize_text_field',
		'default' => esc_html__( 'Get Ticket', 'safariotravel' ),

	)
);
Epsilon_Customizer::add_field(
	'safariotravel_cta_url',
	array(
		'type' => 'text',
		'label' => esc_html__( 'Call To Action URL', 'safariotravel' ),
		'section' => 'safariotravel_headertop_options_section',
		'sanitize_callback' => 'sanitize_text_field',
		'default' => '',

	)
);

// Header Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'safariotravel_header_navbar_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Background Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_headertop_options_section',
        'default'     => '',
    )
);
// Header Sticky  Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'safariotravel_header_navbarsticky_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Sticky Nav Bar Background Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_headertop_options_section',
        'default'     => 'rgba(255,255,255, 0.8)',
    )
);
// Header Nav Bar Menu Color Picker
Epsilon_Customizer::add_field(
    'safariotravel_header_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_headertop_options_section',
        'default'     => '#2a2a2a',
    )
);
// Header Nav Bar Menu Hover Color Picker
Epsilon_Customizer::add_field(
    'safariotravel_header_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Hover Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_headertop_options_section',
        'default'     => '#6059f6',
    )
);
// Header sticky nav bar menu color picker
Epsilon_Customizer::add_field(
    'safariotravel_header_sticky_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_headertop_options_section',
        'default'     => '#2a2a2a',
    )
);
// Header sticky nav bar menu hover color picker
Epsilon_Customizer::add_field(
    'safariotravel_header_sticky_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Hover Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_headertop_options_section',
        'default'     => '#6059f6',
    )
);


// Header overlay switch field
Epsilon_Customizer::add_field(
    'safariotravel-headeroverlay-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Toggle header overlay', 'safariotravel' ),
        'section'     => 'colors',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Header overlay color
Epsilon_Customizer::add_field(
    'safariotravel_headeroverlaycolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Overlay Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => 'rgba(59,29,130,0.4)'
    )
);
// Page Header Background Color Picker
Epsilon_Customizer::add_field(
    'safariotravel_headerbgcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Background Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#fafafa',
    )
);


// Page Header text Color Picker
Epsilon_Customizer::add_field(
    'safariotravel_headertextcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Text Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#888',
    )
);

// Page Header text Color Picker
Epsilon_Customizer::add_field(
    'safariotravel_pageheader_subtitle',
    array(
        'type'        => 'textarea',
        'label'       => esc_html__( 'Page Header Sub-title', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => esc_html__( 'Air seed winged lights saw kind whales in sixth best a dont seas dron image so fish all tree on', 'safariotravel' )
    )
);

// Header Call To Action
Epsilon_Customizer::add_field(
    'safariotravel_header_cta_label',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Call to Action Button Label', 'safariotravel' ),
        'section'           => 'safariotravel_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => __('Get Started', 'safariotravel')
    )
);



/***********************************
 * Blog Section Fields
 ***********************************/

// Post excerpt length field
Epsilon_Customizer::add_field(
    'safariotravel_post_excerpt',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Post Excerpt', 'safariotravel' ),
        'description' => esc_html__( 'Set post excerpt length.', 'safariotravel' ),
        'section'     => 'safariotravel_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);
// Blog sidebar layout field
Epsilon_Customizer::add_field(
    'safariotravel-blog-sidebar-settings',
    array(
        'type'     => 'epsilon-layouts',
        'label'    => esc_html__( 'Blog Layout', 'safariotravel' ),
        'section'  => 'safariotravel_blog_options_section',
        'description' => esc_html__( 'Select the option to set blog page sidebar position.', 'safariotravel' ),
        'layouts'  => array(
            '1' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/one-column.png',
            '2' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleright.jpg',
            '3' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleleft.jpg',
        ),
        'default'  => array(
            'columnsCount' => 1,
            'columns'      => array(
                1 => array(
                    'index' => 1,
                ),
                2 => array(
                    'index' => 2,
                ),
                3 => array(
                    'index' => 3,
                ),
            ),
        ),
        'min_span' => 4,
        'fixed'    => true
    )
);
if( defined( 'SAFARIOTRAVEL_COMPANION_VERSION' ) ) {
// Header social switch field
Epsilon_Customizer::add_field(
    'safariotravel-blog-social-share-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Social Share Show/Hide', 'safariotravel' ),
        'section'     => 'safariotravel_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

// Header social switch field
Epsilon_Customizer::add_field(
    'safariotravel-blog-like-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Like Button Show/Hide', 'safariotravel' ),
        'section'     => 'safariotravel_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
}



/***********************************
 * Page Section Fields
 ***********************************/

// Blog sidebar layout field
Epsilon_Customizer::add_field(
	'safariotravel-page-sidebar-settings',
	array(
		'type'     => 'epsilon-layouts',
		'label'    => esc_html__( 'page Layout', 'safariotravel' ),
		'section'  => 'safariotravel_page_options_section',
		'description' => esc_html__( 'Select the option to set page sidebar position.', 'safariotravel' ),
		'layouts'  => array(
			'1' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/one-column.png',
			'2' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleright.jpg'
		),
		'default'  => array(
			'columnsCount' => 1,
			'columns'      => array(
				1 => array(
					'index' => 1,
				),
				2 => array(
					'index' => 2,
				)
			),
		),
		'min_span' => 4,
		'fixed'    => true
	)
);



/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'safariotravel_fof_text_one',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'safariotravel' ),
        'section'           => 'safariotravel_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Ooops 404 Error !'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'safariotravel_fof_text_two',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'safariotravel' ),
        'section'           => 'safariotravel_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Either something went wrong or the page dosen\'t exist anymore.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'safariotravel_fof_textonecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_fof_options_section',
        'default'     => '#404551', 
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'safariotravel_fof_texttwocolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_fof_options_section',
        'default'     => '#abadbe',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'safariotravel_fof_bgcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_fof_options_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'safariotravel-widget-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'safariotravel' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'safariotravel' ),
        'section'     => 'safariotravel_footer_options_section',
        'default'     => false,
    )
);

// Footer copy right text add settings

// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'safariotravel' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );

Epsilon_Customizer::add_field(
    'safariotravel-copyright-text-settings',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'safariotravel' ),
        'section'     => 'safariotravel_footer_options_section',
        'default'     => wp_kses_post( $copyText ),
    )
);
// Footer widget background color field
Epsilon_Customizer::add_field(
    'safariotravel_footer_bgimg_settings',
    array(
        'type'        => 'epsilon-image',
        'label'       => esc_html__( 'Footer Widget Background Image', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_footer_options_section',
    )
);
// Footer widget background color field
Epsilon_Customizer::add_field(
    'safariotravel_footer_widget_bgColor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Background Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_footer_options_section',
        'default'     => '#04091e',
    )
);
// Footer widget text color field
Epsilon_Customizer::add_field(
    'safariotravel_footer_widget_color_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Text Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_footer_options_section',
        'default'     => '#777',
    )
);
// Footer widget title color field
Epsilon_Customizer::add_field(
    'safariotravel_footer_widgettitlecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widgets Title Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_footer_options_section',
        'default'     => '#fff',
    )
);
// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'safariotravel_footer_widget_anchorcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Anchor Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_footer_options_section',
        'default'     => '#777',
    )
);
// Footer widget anchor hover Color
Epsilon_Customizer::add_field(
    'safariotravel_footer_widget_anchorhovcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Anchor Hover Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_footer_options_section',
        'default'     => '#6059f6',
    )
);

// Footer bottom bg Color
Epsilon_Customizer::add_field(
    'safariotravel_footer_bottom_bgcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Background Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_footer_options_section',
        'default'     => '#04091e',
    )
);
// Footer bottom text Color
Epsilon_Customizer::add_field(
    'safariotravel_footer_bottom_textcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Text Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_footer_options_section',
        'default'     => '#666',
    )
);
// Footer bottom text Color
Epsilon_Customizer::add_field(
    'safariotravel_footer_bottom_anchorcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Anchor Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_footer_options_section',
        'default'     => '#6059f6',
    )
);
// Footer bottom text Color
Epsilon_Customizer::add_field(
    'safariotravel_footer_bottom_anchorhovercolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Bottom Anchor Hover Color', 'safariotravel' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'safariotravel_footer_options_section',
        'default'     => '#6059f6',
    )
);
