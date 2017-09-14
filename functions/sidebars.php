<?php


// Sidebars & Widgetizes Areas
function wp_bootstrap_register_sidebars() {
  register_sidebar(array(
  	'id' => 'default_sidebar',
  	'name' => 'Default Sidebar',
  	'description' => 'This is the default sidebar.',
  	'before_widget' => '<div id="%1$s" class="widget %2$s">',
  	'after_widget' => '</div>',
  	'before_title' => '<h4 class="widgettitle">',
  	'after_title' => '</h4>',
  ));
  
} // don't remove this bracket!
add_action( 'widgets_init', 'wp_bootstrap_register_sidebars' );



// Enable shortcodes in widgets
add_filter( 'widget_text', 'do_shortcode' );


?>