<?php

/**
 * Class WPML_Elementor_Form
 */
class WPML_Elementor_Form extends WPML_Elementor_Module_With_Items {

	/**
	 * @return string
	 */
	public function get_items_field() {
		return 'form_fields';
	}

	/**
	 * @return array
	 */
	public function get_fields() {
		return array( 'field_label', 'placeholder' );
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_title( $field ) {
		switch( $field ) {
			case 'field_label':
				return esc_html__( 'Form: Field label', 'wpml-page-builders' );

			case 'placeholder':
				return esc_html__( 'Form: Field placeholder', 'wpml-page-builders' );

			default:
				return '';
		}
	}

	/**
	 * @param string $field
	 *
	 * @return string
	 */
	protected function get_editor_type( $field ) {
		switch( $field ) {
			case 'field_label':
			case 'placeholder':
				return 'LINE';

			default:
				return '';
		}
	}

}
