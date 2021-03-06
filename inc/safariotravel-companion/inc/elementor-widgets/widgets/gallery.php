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
class safariotravel_Gallery extends Widget_Base {

	public function get_name() {
		return 'safariotravel-gallery';
	}

	public function get_title() {
		return __( 'Gallery', 'safariotravel' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'safariotravel-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // Start Section Title=====================================
         $this->start_controls_section(
            'gallery_heading', [
                'label' => esc_html__( 'Gallery Section Heading', 'safariotravel' ),
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
            'section_title_image', [
                'label' => esc_html__( 'Section Title Image', 'safariotravel' ),
                'type'  => Controls_Manager::MEDIA,

            ]
        );
        $this->end_controls_section(); // End Section Title

        
		// ----------------------------------------   Gallery content ------------------------------
		$this->start_controls_section(
			'gallery_block',
			[
				'label' => __( 'Gallery', 'safariotravel' ),
			]
		);
		$this->add_control(
            'gallery', [
                'label'     => __( 'Gallery Images', 'safariotravel' ),
                'type'      => Controls_Manager::GALLERY,
                
            ]
        );

        $this->end_controls_section(); // End Gallery content
        

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
                'default' => '#fff',
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
                'default' => '#fff',
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
        $this->add_control(
            'section_bg_separetor',
            [
                'label' => __( 'Section Background', 'safariotravel' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_background',
                'label' => __( 'Section Background Image', 'safariotravel' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .gallery-bg',
            ]
        );
        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();
    $image_gallery = ! empty( $settings['img_gallery'] ) ? $settings['img_gallery'] : '';
    ?>
    <section class="section-padding gallery-area gallery-bg">
        <div class="container">
            <div class="section-intro section-intro-white text-center pb-98px">
                <?php
                if( !empty( $settings['sect_subtitle'] ) ){
                    echo '<p class="section-intro__title">'. esc_html( $settings['sect_subtitle'] ) .'</p>';
                }

                if( !empty( $settings['sect_title'] ) ){
                    echo '<h2 class="primary-text">'. esc_html( $settings['sect_title'] ) .'</h2>';
                }

                if( !empty( $settings['section_title_image']['url'] ) ){
                    echo '<img src="'. esc_url( $settings['section_title_image']['url'] ) .'" alt="">';
                }
                ?>
            </div>

            <div class="row no-gutters">
                <?php
                if( is_array( $settings['gallery'] ) && count( $settings['gallery'] ) > 0 ):
                    foreach( $settings['gallery'] as $image ): ?>
                        <div class="col-sm-6 col-md-4">
                            <a href="<?php echo esc_url( $image['url'] ) ?>" class="img-gal">
                                <div class="single-imgs relative">	
                                <?php echo '<img class="card-img rounded-0" src="'. $image['url'] .'" alt="'. esc_html__( 'gallery image', 'safariotravel' ) .'">'; ?>
                                <div class="overlay">
                                    <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <i class="ti-plus"></i>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </a>
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
