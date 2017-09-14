<?php


// Hide the "Posts Page"  - set to news typically from the back end.
//http://www.johnparris.com/how-to-hide-pages-in-the-wordpress-admin/
function jp_exclude_pages_from_admin($query) {
 
  if ( ! is_admin() )
    return $query;
 
  global $pagenow, $post_type;
  
  $page_for_posts = get_option( 'page_for_posts' );
 
  //if ( !current_user_can( 'administrator' ) && $pagenow == 'edit.php' && $post_type == 'page' )
  if ($pagenow == 'edit.php' && $post_type == 'page' )
    $query->query_vars['post__not_in'] = array( $page_for_posts ); // Enter your page IDs here
  
 
}
add_filter( 'parse_query', 'jp_exclude_pages_from_admin' );


?>