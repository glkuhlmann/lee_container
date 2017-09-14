<?php


//Make custom WYSIWYG Editor for ACF
//http://www.advancedcustomfields.com/resources/tutorials/customize-the-wysiwyg-toolbars/
add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
function my_toolbars( $toolbars ){
	// Uncomment to view format of $toolbars
	/*
	echo '< pre >';
		print_r($toolbars);
	echo '< /pre >';
	die;
	*/
	
	
	$toolbars['Custom Full'] = array();
	$toolbars['Custom Full'][1] = array(
		'formatselect',
		'bold',
		'italic',
		'underline',
		'strikethrough',
		'removeformat',
		'pastetext',
		'bullist',
		'numlist',
		'link',
		'unlink',
		'indent',
		'outdent',
		'alignleft',
		'aligncenter',
		'alignright',
		'alignjsutify',
		'superscript',
		'subscript'
	);
	
	
	
	$toolbars['Custom Basic'] = array();
	$toolbars['Custom Basic'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	
	
	$toolbars['Excerpt'] = array();
	$toolbars['Excerpt'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	
	
	
	// Home Pillars
	$toolbars['Home Pillars'] = array();
	$toolbars['Home Pillars'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Home Story
	$toolbars['Home Story'] = array();
	$toolbars['Home Story'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	
	// About Intro
	$toolbars['About Intro'] = array();
	$toolbars['About Intro'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// About Pillars
	$toolbars['About Pillars'] = array();
	$toolbars['About Pillars'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// About Locations
	$toolbars['About Locations'] = array();
	$toolbars['About Locations'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	
	// Careers Intro
	$toolbars['Careers Intro'] = array();
	$toolbars['Careers Intro'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Company Story Intro
	$toolbars['Company Story Intro'] = array();
	$toolbars['Company Story Intro'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Company Story Timeline
	$toolbars['Company Story Timeline'] = array();
	$toolbars['Company Story Timeline'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Customers Intro
	$toolbars['Customers Intro'] = array();
	$toolbars['Customers Intro'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Customers Industry
	$toolbars['Customers Industry'] = array();
	$toolbars['Customers Industry'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Customers Customers
	$toolbars['Customers Customers'] = array();
	$toolbars['Customers Customers'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Customers Testimonial
	$toolbars['Customers Testimonial'] = array();
	$toolbars['Customers Testimonial'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Life at Lee Intro
	$toolbars['Life at Lee Intro'] = array();
	$toolbars['Life at Lee Intro'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Life at Lee Testimonial
	$toolbars['Life at Lee Testimonial'] = array();
	$toolbars['Life at Lee Testimonial'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Products Intro
	$toolbars['Products Intro'] = array();
	$toolbars['Products Intro'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Products Options
	$toolbars['Products Options'] = array();
	$toolbars['Products Options'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Products CTA
	$toolbars['Products CTA'] = array();
	$toolbars['Products CTA'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Products Distributors
	$toolbars['Products Distributors'] = array();
	$toolbars['Products Distributors'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Options Jobs
	$toolbars['Options Jobs'] = array();
	$toolbars['Options Jobs'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	// Options Special Jobs
	$toolbars['Options Special Job'] = array();
	$toolbars['Options Special Job'][1] = array(
		'bold',
		'italic',
		'removeformat',
		'pastetext'
	);
	
	
	
	
	//@see http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
	if( ($key = array_search('code' , $toolbars['Full' ][2])) !== false ){
    unset( $toolbars['Full' ][2][$key] );
	}
	// remove the 'Basic' toolbar completely
	//unset( $toolbars['Basic' ] );
	return $toolbars;
}
/*
styleselect
bold
italic
strikethrough
bullist
numlist
blockquote
hr
alignleft
aligncenter
alignright
link
unlink
wp_more
spellchecker
fullscreen
wp_adv
formatselect
underline
alignjustify
forecolor
pastetext
removeformat
charmap
outdent
indent
undo
redo
wp_help
code
table - this needs the table plugin - https://wordpress.org/plugins/mce-table-buttons/
*/






?>