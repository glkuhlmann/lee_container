<?php


/*
Add body classes. This should be used for things like navigation style options.
*/
function body_classes($body_classes){
	echo str_replace( '<body class="', '<body class="' . $body_classes . ' ', ob_get_clean() );
}

//This fires the module_check & body_classes echo
add_action( 'wp_head', create_function( '', 'ob_start();' ) );



/*
Place this before get_header of each page that you want a custom class on.
$body_classes = '';

Use this in the header
<body <?php isset($class)?body_class($class):body_class("nav-fixed"); ?> >
<?php body_classes($body_classes);?>

*/
?>