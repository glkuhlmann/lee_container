<div class="band kitchen-sink">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php if( have_rows('locations','options') ): ?>
		<div id="map-canvas" class="acf-map">
			<?php while ( have_rows('locations','options') ) : the_row(); 
	
				$location = get_sub_field('location');
	
				?>
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
					<?php the_sub_field('location_display'); ?>
			</div>
		<?php endwhile; ?>
		</div>
	<?php endif; ?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .band -->