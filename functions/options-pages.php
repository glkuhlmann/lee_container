<?php


//setup the options pages - this is necessary using the new pro version
//@see http://www.advancedcustomfields.com/resources/options-page/
//http://www.advancedcustomfields.com/resources/acf_add_options_page/
if( function_exists('acf_add_options_page') ) {
	
	
	
	acf_add_options_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'Site Options',
		'menu_slug' 	=> 'options-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Jobs',
		'menu_title'	=> 'Jobs',
		'parent_slug'	=> 'options-general-settings',
	));
	
	/*
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Information',
		'menu_title'	=> 'Contact Information',
		'parent_slug'	=> 'options-general-settings',
	));
	*/
	
}


?>