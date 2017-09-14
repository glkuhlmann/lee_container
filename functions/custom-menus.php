<?php



function wp_bootstrap_main_nav() {
  // Display the WordPress menu if available
  wp_nav_menu( 
    array( 
      'menu' => 'main_nav', /* menu name */
      'menu_class' => 'the_main_menu',
      'theme_location' => 'main_nav', /* where in the theme it's assigned */
      'container' => 'false' /* container class */
    )
  );
}

function wp_bootstrap_footer_links() { 
  // Display the WordPress menu if available
  wp_nav_menu(
    array(
      'menu' => 'footer_links', /* menu name */
      'theme_location' => 'footer_links', /* where in the theme it's assigned */
      'container_class' => 'footer-links clearfix' /* container class */
    )
  );
}



function wp_register_menus(){
	add_theme_support( 'menus' );
    
    register_nav_menus(
      array( 
        'main_nav' => 'The Main Menu',   // main nav in header
        'footer_links' => 'Footer Links' // secondary nav in footer
      )
    );
}
add_action( 'after_setup_theme','wp_register_menus' );


?>