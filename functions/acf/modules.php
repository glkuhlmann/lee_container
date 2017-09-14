<?php

global $modules;
//
$modules = array( 
	'full_width_content',
	'two_column_content',
	'three_column_content',
	'accordion_group',
	'swipebox_gallery',
);


function something(){
	global $modules;
	
	foreach( $modules as $value){
		include(trailingslashit( get_template_directory() ) . 'functions/acf/modules/'.$value.'.php');
	}
}
something();


global $module_array;
// Add the modules you want included here.
$module_array = array( 
	$mod_full_width_content,
	$mod_two_column_content,
	$mod_three_column_content,
	$mod_accordion_group,
	$mod_swipebox_gallery,
);





if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_55df4a8b82208',
	'title' => 'Flexible Fields',
	'fields' => array (
		array (
			'key' => 'field_55df4abe45a22',
			'label' => 'Modules',
			'name' => 'modules',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'button_label' => 'Add Module',
			'min' => '',
			'max' => '',
			'layouts' => $module_array,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => -1,
	'position' => 'acf_after_title',//http://www.advancedcustomfields.com/resources/register-fields-via-php/
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
	),
	'active' => 1,
	'description' => '',
));

endif;




// The loop for the flexible fields
include(trailingslashit( get_template_directory() ) . 'functions/acf/module-loop.php');


?>