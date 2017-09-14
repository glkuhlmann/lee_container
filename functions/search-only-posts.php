<?php



//http://inspirationalpixels.com/snippets/limit-search-to-posts
// search only posts
function custom_search_filter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
 
    return $query;
}
 
add_filter('pre_get_posts','custom_search_filter');



?>