<?php


// Drop yoast to bottom of post.
//https://wordpress.org/support/topic/plugin-wordpress-seo-by-yoast-position-seo-meta-box-priority-above-custom-meta-boxes
// Filter Yoast Meta Priority
add_filter( 'wpseo_metabox_prio', function() { return 'low';});


?>