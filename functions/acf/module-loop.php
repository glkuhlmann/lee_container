<?php


// The loop function for calling the modules
function custom_module_loop(){
	global $module_array;
	// set to false until there is a map
	//global $flexible_map;
	//global $testing;
	//$flexible_map = false;
	//$testing = '';
	if( have_rows('modules') ):
		// count the rows for map IDs
		$i = 0;
	
	    while ( have_rows('modules') ) : the_row();
	    	$i++;
			
	    	// This is running a lot. Try to figure out a cleaner way later.
		    foreach( $module_array as $value){
				//echo '<br/>dsasdgds<br/><br/>';
				//print_r($value);
				//echo $value['name'];
				
				
				if( get_row_layout() == $value['name'] ){
					custom_module_structure( $value['name'], $i );
				}
				
				
				/*
				if(get_row_layout() == 'full_width_map'){
					$flexible_map = true;
				}
				*/
			}
	
	    endwhile;
	
	else :
	    // no layouts found
	endif;
	
	/*
	if($flexible_map == true){
		custom_module_map_structure( '_loop', 'full-width-map' );
	}
	*/
}



function hls_get_panel_index() {
	static $index = 0;
	$index++;
	return $index;
}



function custom_module_structure( $name, $i ){
	include(trailingslashit( get_template_directory() ) . 'content/modules/'.$name.'.php');
}


?>