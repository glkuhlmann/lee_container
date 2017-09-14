<?php
/*
Template Name: Careers
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





<div id="" class="band kitchen-sink text-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="section-title">Our Locations</h2>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- # -->

<?php get_template_part( 'partials/locations-map' ); ?>




<div id="location_list" class="band kitchen-sink">
	<div class="container">
		<?php
		if( have_rows( 'locations', 'options' ) ):
			$i = '';
		    while ( have_rows( 'locations', 'options' ) ) : the_row();
		    $i++;
			?>
				<div class="row">
					<div class="col-sm-4">
						<?php
						$image = get_sub_field('main_image');
						?>
						<div class="swipebox-gallery-item">
						<a href="<?php echo $image['url'];?>" rel="lightbox[gallery-<?php echo $i;?>]" class="gallery-photo swipebox" title="<?php echo $image['title']; ?>">
			  				<img class="photoImage" src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"/>
			  				<div class="overlay blue">
			    				<div class="inner">
			      				<div class="cell">
			        				<p>GALLERY</p>
			      				</div><!-- end .cell -->
			    				</div><!-- end .inner -->
			  				</div><!-- end .overlay -->
			  			</a>
						</div>
					</div><!-- .col -->
					
					<div class="col-sm-8">
						<h3 class="location-title"><?php the_sub_field( 'title' ); ?></h3>
						<?php the_sub_field( 'content' ); ?>
						
						<?php
						if( have_rows( 'always_looking_for' ) ):
						?>
							<h6 class="always-looking">Always looking for:</h6>
							<ul>
							<?php
						    while ( have_rows( 'always_looking_for' ) ) : the_row();
							?>
								<li>
									<?php the_sub_field( 'position' ); ?>
								</li>
							<?php
						    endwhile;
						    ?>
							</ul>
						<?php
						else :
						endif;
						?>
						
						<?php if( get_sub_field( 'link' ) ){
						?>
							<a target="_blank" class="btn-outline" href="<?php echo get_sub_field( 'link' ); ?>">Apply Now</a>
						<?php
						}
						?>
						
					</div><!-- .col -->
					
					<div class="col-sm-12">
						<hr/>
					</div><!-- .col -->
				</div><!-- .row -->
				
				<div class="hide-gallery">
				<?php 
				$images = get_sub_field('image_gallery');
				
				if( $images ): ?>
			        <?php foreach( $images as $image ): ?>
		                <a href="<?php echo $image['url'];?>" rel="lightbox[gallery-<?php echo $i;?>]" class="gallery-photo swipebox" title="<?php echo $image['title']; ?>">
		                     
		                </a>
			        <?php endforeach; ?>
				<?php endif; ?>
				</div><!-- .hide-gallery -->
				
			<?php
		    endwhile;
		else :
		endif;
		?>
	</div><!-- .container -->
</div><!-- # -->




<?php get_template_part( 'partials/special-job' ); ?>






<?php get_template_part( 'partials/featured-post' ); ?>




<?php get_footer(); ?>





















