




<div class="module swipebox_gallery-wrapper">
<div class="row">
<?php
$images = get_sub_field('gallery');
if( $images ): ?>
    <?php foreach( $images as $image ): ?>
    	<div class="swipebox-gallery-item">
        	
            
            
            
            
            
            <a href="<?php echo $image['url'];?>" rel="lightbox[gallery-<?php echo $i;?>]" class="gallery-photo swipebox" title="<?php echo $image['title']; ?>">
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


</div><!-- .row -->
</div><!-- .full_width_content-wrapper -->