<?php get_header(); ?>



<div class="container">
	<div class="row">
		<div class="col-sm-12 kitchen-sink">
			<?php
			if( get_field( 'page_title' ) ){
			?>
				<h1 class="page-title"><?php echo get_field( 'page_title' ); ?></h1>
			<?php
			}else{
				the_title( '<h1 class="page-title">', '</h1>' );
			}
			?>
			<h5 class="date"><?php echo get_the_date( get_option('date_format') ); ?></h5>
			
			
			
			<?php while ( have_posts() ) : the_post(); ?>
				
				
				<?php 
				if ( has_post_thumbnail() ) {
				?>
					<div class="thumb-wrap">
						<?php the_post_thumbnail('post-thumb'); ?>
					</div><!-- .thumb-wrap -->
				
				<?php
				}
				?>
				
				<?php the_content(); ?>
				
				
			<?php endwhile; ?>
			
			
			
			<div class="band mt-40">
				<?php previous_post_link( '%link', 'Previous Post' ); ?> 
				<?php next_post_link( '%link', 'Next Post' ); ?> 
			</div><!-- .band -->
			
		</div>
	</div><!-- .row -->
</div><!-- .container -->




<?php get_footer(); ?>