<?php


//https://github.com/oncletom/wp-less/issues/45
add_filter('mce_css', 'theme_mce_less');
function theme_mce_less($css){
  $handle = 'mce_editor';

  wp_enqueue_style('mce_editor', trailingslashit( get_template_directory_uri() )."css/editor-style.css");


  global $wp_styles;
  $src = $wp_styles->registered[$handle]->src;
  wp_dequeue_style($handle);
  return $css ? $css.','.$src : $src;
}


?>