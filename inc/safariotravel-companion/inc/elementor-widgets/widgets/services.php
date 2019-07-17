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
 * safariotravel elementor Team Member section widget.
 *
 * @since 1.0
 */
class safariotravel_Services extends Widget_Base {

	public function get_name() {
		return 'safariotravel-services';
	}

	public function get_title() {
		return __( 'Services', 'safariotravel' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'safariotravel-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // -----------   Section Heading ------------------------------
        $this->start_controls_section(
            'services_heading',
            [
                'label' => __( 'Services Section Heading', 'safariotravel' ),
            ]
        );
        $this->add_control(
            'sect_title', [
                'label' => __( 'Title', 'safariotravel' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );
        $this->add_control(
            'sect_subtitle', [
                'label' => __( 'Sub Title', 'safariotravel' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );
        $this->add_control(
            'section_logo', [
                'label' => __( 'Sub Title', 'safariotravel' ),
                'type'  => Controls_Manager::MEDIA,
                'label_block' => true

            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------   Services content ------------------------------
		$this->start_controls_section(
			'services_block',
			[
				'label' => __( 'Services', 'safariotravel' ),
			]
		);
		$this->add_control(
            'services_content', [
                'label' => __( 'Create Service Item', 'safariotravel' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'label',
                        'label' => __( 'Title', 'safariotravel' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Name'
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'safariotravel' ),
                        'type'  => Controls_Manager::TEXTAREA,
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Photo', 'safariotravel' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End Services content


        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section Heading', 'safariotravel' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'safariotravel' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#2a2a2a',
                'selectors' => [
                    '{{WRAPPER}} .section-intro h2' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color_sectsubtitle', [
                'label'     => __( 'Section Sub Title Color', 'safariotravel' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#888888',
                'selectors' => [
                    '{{WRAPPER}} .section-intro p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        //------------------------------ Style services Box ------------------------------
        $this->start_controls_section(
            'style_trainingbox', [
                'label' => __( 'Style Services Content', 'safariotravel' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_servicestitle', [
                'label' => __( 'Title Color', 'safariotravel' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-card-body h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'service_bg_color', [
                'label' => __( 'Service Background Color', 'safariotravel' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-card' => 'background: {{VALUE}};',
                ],
                'default'   => '#f8f8ff'
            ]
        );
        $this->add_control(
            'service_hover_bg_color', [
                'label' => __( 'Service Hover Background Color', 'safariotravel' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-card:hover' => 'background: {{VALUE}};',
                ],
                'default'   => '#fff'
            ]
        );
        $this->add_control(
            'color_servicesdescription', [
                'label' => __( 'Description Color', 'safariotravel' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-card-body p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'safariotravel' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'safariotravel' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'safariotravel' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .service-area',
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
    <section class="section-margin">
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
                if( ! empty( $settings['services_content'] ) ):
                    foreach( $settings['services_content'] as $val ):
                        // Member Picture
                        $bgUrl = '';
                        if( ! empty( $val['img']['url'] ) ) {
                            $bgUrl = $val['img']['url'];
                        }
                        ?>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="service-card text-center">
                                <div class="service-card-img">
                                <?php
                                // Image
                                echo safariotravel_img_tag(
                                    array(
                                        'url'   => esc_url( $bgUrl ),
                                        'class'   => 'img-fluid'
                                    )
                                );
                                ?>
                                </div>
                                <div class="service-card-body">
                                    <?php
                                    // Title
                                    if( ! empty( $val['label'] ) ) {
                                        echo safariotravel_heading_tag(
                                            array(
                                                'tag'  => 'h3',
                                                'text' => esc_html( $val['label'] )
                                            )
                                        );
                                    }
                                    // Description
                                    if( ! empty( $val['desc'] ) ) {
                                        echo safariotravel_paragraph_tag(
                                            array(
                                                'text'  => esc_html( $val['desc'] ),
                                            )
                                        );
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php 
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>

    <?php

    }

}
