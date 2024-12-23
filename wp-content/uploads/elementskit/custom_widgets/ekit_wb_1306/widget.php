<?php

namespace Elementor;

defined('ABSPATH') || exit;

class Ekit_Wb_1306 extends Widget_Base {

	public function get_name() {
		return 'ekit_wb_1306';
	}


	public function get_title() {
		return esc_html__( 'Support', 'elementskit-lite' );
	}


	public function get_categories() {
		return ['basic'];
	}


	public function get_icon() {
		return 'fas fa-headphones';
	}


	protected function register_controls() {

		$this->start_controls_section(
			'content_section_1306_0',
			array(
				'label' => esc_html__( 'Title', 'elementskit-lite' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);

		$this->add_control(
			'ekit_wb_1306_select',
			array(
				'label' => esc_html__( 'Select', 'elementskit-lite' ),
				'type'  => Controls_Manager::SELECT,
				'default' =>  esc_html( 'value-1' ),
				'show_label' => true ,
				'label_block' => false ,
				'options' => array(
					'value-1' => esc_html( 'Option 1' ),
					'value-2' => esc_html( 'Option 2' ),
					'value-3' => esc_html( 'Option 3' ),
				),
			)
		);

		$this->add_control(
			'ekit_wb_1306_color',
			array(
				'label' => esc_html__( 'Color', 'elementskit-lite' ),
				'type'  => Controls_Manager::COLOR,
				'default' =>  esc_html( '#000' ),
				'show_label' => true,
				'label_block' => false,
				'alpha' => true,
			)
		);

		$this->add_control(
			'ekit_wb_1306_test_ss',
			array(
				'label' => esc_html__( 'sdl;kadsf;l', 'elementskit-lite' ),
				'type'  => Controls_Manager::TEXT,
				'placeholder' =>  esc_html( 'asdasdasd' ),
				'show_label' => true,
				'label_block' => false,
				'input_type' => 'text',
			)
		);

		$this->add_control(
			'ekit_wb_1306_pet_switcher',
			array(
				'label' => esc_html__( 'Do you have pet?', 'elementskit-lite' ),
				'type'  => Controls_Manager::SWITCHER,
				'description' =>  esc_html( 'adfadfadfadsfa' ),
				'show_label' => true ,
				'label_block' => false ,
				'label_on' => 'Yes' ,
				'label_off' => 'No' ,
				'return_value' => 'yes' ,
			)
		);

		$this->end_controls_section();

	}


	protected function render() {
		$settings = $this->get_settings_for_display();

		?>
dasfgagljkadglkjllklkasdl;kl
		<?php
	}


}
