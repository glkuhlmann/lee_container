<?php


/*
// Add Translation Option
load_theme_textdomain( 'dsd_theme', TEMPLATEPATH.'/languages' );
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable( $locale_file ) ) require_once( $locale_file );
*/



// Convert button classes to full blown buttons
//@author https://wordpress.org/support/topic/how-to-hange-text-string-to-another-string
function convert_wysiwyg_buttons( $content ) {
	$contenttt = str_replace("btn-", "btn btn-", $content);
	return $contenttt;
}
//add_filter('the_content', 'convert_wysiwyg_buttons');

?>