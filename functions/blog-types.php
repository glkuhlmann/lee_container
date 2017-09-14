<?php


// Add WP 3+ Functions & Theme Support
if( !function_exists( "wp_bootstrap_theme_support" ) ) {  
  function wp_bootstrap_theme_support() {
    add_theme_support( 'post-thumbnails' );      // wp thumbnails (sizes handled in functions.php)
    //set_post_thumbnail_size( 125, 125, true );   // default thumb size
    add_theme_support( 'automatic-feed-links' ); // rss

    // Add post format support - if these are not needed, comment them out
    add_theme_support( 'post-formats',      // post formats
      array( 
        //'aside',   // title less blurb
        //'gallery', // gallery of images
        //'link',    // quick link to other site
        //'image',   // an image
        //'quote',   // a quick quote
        //'status',  // a Facebook like status update
        //'video',   // video 
        //'audio',   // audio
        //'chat'     // chat transcript 
      )
    );
  }
}
// launching this stuff after theme setup
add_action( 'after_setup_theme','wp_bootstrap_theme_support' );



?>