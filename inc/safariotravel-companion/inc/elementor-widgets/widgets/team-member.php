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
 * Umeet Event elementor Team Member section widget.
 *
 * @since 1.0
 */
class Safariotravel_Team_Member extends Widget_Base {

	public function get_name() {
		return 'safariotravel-team-member';
	}

	public function get_title() {
		return __( 'Team Member', 'safariotravel' );
	}

	public function get_icon() {
		return 'eicon-person';
	}

	public function get_categories() {
		return [ 'safariotravel-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

       // Start Section Title=====================================
       $this->start_controls_section(
            'feature_heading', [
                'label' => esc_html__( 'Feature Section Heading', 'safariotravel' ),
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
        
		// ----------------------------------------  Team Member content ------------------------------
		$this->start_controls_section(
			'team_memcontent',
			[
				'label' => __( 'Team Member', 'safariotravel' ),
			]
		);
		$this->add_control(
            'teamslider', [
                'label' => __( 'Create Team Member', 'safariotravel' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name' => 'label',
                        'label' => __( 'Name', 'safariotravel' ),
                        'type' => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Name'
                    ],
                    [
                        'name' => 'desig',
                        'label' => __( 'Designation', 'safariotravel' ),
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'img',
                        'label' => __( 'Photo', 'safariotravel' ),
                        'type' => Controls_Manager::MEDIA,
                    ],
                    [
                        'name' => 'facebook',
                        'label' => __( 'Member Facebook URL', 'safariotravel' ),
                        'type' => Controls_Manager::URL,
                    ],
                    [
                        'name' => 'twitter',
                        'label' => __( 'Member Twitter URL', 'safariotravel' ),
                        'type' => Controls_Manager::URL,
                    ],
                    [
                        'name' => 'instagram',
                        'label' => __( 'Member Instagram URL', 'safariotravel' ),
                        'type' => Controls_Manager::URL,
                    ],
                    [
                        'name' => 'skype',
                        'label' => __( 'Member Skype ID', 'safariotravel' ),
                        'type' => Controls_Manager::TEXT,
                    ],

                ],
            ]
        );


		$this->end_controls_section(); // End Team Member content



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
                'selector' => '{{WRAPPER}} .speaker-bg',
            ]
        );

        $this->end_controls_section();


		//------------------------------ Style Team Member Content ------------------------------
		$this->start_controls_section(
			'style_teaminfo', [
				'label' => __( 'Style Team Member Info', 'safariotravel' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_control(
            'image_overlay_color', [
                'label' => __( 'Member Image Overlay Color', 'safariotravel' ),
                'type'  => Controls_Manager::COLOR,
                'default' => 'rgba(59,29,130,0.8)',
                'selectors' => [
                    '{{WRAPPER}} .card-speaker .speaker-overlay' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'team_nameopt',
            [
                'label' => __( 'Name Style', 'safariotravel' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_name', [
                'label' => __( 'Name Color', 'safariotravel' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .speaker-footer h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'name_hover_color', [
                'label' => __( 'Name Hover Color', 'safariotravel' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .speaker-footer h4:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_name',
                'selector' => '{{WRAPPER}} .speaker-footer h4',
            ]
        );
        //
        $this->add_control(
            'team_desigopt',
            [
                'label' => __( 'Designation Style', 'safariotravel' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_desigopt', [
                'label' => __( 'Designation Color', 'safariotravel' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .speaker-footer p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'designation_hover_color', [
                'label' => __( 'Designation Hover Color', 'safariotravel' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .speaker-footer p:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'typography_desigopt',
                'selector' => '{{WRAPPER}} .speaker-footer p',
            ]
        );
        $this->add_control(
            'team_meta',
            [
                'label' => __( 'Meta Style', 'safariotravel' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_meta_bg', [
                'label' => __( 'Footer Meta Background Color', 'safariotravel' ),
                'type' => Controls_Manager::COLOR,
                'default'   => 'rgba(59,29,130,0.9)',
                'selectors' => [
                    '{{WRAPPER}} .card-speaker .speaker-footer' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'item_hover_meta_bg', [
                'label' => __( 'Hover Meta Background Color', 'safariotravel' ),
                'type' => Controls_Manager::COLOR,
                'default'   => 'rgba(234,7,99,0.6)',
                'selectors' => [
                    '{{WRAPPER}} .card-speaker:hover .speaker-footer' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();




	}

	protected function render() {

    $settings = $this->get_settings();

        ?>
        <section class="speaker-bg section-padding">
            <div class="container">
                <div class="section-intro text-center pb-98px">
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

                <div class="row">
                <?php 
                    if( is_array( $settings['teamslider'] ) && count( $settings['teamslider'] ) > 0 ):
                        foreach( $settings['teamslider'] as $team ):
                            ?>
                            <div class="col-lg-4 col-sm-6 single_speaker">
                                <div class="card-speaker">
                                <?php 
                                    // Member Image
                                    if( ! empty( $team['img']['url'] ) ) {

                                        echo safariotravel_img_tag(
                                            array(
                                                'url'   => esc_url( $team['img']['url'] ),
                                                'class' => 'card-img rounded-0'
                                            )
                                        );

                                    }
                                    ?>
                                    <div class="speaker-footer">
                                    <?php
                                        // Member Name
                                        if( !empty( $team['label'] ) ){
                                            echo safariotravel_heading_tag(
                                                array(
                                                    'tag'  => 'h4',
                                                    'text' => esc_html( $team['label'] )
                                                )
                                            );
                                        }

                                        // Designation
                                        if( !empty( $team['desig'] ) ){
                                            echo safariotravel_paragraph_tag(
                                                array(
                                                    'text' => esc_html( $team['desig'] )
                                                )
                                            );
                                        }
                                        ?>
                                    </div>
                                    <div class="speaker-overlay">
                                        <ul class="speaker-social">
                                            <?php
                                                if( !empty( $team['facebook']['url'] ) ){
                                                    echo '<li><a href="'. esc_url( $team['facebook']['url'] ) .'"><i class="ti-facebook"></i></a></li>';
                                                }
                                                if( !empty( $team['twitter']['url'] ) ){
                                                    echo '<li><a href="'. esc_url( $team['twitter']['url'] ) .'"><i class="ti-twitter-alt"></i></a></li>';
                                                }
                                                if( !empty( $team['instagram']['url'] ) ){
                                                    echo '<li><a href="'. esc_url( $team['instagram']['url'] ) .'"><i class="ti-instagram"></i></a></li>';
                                                }
                                                if( !empty( $team['skype'] ) ){
                                                    echo '<li><a href="'. esc_html( $team['skype'] ) .'"><i class="ti-skype"></i></a></li>';
                                                }
                                            ?>
                                        </ul>
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
