<?php 
$rowID = $i;
//echo $template;
//echo $name;
$accordionRow = '';
?>


<div class="module accordion_group-wrapper module-<?php echo hls_get_panel_index();?>">


  
    <?php
    // check if the nested repeater field has rows of data
    if( have_rows('accordion') ):
    ?>
    <div class="accordion" id="accordion<?php echo $rowID;?>">
      <?php
	    while ( have_rows('accordion') ) : the_row();
	      $accordionRow++;
      ?>
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $rowID.$accordionRow;?>">
              <?php echo get_sub_field('title');?>
              <i class="icon icon-chevron-down"></i>
            </a>
          </div><!-- end .accordion-heading -->
          
          <div id="collapse<?php echo $rowID.$accordionRow;?>" class="accordion-body collapse out">
            <div class="accordion-inner">
              <?php echo get_sub_field('content');?>
            </div><!-- end .accordion-inner -->
          </div><!-- end #collapse<?php echo $rowID.$accordionRow;?>.accordion-body.collapse.in -->
        </div><!-- end .accordion-group -->
     
      <?php
			endwhile;
			?>
    </div><!-- end .accordion#accordion<?php echo $rowID;?> -->
    <?php
		endif;
		?>
  
  
  
  
  






</div><!-- .full_image_link-wrapper -->