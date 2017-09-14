<?php



//change the events post type url based on the date
//add_action('init', 'tdd_add_rewrite_rules');
function tdd_add_rewrite_rules(){
	// Register custom rewrite rules
	global $wp_rewrite;
	$wp_rewrite->add_rewrite_tag('%events%', '([^/]+)', 'events=');
	$wp_rewrite->add_rewrite_tag('%event_date%', '([^/]+)', 'event_date=');
	 
	$wp_rewrite->add_permastruct('events', '/events/%events%/%event_date%', false);
	 
}

//add_filter('post_type_link', 'tdd_permalinks', 10, 3);
function tdd_permalinks($permalink, $post, $leavename){
	$no_data = '';
	$post_id = $post->ID;
	if($post->post_type != 'events' || empty($permalink) || in_array($post->post_status, array('draft', 'pending', 'auto-draft')))
	 
	return $permalink;
	 
	$var1 = get_post_meta($post_id, 'event_date', true);
	$var2 = get_post_meta($post_id, 'event_title', true);
	$var2 = sanitize_title($var2);
	//echo $var1;
	$date = strtotime($var1);
	//echo $date;
	//$dateString = $var2 .'-'. date('m-d-Y', $date);
	$dateString = date('m-d-Y', $date);
	//echo $dateString;
	//if(!$var1) { $var1 = $no_data; }
	 
	$permalink = str_replace('%event_date%', $dateString, $permalink);
	 
	return $permalink;
}
//http://firecask.com/custom-fields-and-posts-in-wordpress-permalink-urls/




























//add columns and make them sortable
//http://code.tutsplus.com/articles/quick-tip-make-your-custom-column-sortable--wp-25095
add_filter('manage_edit-events_columns', 'my_extra_cake_columns');
function my_extra_cake_columns($columns) {
    $columns['slices'] =__('Event Date','myplugindomain');
    //unset($columns['date']);
    return $columns;
}

add_action( 'manage_events_posts_custom_column', 'my_cake_column_content', 10, 2 );
function my_cake_column_content( $column_name, $post_id ) {
    if ( 'slices' != $column_name )
        return;
    //This only displays the number in the column. This is NOT the number it sorts from.
    $slices = get_post_meta($post_id, 'event_date', true);
    if(get_field('event_date')){
		$date = strtotime(get_field('event_date'));
		
    
  		if(get_field('event_start_date')){
        $startDate = strtotime(get_field('event_start_date'));
        $dateString = date('n/j/Y', $startDate).' - '.date('n/j/Y', $date);
      }else{
        $dateString = date('n/j/Y', $date);
      }
		echo $dateString;
	}
    //echo intval($slices);
}

add_filter( 'manage_edit-events_sortable_columns', 'my_sortable_cake_column' );
function my_sortable_cake_column( $columns ) {
    $columns['slices'] = 'slice';
 
    return $columns;
}







//turned this off because images weren't showing on archive page.
//sort the events by date
//This works for the front end and the admin columns
//there is some stuff in the archive for this post type that needs to be implemented if there is a relationship field involved.
//http://wordpress.stackexchange.com/questions/39817/sort-results-by-name-asc-order-on-archive-php

function my_change_sort_order($query){
	$todayDate = date('Ymd');
	//http://wordpress.org/support/topic/custom-post-type-pre_get_posts-and-dynamic-validation
    if( !$query->is_admin  && 'nav_menu_item' == $query->query_vars['post_type'] ) {
        //Stupid pre_get_posts and navigation in WordPress
        return;
    } elseif(is_post_type_archive( 'events' )){
     //If you wanted it for the archive of a custom post type use: is_post_type_archive( $post_type )
	 //Set the order ASC or DESC
	 	$query->set('meta_key','event_date');//event_date is the number it is sorting from.
		$query->set('orderby','meta_value_num');
		if( ! is_admin() ){
			$query->set('order','ASC');
			$query->set('meta_query',array(
											array(
										        'key'		=> 'event_date',
										        'compare'	=> '>=',
										        'value'		=> $todayDate
										    )
									    ));
		}
    }   
};
//add_action( 'pre_get_posts', 'my_change_sort_order'); 









function my_pre_get_posts( $query ) {
	
	// do not modify queries in the admin
	if( is_admin() ) {
		
		if( !$query->is_admin  && 'nav_menu_item' == $query->query_vars['post_type'] ) {
        //Stupid pre_get_posts and navigation in WordPress
        return;
    } elseif(is_post_type_archive( 'events' ) && $query->is_main_query() ){
     //If you wanted it for the archive of a custom post type use: is_post_type_archive( $post_type )
	 //Set the order ASC or DESC
	 	$query->set('meta_key','event_date');//event_date is the number it is sorting from.
		$query->set('orderby','meta_value_num');
		if( ! is_admin() ){
			$query->set('order','ASC');
			$query->set('meta_query',array(
											array(
										        'key'		=> 'event_date',
										        'compare'	=> '>=',
										        'value'		=> $todayDate
										    )
									    ));
		}
		}
		
	}
	

	// only modify queries for 'event' post type
	elseif(is_post_type_archive( 'events' ) && $query->is_main_query() ){
  	if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'events' ) {
    	
    	date_default_timezone_set('America/New_York');
      $todayDateDashes = date("Y-m-d");
      $todayDateNumber = strtotime($todayDateDashes);
      $todayDateNumber = $todayDateNumber - ($todayDateNumber % 86400);
      
  		$todayDate = date('Ymd');
  		$query->set('orderby', 'meta_value_num');	
  		$query->set('meta_key', 'event_date');	 
  		$query->set('order', 'ASC'); 
  		$query->set('meta_query',array(
  											array(
  										        'key'		=> 'event_date',
  										        'compare'	=> '>=',
  										        'value'		=> $todayDate
  										    )
  									    ));
  		
  	}
	}
	

	// return
	return $query;

}

add_action('pre_get_posts', 'my_pre_get_posts');
















//Backup to the above. changes made 8/20/14
/*
add_action( 'pre_get_posts', 'my_change_sort_order'); 
function my_change_sort_order($query){
	$todayDate = date('Ymd');
    if(is_post_type_archive( 'events' )):
     //If you wanted it for the archive of a custom post type use: is_post_type_archive( $post_type )
	 //Set the order ASC or DESC
	 	$query->set('meta_key','event_date');//event_date is the number it is sorting from.
		$query->set('orderby','meta_value_num');
		if( ! is_admin() ){
			$query->set('order','ASC');
			$query->set('meta_query',array(
											array(
										        'key'		=> 'event_date',
										        'compare'	=> '>=',
										        'value'		=> $todayDate
										    )
									    ));
		}
    endif;    
};
*/


//Try this next time
//http://wordpress.stackexchange.com/questions/36029/help-with-issue-on-pre-get-posts-filter-in-taxonomy



?>