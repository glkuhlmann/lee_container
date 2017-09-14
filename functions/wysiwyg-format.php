<?php


//http://wordpress.stackexchange.com/questions/167685/add-css-class-to-link-in-tinymce-editor
//https://shellcreeper.com/complete-guide-to-style-format-drop-down-in-wp-editor/
//https://codex.wordpress.org/TinyMCE_Custom_Styles
// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats2( $init_array ) {  
    // Define the style_formats array
    $style_formats = array(  
        // Each array child is a format with it's own settings
        array(
	        'title'   => 'Buttons',
	        'items' => array(
		        array(  
		            'title' => 'Primary',  
		            'selector' => 'a',  
		            'classes' => 'btn-primary'             
		        ),
		        array(  
		            'title' => 'Secondary',  
		            'selector' => 'a',  
		            'classes' => 'btn-secondary'             
		        )
	        )
        ),
		array(
	        'title'   => 'Colors',
	        'items' => array(
		        array(  
		            'title' => 'Primary',  
		            'inline' => 'span',  
		            'classes' => 'primary-text'             
		        ),
		        array(  
		            'title' => 'Secondary',  
		            'inline' => 'span',  
		            'classes' => 'secondary-text'             
		        ),
		        array(  
		            'title' => 'Text Gray',  
		            'inline' => 'span',  
		            'classes' => 'text-text'             
		        ),
		        
	        )
        ),
        array(
	        'title'   => 'Font Weight',
	        'items' => array(
		        array(  
		            'title' => 'Light',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'fw-light'             
		        ),
		        array(  
		            'title' => 'Regular',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'fw-regular'             
		        ),
		        array(  
		            'title' => 'Medium',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'fw-medium'             
		        ),
		        array(  
		            'title' => 'Bold',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'fw-bold'             
		        ),
	        )
        ),
        array(
	        'title'   => 'Font Style',
	        'items' => array(
		        array(  
		            'title' => 'Uppercase',  
		            'inline' => 'span',  
		            'classes' => 'uppercase'             
		        ),
	        )
        ),
        array(
	        'title'   => 'Margin Bottom',
	        'items' => array(
		        array(  
		            'title' => '0px',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'mb-0'             
		        ),
		        array(  
		            'title' => '10px',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'mb-10'             
		        ),
		        array(  
		            'title' => '20px',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'mb-20'             
		        ),
		        array(  
		            'title' => '30px',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'mb-30'             
		        ),
		        array(  
		            'title' => '40px',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'mb-40'             
		        ),
		        array(  
		            'title' => '50px',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'mb-50'             
		        ),
		        array(  
		            'title' => '60px',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'mb-60'             
		        ),
		        array(  
		            'title' => '70px',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'mb-70'             
		        ),
		        array(  
		            'title' => '80px',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'mb-80'             
		        ),
		        array(  
		            'title' => '90px',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'mb-90'             
		        ),
		        array(  
		            'title' => '100px',  
		            'selector' => 'h1,h2,h3,h4,h5,h6,p,ul',  
		            'classes' => 'mb-100'             
		        )
	        )
        ),
        
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  

    return $init_array;  

} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats2' );




?>