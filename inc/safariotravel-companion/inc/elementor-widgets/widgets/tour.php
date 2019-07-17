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
class safariotravel_Tour extends Widget_Base {

	public function get_name() {
		return 'safariotravel-tours';
	}

	public function get_title() {
		return __( 'Tour', 'safariotravel' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'safariotravel-elements' ];
	}

	protected function _register_controls() {

        $repeater = new \Elementor\Repeater();
        
        // Tour Section Heading
        $this->start_controls_section(
            'tour_heading',
            [
                'label' => esc_html__( 'Tour', 'safariotravel' ),
            ]
        );
        $this->add_control(
            'tour_title', [
                'label' => esc_html__( 'Tour Title', 'safariotravel' ),
                'description' => esc_html__( 'Use <br> for line brack', 'safariotravel' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Paris tour offer', 'safariotravel' )

            ]
        );
        $this->add_control(
            'tour_duration', [
                'label' => esc_html__( 'Tour duration', 'safariotravel' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html( '5 days offer', 'safariotravel' )

            ]
        );
        
        $this->add_control(
            'tour_desc', [
                'label' => esc_html__( 'Tour Description', 'safariotravel' ),
                'type'  => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => esc_html( 'We proper guided our tourist', 'safariotravel' )

            ]
        );
        $this->add_control(
            'tour_feature_image', [
                'label' => esc_html__( 'Tour Feature Image', 'safariotravel' ),
                'type'  => Controls_Manager::MEDIA,
                'label_block' => true,

            ]
        );
        $this->add_control(
            'tour_price', [
                'label' => esc_html__( 'Tour Price', 'safariotravel' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( '$65/day', 'safariotravel' )

            ]
        );
        $this->end_controls_section(); //End Tour Section Heading



        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => esc_html__( 'Style Tour', 'safariotravel' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_tour_title', [
                'label'     => esc_html__( 'Tour Title Color', 'safariotravel' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#3b1d82',
                'selectors' => [
                    '{{WRAPPER}} .tour-card .tour-card-overlay h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_tour_title',
                'selector'  => '{{WRAPPER}} .tour-card .tour-card-overlay h4',
            ]
        );

        $this->add_control(
            'color_tour_desc', [
                'label'     => esc_html__( 'Tour Description Color', 'safariotravel' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#888888',
                'selectors' => [
                    '{{WRAPPER}} .tour-card .tour-card-overlay p' => 'color: {{VALUE}};',
                ],
            ]
        );         
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_desc',
                'selector'  => '{{WRAPPER}} .tour-card .tour-card-overlay p',
            ]
        );
        $this->add_control(
            'tour_price_color', [
                'label'     => esc_html__( 'Tour Price Color', 'safariotravel' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#007bff',
                'selectors' => [
                    '{{WRAPPER}} .tour-card .tour-card-overlay .tour_price' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_tour_desc',
                'selector'  => '{{WRAPPER}} .media-price h4',
            ]
        );

        $this->add_control(
            'feature_hover_content_bg', [
                'label'     => esc_html__( 'Feature Hover Content Background', 'safariotravel' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .tour-card:hover .tour-card-overlay' => 'background: {{VALUE}};',
                ],
            ]
        );
        
        $this->end_controls_section(); // End Section Heading


	}

	protected function render() {
    $settings = $this->get_settings();
    $featureImg = !empty( $settings['tour_feature_image']['url'] ) ? $settings['tour_feature_image']['url'] : '';
        
    ?>
        <div class="tour-card">
            <?php 
            if( $featureImg ){
                echo '<img class="card-img rounded-0" src="'. esc_url( $featureImg ) .'" alt="'. esc_html__( 'Tour Feature Image', 'safariotravel' ) .'">';
            }
            ?>
            
            <div class="tour-card-overlay">
                <div class="media">
                    <div class="media-body">
                        <?php 
                        //Title
                        if( !empty( $settings['tour_title'] ) ){
                            echo '<h4>'. esc_html( $settings['tour_title'] ) .'</h4>';
                        }
                        //Duration
                        if( !empty( $settings['tour_duration'] ) ){
                            echo '<small>'. esc_html( $settings['tour_duration'] ) .'</small>';
                        }
                        //Description
                        if( !empty( $settings['tour_desc'] ) ){
                            echo '<p>'. esc_html( $settings['tour_desc'] ) .'</p>';
                        }
                        ?>
                    </div>
                    <div class="media-price">
                        <?php 
                        if( !empty( $settings['tour_price'] ) ){
                            echo '<h4 class="tour_price">'. $settings['tour_price'] .'</h4>';
                        }?>
                        
                    </div>
                </div>
            </div>
        </div>


    <?php
    }	
}
