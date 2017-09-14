<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

    
  	
    
  
  
  <div id="blog_content" class="band kitchen-sink mt-50">
    <div class="container">
      <div class="row">
        
        <div class="col-sm-12">
          
					
					
					
					<h1><?php the_title();?></h1>
					
					
					
					
					
					
					
					<h2 class="mb-10">Date:</h2>
					
					<h5>
					<?php
					if(get_field('event_start_date', $post->ID )){
		  				$eventDateEnd = DateTime::createFromFormat('Ymd', get_field('event_start_date', $post->ID ));
						echo $eventFormatEndMonth = $eventDateEnd->format('F');
						echo ' ';
						echo $eventFormatEndNumber = $eventDateEnd->format('j');
						echo ', ';
					  	echo $eventFormatEndYear = $eventDateEnd->format('Y');
					  	echo ' - ';
					}
					?>
          
					<?php
					if(get_field('event_date', $post->ID)){
						$eventDateEnd = DateTime::createFromFormat('Ymd', get_field('event_date', $post->ID ));
						echo $eventFormatEndMonth = $eventDateEnd->format('F');
						echo ' ';
						echo $eventFormatEndNumber = $eventDateEnd->format('j');
						echo ', ';
					  	echo $eventFormatEndYear = $eventDateEnd->format('Y');
					}
					?>
					</h5>
					
					
					
					
				<h2 class="mb-10">Description:</h2>
				
				
				
				<?php the_content();?>
					
					
					
					
					
					
					
				<?php
	  			if(get_field('event_time')){
	  			?>
	  				<h2 class="mb-10">Time:</h2>
	  				<h5><?php echo get_field('event_time');?></h5>
	  			
	  			<?php
	  			}
	  			?>
  			
  			
  			
  			
  			<?php
  			if(get_field('address')){
	  			?>
	  			<h2 class="mb-10">Location:</h2>
	  			<?php
    			echo get_field('address');
  			}
  			?>
					
					
					
					
					
					
					

<?php
if(get_field('location')){
?>
<div id="map-canvas"></div>

<?php
$location = get_field('location');
//print_r($location);
$address = $location['address'];
?>

<a class="btn btn-primary" href="https://www.google.com/maps/place/<?php echo $address; ?>/@<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>,13z" target="_blank">google map</a>	


<?php
}
?>



				
				
				
				
				
				
	
	
	
	
	
	
	
          
        </div><!-- end .col-sm-8 -->
        
        

        
        
      </div><!-- end .row -->
    </div><!-- end .container -->
  </div><!-- end .band -->
  
  
  
  
  
  
  
  


  
	
	
			
			




















<?php
if(get_field('location')){
  get_template_part( 'content/events/map-script' );
}
?>




  
		
			
			
			
		

<?php
get_footer();
