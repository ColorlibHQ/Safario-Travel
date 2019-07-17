<?php
namespace safariotravelelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * safariotravel elementor section widget.
 *
 * @since 1.0
 */
class safariotravel_About extends Widget_Base {

	public function get_name() {
		return 'safariotravel-about';
	}

	public function get_title() {
		return __( 'About', 'safariotravel' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'safariotravel-elements' ];
	}

	protected function _register_controls() {

        
		// ----------------------------------------  About content ------------------------------
		$this->start_controls_section(
			'about_sec',
			[
				'label' => __( 'About Us', 'safariotravel' ),
			]
        );
        $this->add_control(
            'about_feature_img',
            [
                'label'         => esc_html__( 'About Feature Image', 'safariotravel' ),
                'type'          => Controls_Manager::MEDIA,
                'label_block'   => true,
            ]
        );
        $this->add_control(
            'about_title',
            [
                'label'         => esc_html__( 'About Title', 'safariotravel' ),
                'description'   => esc_html__('Use <br> tag for line break', 'safariotravel'),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true
            ]
        );
        $this->add_control(
            'about_content',
            [
                'label'         => esc_html__( 'Content', 'safariotravel' ),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true
            ]
        );
        $this->add_control(
            'btn_label',
            [
                'label'         => esc_html__( 'Button Label', 'safariotravel' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Learn More', 'safariotravel' )
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label'         => esc_html__( 'Button URL', 'safariotravel' ),
                'type'          => Controls_Manager::URL,
                'label_block'   => true
            ]
        );

        $this->end_controls_section(); // End about content
        

        $this->start_controls_section(
			'section_style',
			[
                'label' => __( 'Style', 'safariotravel' ),
                'tab'   => Controls_Manager::TAB_STYLE,
			]
        );
        $this->add_control(
            'about_title_color', [
                'label' => __( 'Title Color', 'safariotravel' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content h2' => 'color: {{VALUE}};',
                ],
                'default'   => '#2a2a2a'
            ]
        );
        $this->add_control(
            'about_btn_label_color', [
                'label' => __( 'Button Label Color', 'safariotravel' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .button' => 'color: {{VALUE}};',
                ],
                'default'   => '#fff'
            ]
        );
        $this->add_control(
            'btn_hover_label_color', [
                'label' => __( 'Button Hover Label Color', 'safariotravel' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .button:hover' => 'color: {{VALUE}};',
                ],
                'default'   => '#fff'
            ]
        );
        $this->add_control(
            'btn_bg_color', [
                'label' => __( 'Button Background Color', 'safariotravel' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .button' => 'background-color: {{VALUE}};',
                ],
                'default'   => '#6059f6'
            ]
        );
        $this->add_control(
            'btn_hover_bg_color', [
                'label' => __( 'Button Hover Background Color', 'safariotravel' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about-content .button:hover' => 'background-color: {{VALUE}};',
                ],
                'default'   => '#201aa3'
            ]
        );
        $this->end_controls_section(); // End about content
        

        // Section Background ====================
        $this->start_controls_section(
			'section_background',
			[
                'label' => __( 'Style Section Background', 'safariotravel' ),
                'tab'   => Controls_Manager::TAB_STYLE,
			]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Section Background', 'safariotravel' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .bg-gray'
            ]
        );
		$this->end_controls_section(); // End about content

	}

	protected function render() {
    $settings = $this->get_settings();
    $aboutFeature = $settings['about_feature_img']['url'];
    $content    = $settings['about_content'];
    $about_title = $settings['about_title'];
    $buttonLabel = $settings['btn_label'];

    ?>
    <section class="bg-gray section-padding magic-ball magic-ball-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
                    <div class="about-img">
                        <?php
                        if( !empty( $aboutFeature ) ){
                            echo '<img src="'. esc_url( $aboutFeature ) .'" alt="'. esc_html__( 'About Feature', 'safariotravel' ) .'">';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 align-self-center about-content">
                    <?php
                    // Title
                    if( !empty( $about_title ) ){
                        echo '<h2>'.$about_title.'</h2>';
                    }
                    // Content
                    if( !empty( $content ) ){
                        echo wp_kses_post($content);
                    }
                    // Button
                    if( !empty( $buttonLabel ) ){
                        echo '<a class="button" href="'. esc_url( $settings['btn_url']['url'] ) .'">'. esc_html( $buttonLabel ) .'</a>';
                    }


                    ?>
                    
                </div>
            </div>
        </div>
  </section>

    <?php

    }

}
