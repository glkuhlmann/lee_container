<?php

// Add admin.css to change the admin look.
function wptutsplus_admin_styles(){
	
	wp_register_style( 'user_stylesheet_admin', get_template_directory_uri( ).'/css/user-admin.css' );
	wp_enqueue_style( 'user_stylesheet_admin' );
	
	
	wp_register_style( 'icon_font', 'https://fontastic.s3.amazonaws.com/tSYpTVDvXBwtqt599YBgYf/icons.css' );
	wp_enqueue_style( 'icon_font' );
	
	
	if ( !is_super_admin() ) {
		wp_register_style( 'user_stylesheet_editor', get_template_directory_uri( ).'/css/user-editor.css' );
		wp_enqueue_style( 'user_stylesheet_editor' );
	}
	
}
add_action( 'admin_enqueue_scripts', 'wptutsplus_admin_styles' );




// Add admin.js to change the admin look.
function add_admin_scripts(){
	wp_register_script( 'custom_admin_js', 
      get_template_directory_uri() . '/js/admin.js');
    
		wp_enqueue_script( 'custom_admin_js' );
}
add_action( 'admin_enqueue_scripts', 'add_admin_scripts' );
?>