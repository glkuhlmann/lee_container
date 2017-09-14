	
		</div><!-- #content -->
	</div><!-- #page_wrap -->
		
		<div id="footer" class="band">
			<div class="container kitchen-sink">
				<div class="row">
					<div class="col-sm-12">
						<h4>Contact Us</h4>
						
						<?php
						if( get_field( 'phone', 'options' ) ){
						?>
							<p><a href="tel:<?php echo get_field( 'phone', 'options' ); ?>"><?php echo get_field( 'phone', 'options' ); ?></a></p>
						<?php
						}
						?>
						
						<?php
						if( get_field( 'email', 'options' ) ){
						?>
							<p><a href="mailto:<?php echo get_field( 'email', 'options' ); ?>"><?php echo get_field( 'email', 'options' ); ?></a></p>
						<?php
						}
						?>
						
						<?php
						if( get_field( 'hours', 'options' ) ){
						?>
							<p><?php echo get_field( 'hours', 'options' ); ?></p>
						<?php
						}
						?>
						
						
						<?php
						if( get_field( 'corporate_address', 'options' ) ){
							echo get_field( 'corporate_address', 'options' );
						}
						?>
						
					</div><!-- .col -->
					
					<div class="col-sm-12">
						<?php wp_bootstrap_main_nav();?>
					</div><!-- .col -->
					
					
				</div><!-- .row -->
			</div><!-- .container -->
			
			
			
			
			<div id="sub_footer" class="band">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?php 
							if( function_exists( 'social_media_loop' ) ) {
								social_media_loop( 'class-name' );
							}
							?>
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #footer -->
			
			<div id="post_footer" class="band">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 kitchen-sink">
							<p>&copy; <?php echo date("Y"); ?> Lee Container</p>
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #footer -->
			
		</div><!-- #footer -->
		
		
	
		
		
		
					
		
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		
		
		
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		
		
		
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP,
		scrollwheel	: false
	};
	
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
    	add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;
	
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
</script>
		
		
		
		
		
		
		<?php
		if( is_page_template( 'page-templates/company-story.php' ) ){
		?>
			<script src="<?php echo get_template_directory_uri(); ?>/js/timeline.js"></script>
		<?php
		}
		?>
		
		
		
	</body>

</html>