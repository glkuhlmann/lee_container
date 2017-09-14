<?php


global $mod_accordion_group;
$mod_accordion_group = array (
	'key' => '55fb4b66fe6d7',
	'name' => 'accordion_group',
	'label' => 'Accordion Group',
	'display' => 'block',
	'sub_fields' => array (
		array (
			'key' => 'field_55fb4b6dfe6d8',
			'label' => 'Accordion',
			'name' => 'accordion',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Section',
			'sub_fields' => array (
				array (
					'key' => 'field_55fb4b7ffe6d9',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55fb4b84fe6da',
					'label' => 'Content',
					'name' => 'content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'visual',
					'toolbar' => 'custom_basic',
					'media_upload' => 0,
				),
			),
		),
	),
	'min' => '',
	'max' => '',
);


?>