<div id="" class="band">
	<?php 
	if (have_posts()) : 
		while (have_posts()) : the_post();
		
			get_template_part( 'content/content/post' );
		
		endwhile;
	endif;
	?>
</div><!-- #masonry_wrapper -->


