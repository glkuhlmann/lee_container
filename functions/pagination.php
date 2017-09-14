<?php



// Add Pagination
// Numeric Page Navi (built into the theme by default)
function wp_bootstrap_page_navi($before = '', $after = '') {
  global $wpdb, $wp_query;
  $request = $wp_query->request;
  $posts_per_page = intval(get_query_var('posts_per_page'));
  $paged = intval(get_query_var('paged'));
  $numposts = $wp_query->found_posts;
  $max_page = $wp_query->max_num_pages;
  if ( $numposts <= $posts_per_page ) { return; }
  if(empty($paged) || $paged == 0) {
    $paged = 1;
  }
  $pages_to_show = 7;
  $pages_to_show_minus_1 = $pages_to_show-1;
  $half_page_start = floor($pages_to_show_minus_1/2);
  $half_page_end = ceil($pages_to_show_minus_1/2);
  $start_page = $paged - $half_page_start;
  if($start_page <= 0) {
    $start_page = 1;
  }
  $end_page = $paged + $half_page_end;
  if(($end_page - $start_page) != $pages_to_show_minus_1) {
    $end_page = $start_page + $pages_to_show_minus_1;
  }
  if($end_page > $max_page) {
    $start_page = $max_page - $pages_to_show_minus_1;
    $end_page = $max_page;
  }
  if($start_page <= 0) {
    $start_page = 1;
  }
    
  echo $before.'<ul class="pagination">'."";
  if ($paged > 1) {
    $first_page_text = "&laquo";
    //echo '<li class="prev"><a href="'.get_pagenum_link().'" title="' . __('First','dsd_theme') . '">'.$first_page_text.'</a></li>';
  }
    
  $prevposts = get_previous_posts_link( __('&#60;','dsd_theme') );
  if($prevposts) { echo '<li>' . $prevposts  . '</li>'; }
  else { echo '<li class="disabled"><span>' . __('&#60;','dsd_theme') . '</span></li>'; }
  
  for($i = $start_page; $i  <= $end_page; $i++) {
    if($i == $paged) {
      echo '<li class="active"><span>'.$i.'</span></li>';
    } else {
      echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
    }
  }
  
  $nextposts = get_next_posts_link( __('&#62;','dsd_theme') );
  if($nextposts) { echo '<li>' . $nextposts  . '</li>'; }
  else { echo '<li class="disabled"><span>' . __('&#62;','dsd_theme') . '</span></li>'; }
  
  
  //echo '<li class="last"><a href="#">&#62;</a>';
  
  echo '</li>';
  if ($end_page < $max_page) {
    $last_page_text = "&raquo;";
    echo '<li class="next"><a href="'.get_pagenum_link($max_page).'" title="' . __('Last','dsd_theme') . '">'.$last_page_text.'</a></li>';
  }
  echo '</ul>'.$after."";
}



?>