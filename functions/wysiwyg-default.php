<?php


//Customize the default wordpress WYSIWYG
//https://codex.wordpress.org/TinyMCE

function my_format_TinyMCE( $in ) {
	//$in['remove_linebreaks'] = false;
	//$in['gecko_spellcheck'] = false;
	//$in['keep_styles'] = true;
	//$in['accessibility_focus'] = true;
	//$in['tabfocus_elements'] = 'major-publishing-actions';
	//$in['media_strict'] = false;
	//$in['paste_remove_styles'] = false;
	//$in['paste_remove_spans'] = false;
	//$in['paste_strip_class_attributes'] = 'none';
	//$in['paste_text_use_dialog'] = true;
	//$in['wpeditimage_disable_captions'] = true;
	//$in['plugins'] = 'tabfocus,paste,media,fullscreen,wordpress,wpeditimage,wpgallery,wplink,wpdialogs,wpfullscreen';
	//$in['content_css'] = get_template_directory_uri() . "/editor-style.css";
	//$in['wpautop'] = true;
	//$in['apply_source_formatting'] = false;
	$in['block_formats'] = 'Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Paragraph=p';
	$in['toolbar1'] = 'bold, italic, underline, strikethrough, blockquote, hr, link, unlink, superscript, subscript, spellchecker, wp_fullscreen, wp_adv ';
	$in['toolbar2'] = 'bullist, numlist, outdent, indent, alignleft, aligncenter, alignright, alignjustify';
	$in['toolbar3'] = 'styleselect, formatselect, pastetext, removeformat, charmap, undo, redo';
	//$in['toolbar3'] = 'styleselect';
	//$in['toolbar4'] = '';
	/*
	REMOVED OPTIONS:
	aligncenter 
	alignleft 
	alignright 
	alignjustify 
	wp_more 
	forecolor
	wp_help
	*/
	return $in;
}
add_filter( 'tiny_mce_before_init', 'my_format_TinyMCE' );


?>