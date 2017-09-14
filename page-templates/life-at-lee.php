<?php
/*
Template Name: Life at Lee
*/
?>

<?php get_header(); ?>



<div id="intro" class="band kitchen-sink text-center mb-40">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h2 class="section-title"><?php the_field( 'intro_title' ); ?></h2>
				<?php the_field( 'intro_content' ); ?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #intro -->






<div id="gallery" class="band kitchen-sink text-center mb-40">
	<div class="container fluid-sm fluid-md">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="section-title mb-30"><?php the_field( 'workplace_title' ); ?></h2>
			</div><!-- .col -->
			<?php
			$images = get_field('workplace_gallery');
			if( $images ): ?>
			    <?php foreach( $images as $image ): ?>
			    	<div class="swipebox-gallery-item">
			        	
			            
			            
			            
			            
			            
			            <a href="<?php echo $image['url'];?>" rel="lightbox[gallery-<?php echo $i;?>]" class="gallery-photo swipebox" data-title="<?php echo $image['title']; ?>">
			  				<img class="photoImage" src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"/>
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
	</div><!-- .container -->
</div><!-- #gallery -->







					<?php
					if( have_rows('employee_testimonials') ):
					?>
<div id="employees" class="band kitchen-sink text-center mb-40">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="section-title mb-40">Employee Testimonials</h2>
				<div class="row">
						<?php
					    while ( have_rows('employee_testimonials') ) : the_row();
						?>
							<div class="employee-testimonial col-sm-6">
								<?php
								$image = get_sub_field( 'image' );
								?>
								<img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" />
								<div class="endorsement">
									<?php the_sub_field( 'testimonial' ); ?>
								</div><!-- .endorsement -->
								
								<h5><?php the_sub_field( 'name' ); ?></h5>
								
								<?php
								if( get_sub_field( 'position' ) ) {
								?>
									<h6><?php echo get_sub_field( 'position' ); ?></h6>
								<?php
								}
								?>
							</div><!-- .col -->
						<?php
					    endwhile;
					    ?>
				</div><!-- .row -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #employees -->
					<?php
					else :
					endif;
					?>
				





<?php
$image = get_field( 'careers_background_image' );
	
if( $image ){
?>

<div id="special_job" class="careers band kitchen-sink text-center">
	<div class="container fluid-sm fluid-md">
		<div class="row">
			<div class="col-sm-12">
				<div class="wrapper" style="background-image: url(<?php echo $image['url']; ?>);">
					<div class="overlay"></div>
					<div class="inner">
						<div class="initial">
							<div class="table">
								<div class="table-cell">
									<h2>Careers At Lee</h2>
								</div><!-- .table-cell -->
							</div><!-- .table -->
						</div><!-- .initial -->
						<div class="hover">
							<h2>Careers At Lee</h2>
							<a class="btn-outline" href="/careers">Learn More</a>
						</div><!-- .hover -->
					</div><!-- .inner -->
				</div><!-- .wrapper -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #special_job -->



<?php
}
?>


<?php get_template_part( 'partials/featured-post' ); ?>



<?php get_footer(); ?>





















