<?php



// Add Image Sizes
if ( function_exists( 'add_image_size' ) ) {
	
	
	add_image_size( 'facebook', 1200, 628, true );
	
	add_image_size( 'twitter', 1024, 512, true );
	
	
	//Slideshow
	add_image_size( 'slideshow', 1400, 600, true );
	add_image_size( 'slideshow-half', 700, 300, true );
	
	
	//Timeline
	add_image_size( 'timeline', 600, 9999 );
	add_image_size( 'timeline-half', 300, 9999 );
	
	
	//Post Types
	//add_image_size( 'featured-gallery', 600, 460, true );
	//add_image_size( 'featured-gallery-small', 300, 230, true );
	
	
	//add_image_size( 'testimonial', 600, 600, true );
	//add_image_size( 'testimonial-small', 200, 200, true );
	
	
	//Flexible Fields
	//add_image_size( 'full-image-link', 1200, 400, true );
	//add_image_size( 'full-image-link-small', 300, 100, true );
	
	//add_image_size( 'three-wide-image-link', 600, 400, true );
	//add_image_size( 'three-wide-image-link-small', 300, 200, true );
	
	add_image_size( 'video-thumbnail', 800, 490, true );
	add_image_size( 'video-thumbnail-small', 327, 200, true );
	
	
	add_image_size( 'square', 500, 500, true );
	add_image_size( 'square-half', 250, 250, true );
	
}
//set_post_thumbnail_size( 800, 500, true );

?>