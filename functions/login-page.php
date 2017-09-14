<?php


// Change login logo link url
function put_my_url(){
return ('/');//place link here
}
add_filter('login_headerurl', 'put_my_url');





function theme_login_less(){
  wp_enqueue_style('login_css', trailingslashit( get_template_directory_uri() )."css/login.css");

}
add_filter('login_enqueue_scripts', 'theme_login_less');






//Redirect from wp-admin to Options page
function cm_redirect_users_by_role() {
    add_action('load-index.php', 'dashboard_Redirect');
	function dashboard_Redirect(){
		wp_redirect('/sitefiles/wp-admin/admin.php?page=options-general-settings');
	}
}
add_action( 'admin_init', 'cm_redirect_users_by_role' );
//http://projectivemotion.com/2011/12/16/disabling-wordpress-dashboard-properly-redirect-dashboard-page/


?>