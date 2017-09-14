<?php


//Add new menu item. This one links to the custom menu
// add page visible to editors
add_action( 'admin_menu', 'register_my_page' );
function register_my_page(){
    add_menu_page( 'My Page Title', 'Menus', 'edit_others_posts', 'nav-menus.php', '', 'dashicons-menu', 72 ); 
}



// Remove admin menu items
//https://codex.wordpress.org/Function_Reference/remove_menu_page
//http://www.wpmayor.com/how-to-remove-menu-items-in-admin-depending-on-user-role/
function remove_menus(){
	
	global $user_ID;
  if ( !current_user_can( 'create_users' ) ) {
	  remove_menu_page( 'index.php' );                  //Dashboard
	  //remove_menu_page( 'edit.php' );                   //Posts
	  //remove_menu_page( 'upload.php' );                 //Media
	  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
	  //remove_menu_page( 'edit-comments.php' );          //Comments
	  remove_menu_page( 'themes.php' );                 //Appearance
	  //remove_menu_page( 'plugins.php' );                //Plugins
	  //remove_menu_page( 'users.php' );                  //Users
	  remove_menu_page( 'tools.php' );                  //Tools
	  //remove_menu_page( 'options-general.php' );        //Settings
  }
  
}
add_action( 'admin_menu', 'remove_menus' );


?>