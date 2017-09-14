<?php


//Add body class to non super-admins
function jn_admin_body_class( $classes ) {
	if ( !is_super_admin() ) {
		$classes .= 'not-admin';
	}
	return $classes;
}
add_filter( 'admin_body_class', 'jn_admin_body_class' );


?>