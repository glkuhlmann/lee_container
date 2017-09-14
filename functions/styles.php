<?php



function theme_name_scripts() {
	wp_register_style(
	    'main', // handle name
	    get_template_directory_uri() . '/css/main.css', // the URL of the stylesheet
	    '', // an array of dependent styles
	    '', // version number
	    'screen' // CSS media type
	);
	wp_enqueue_style( 'main' );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


?>