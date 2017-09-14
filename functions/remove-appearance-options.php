<?php

//Remove Appearance Options
///http://stackoverflow.com/questions/25788511/remove-submenu-page-customize-php-in-wordpress-4-0
function as_remove_menus () {
  global $submenu;
  // Appearance Menu
  // 7 Widgets
  global $user_ID;
  if ( !current_user_can( 'create_users' ) ) {
	  unset($submenu['themes.php'][5]); // Themes
	  unset($submenu['themes.php'][6]); // Customize
	  unset($submenu['themes.php'][20]); // Background
	  unset($submenu['themes.php'][7]); // Widgets
	  unset($submenu['themes.php'][10]); // Menu
  }
  //print_r($submenu['themes.php']);
}
add_action('admin_menu', 'as_remove_menus');



// Remove theme editor from menu
//https://wordpress.org/support/topic/how-to-remove-theme-editor-submenu
function my_remove_menu_elements(){
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
}
add_action('admin_init', 'my_remove_menu_elements', 102);


// remove the them editor entirely by placing "define('DISALLOW_FILE_EDIT',true);" into the wp-config file
//http://premium.wpmudev.org/blog/how-to-disable-the-wordpress-plugin-and-theme-editor/




/*
Add this to wp-config to disable the theme editor entirely.
define( 'DISALLOW_FILE_EDIT', true );
*/








?>