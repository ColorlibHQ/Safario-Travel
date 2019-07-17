<?php
namespace safariotravelelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * safariotravel elementor few words section widget.
 *
 * @since 1.0
 */

class safariotravel_Blog extends Widget_Base {

	public function get_name() {
		return 'safariotravel-blog';
	}

	public function get_title() {
		return __( 'Blog', 'safariotravel' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'safariotravel-elements' ];
	}

	protected function _register_controls() {

        // Start Section Title=====================================
        $this->start_controls_section(
            'blog_heading', [
                'label' => esc_html__( 'Blog Section Heading', 'safariotravel' ),
            ]
        );
        $this->add_control(
            'sect_title', [
                'label' => esc_html__( 'Section Title', 'safariotravel' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );
        $this->add_control(
            'sect_subtitle', [
                'label' => esc_html__( 'Section Sub-title', 'safariotravel' ),
                'type'  => Controls_Manager::TEXTAREA,
                'label_block' => true

            ]
        );
        $this->add_control(
            'section_logo', [
                'label' => esc_html__( 'Section Title Logo', 'safariotravel' ),
                'type'  => Controls_Manager::MEDIA,

            ]
        );
        $this->end_controls_section(); // End Section Title

        // ----------------------------------------  Blog content ------------------------------
        $this->start_controls_section(
            'blog_content',
            [
                'label' => __( 'Blog', 'safariotravel' ),
            ]
        );
        $this->add_control(
            'blog_limit',
            [
                'label'   => esc_html__( 'Post Limit', 'safariotravel' ),
                'type'    => Controls_Manager::NUMBER,
                'min'     => 1,
				'max'     => 10,
				'step'    => 1,
                'default' => 3
            ]
        );
        $this->end_controls_section(); // End few words content

        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section Heading', 'safariotravel' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'section_title_color', [
                'label' => __( 'Title Color', 'safariotravel' ),
                'type'  => Controls_Manager::COLOR,
                'default' => '#3b1d82',
                'selectors' => [
                    '{{WRAPPER}} .section-intro .primary-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_sec_title',
                'selector'  => '{{WRAPPER}} .section-intro .primary-text',
            ]
        );
        $this->add_control(
            'section_subtitle_color', [
                'label' => __( 'Sub-title Color', 'safariotravel' ),
                'type'  => Controls_Manager::COLOR,
                'default' => '#797979',
                'selectors' => [
                    '{{WRAPPER}} .section-intro .section-intro__title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_sec_subtitle',
                'selector'  => '{{WRAPPER}} .section-intro .section-intro__title',
            ]
        );        
        $this->end_controls_section();


        //------------------------------ Style text ------------------------------
        $this->start_controls_section(
            'style_content', [
                'label' => __( 'Style Content', 'safariotravel' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_blogtitle', [
                'label'     => __( 'Blog Title Color', 'safariotravel' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .single-blog h5' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_blogtitlehov', [
                'label'     => __( 'Blog Title Hover Color', 'safariotravel' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .single-blog:hover h5' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_blogtext', [
                'label'     => __( 'Blog Text Color', 'safariotravel' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .single-blog p'                    => 'color: {{VALUE}};',
                    '{{WRAPPER}} .single-blog .meta-bottom p'       => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings(); 
    $secLogo  = $settings['section_logo']['url'];
    $secTitle = $settings['sect_title'];
    $secDesc  = $settings['sect_subtitle'];
    ?>
        <section class="section-padding bg-gray">
            <div class="container">
                <div class="section-intro text-center pb-90px">
                    <?php
                    // Logo
                    if( !empty( $secLogo ) ){
                        echo '<img class="section-intro-img" src="'. esc_url( $secLogo ) .'" alt="'. esc_html( 'Section Logo', 'safariotravel' ) .'">';
                    }
                    // Title
                    if( !empty( $secTitle ) ){
                        echo '<h2>'. esc_html( $secTitle ) .'</h2>';
                    }
                    // Section Sub-title
                    if( !empty( $secDesc ) ){
                        echo '<p>'. esc_html( $secDesc ) .'</p>';
                    }
                    ?>
                </div>

                <div class="row">
                    <?php
                    // Blog
                    safariotravel_blog_section( $settings['blog_limit'] );
                    ?>           
                </div>
            </div>
        </section>

        <?php
    }
	
}
