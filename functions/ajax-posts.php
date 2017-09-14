<?php
//https://premium.wpmudev.org/blog/load-posts-ajax/







function ajax_script(){
	global $wp_query;
	wp_localize_script( 'ajax-pagination', 'ajaxpagination', array(
	'ajaxurl' => admin_url( 'admin-ajax.php' ),
	'query_vars' => json_encode( $wp_query->query )
	));
}

add_action( 'wp_enqueue_scripts', 'ajax_script' );



add_action( 'wp_ajax_nopriv_ajax_pagination', 'my_ajax_pagination' );
add_action( 'wp_ajax_ajax_pagination', 'my_ajax_pagination' );

function my_ajax_pagination() {
  //$query_vars = json_decode( stripslashes( $_POST['query_vars'] ), true );
  $query_vars['paged'] = $_POST['page'];
  $posts = new WP_Query( $query_vars );
  $GLOBALS['wp_query'] = $posts;
  //add_filter( 'editor_max_image_size', 'my_image_size_override' );
  if( ! $posts->have_posts() ) {
    //get_template_part( 'content', 'none' );
  }
  else {
    while ( $posts->have_posts() ) {
      $posts->the_post();
      get_template_part( 'content/content/masonry-ajax' );
    }
  }
  
  //remove_filter( 'editor_max_image_size', 'my_image_size_override' );
  
  die();
}

/*
function my_image_size_override() {
  return array( 825, 510 );
}
*/



?>