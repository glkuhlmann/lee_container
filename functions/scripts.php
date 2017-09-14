<?php


// enqueue javascript
if( !function_exists( "wp_bootstrap_theme_js" ) ) {  
  function wp_bootstrap_theme_js(){

    if ( !is_admin() ){
      if ( is_singular() AND comments_open() AND ( get_option( 'thread_comments' ) == 1) ) 
        wp_enqueue_script( 'comment-reply' );
    }

    // This is the full Bootstrap js distribution file. If you only use a few components that require the js files consider loading them individually instead
    
  
    wp_register_script( 
		'modernizr', 
		get_template_directory_uri() . '/js/min/modernizr-min.js', 
		array(
			'jquery'
		), 
		'1.2',
		true
	);
    wp_enqueue_script( 'modernizr' );
	
	
	wp_register_script( 
		'bootstrap', 
		get_template_directory_uri() . '/js/bootstrap.min.js', 
		array(
			'jquery'
		), 
		'1.2',
		true
	);
	wp_enqueue_script( 'bootstrap' );
    
    
    wp_register_script( 
		'custom', 
		get_template_directory_uri() . '/js/min/custom-min.js', 
		array(
			'jquery'
		), 
		'1.2',
		true
	);
	wp_enqueue_script( 'custom' );
	
	
	wp_register_script( 
		'swipebox', 
		get_template_directory_uri() . '/js/min/jquery.swipebox.min.js', 
		array(
			'jquery'
		), 
		'1.2',
		true
	);
	wp_enqueue_script( 'swipebox' );
	
	
	wp_register_script( 
		'slick', 
		get_template_directory_uri() . '/js/min/slick.min.js', 
		array(
			'jquery'
		), 
		'1.2',
		true
	);
	wp_enqueue_script( 'slick' );
	
	
	
	// For masonry with ajax
	wp_register_script( 'ajax-pagination', 
		get_template_directory_uri() . '/js/ajax-pagination.js', 
		array('jquery'), 
		'1.0',
		true 
	);
	wp_enqueue_script( 'masonry' );
	wp_enqueue_script( 'ajax-pagination' );
    
  }
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_theme_js' );







//move jquery to footer
function my_init()   {  
    if (!is_admin()){  
        wp_deregister_script('jquery');  
        // Load the copy of jQuery that comes with WordPress  
        // The last parameter set to TRUE states that it should be loaded in the footer.  
        wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', FALSE, '1.11.0', TRUE);  
        wp_enqueue_script('jquery');  
    }  
}  


//detect if is login page. If not, move jquery to footer from above function.
//http://leowd.com/function-detect-login-page-wordpress/
function is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}
if (!is_login_page()) {
	add_action('init', 'my_init');
}


?>