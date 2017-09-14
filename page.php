<?php get_header(); ?>







<div class="container">
	<div class="row">
		<div class="col-sm-12 kitchen-sink">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php the_content(); ?>
				
				
				<?php 
				if( function_exists( 'custom_module_loop' ) ) {
					custom_module_loop();
				}
				?>
				
			<?php endwhile; ?>
			
			
			
			
			<?php
			
			// check if the flexible content field has rows of data
			if( have_rows('flexible_fields') ):
			$i = 0;
			
			     // loop through the rows of data
			    while ( have_rows('flexible_fields') ) : the_row();
			    $i++;
			
			        if( get_row_layout() == 'swipebox_gallery' ):
					?>
			        	
			        	<?php
						$images = get_sub_field('gallery');
						if( $images ): ?>
					        <?php foreach( $images as $image ): ?>
					        	<div class="col-sm-3">
						        	
					                
					                
					                
					                
					                
					                <a href="<?php echo $image['url'];?>" rel="lightbox[gallery-<?php echo $i;?>]" class="photoLink swipebox" title="<?php echo $image['title']; ?>">
						  				<img class="photoImage" src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"/>
						  				<div class="overlay blue">
						    				<div class="inner">
						      				<div class="cell">
						        				<p><?php echo $image['caption']; ?></p>
						      				</div><!-- end .cell -->
						    				</div><!-- end .inner -->
						  				</div><!-- end .overlay -->
						  			</a>
					                
					                
					                
					                
					                
					        </div><!-- .col -->
					       <?php endforeach; ?>
					<?php endif;?>
						
			        	
			        	
			        	<div class="clear"></div>
			        	
			        	
			        <?php
			        elseif( get_row_layout() == 'download' ): 
			
			        	$file = get_sub_field('file');
			
			        endif;
			
			    endwhile;
			
			else :
			
			    // no layouts found
			
			endif;
			
			?>
			
			
			
			
			
			
			
			
		</div>
	</div><!-- .row -->
</div><!-- .container -->



<?php get_footer(); ?>