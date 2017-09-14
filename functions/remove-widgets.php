<?php
add_action( 'widgets_init', 'cwwp_unregister_default_widgets' );
/**
 * Unregisters the default widgets in WordPress. Tested with 3.5-alpha.
 * Simply uncomment specific widgets to unregister them.
 *
 * @since 1.0.0
 */
 //https://thomasgriffin.io/remove-default-widgets-wordpress/
function cwwp_unregister_default_widgets() {
	
	//unregister_widget( 'WP_Widget_Archives' );
	//unregister_widget( 'WP_Widget_Calendar' );
	//unregister_widget( 'WP_Widget_Categories' );
	unregister_widget( 'WP_Nav_Menu_Widget' );
	//unregister_widget( 'WP_Widget_Links' );
	unregister_widget( 'WP_Widget_Meta' );
	unregister_widget( 'WP_Widget_Pages' );
	unregister_widget( 'WP_Widget_Recent_Comments' );
	//unregister_widget( 'WP_Widget_Recent_Posts' );
	unregister_widget( 'WP_Widget_RSS' );
	//unregister_widget( 'WP_Widget_Search' );
	//unregister_widget( 'WP_Widget_Tag_Cloud' );
	unregister_widget( 'WP_Widget_Text' );
  
	
}








?>