<?php
/*
Template Name: About
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




<div id="about_pillars" class="band kitchen-sink">
	<div class="container fluid-sm">
		<?php
		if( have_rows('pillars') ):
			$postcount = '';
		    while ( have_rows('pillars') ) : the_row();
				$postcount++;
				$evenOdd = ( ($postcount % 2) == 0 ) ? "even" : "odd";
				?>
				<div class="row section">
					<div class="col-sm-4 column <?php echo $evenOdd; ?>">
						<?php
						$image = get_sub_field('image');
						if( !empty($image) ):
						?>
							<img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php 
						endif;
						?>
					</div><!-- .col -->
					<div class="col-sm-8 column">
						<h3 class="section-title"><?php the_sub_field( 'title' ); ?></h3>
						<?php the_sub_field( 'content' ); ?>
						<?php
						$link = get_sub_field( 'link' );
						if( ! empty( $link ) ){
						?>
							<a class="btn-outline" href="<?php get_sub_field( 'link' ); ?>">Learn More</a>
						<?php
						}
						?>
						
					</div><!-- .col -->
					<div class="col-sm-4 column <?php echo $evenOdd; ?> last">
						<?php
						$image = get_sub_field('image');
						if( !empty($image) ):
						?>
							<img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php 
						endif;
						?>
					</div><!-- .col -->
				</div><!-- .row -->
			<?php
		    endwhile;
		else :
		endif;
		?>
	</div><!-- .container -->
</div><!-- #about_pillars -->






<div id="about_locations" class="band kitchen-sink text-center mt-40">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h2 class="section-title"><?php the_field( 'locations_title' ); ?></h2>
				<?php the_field( 'locations_content' ); ?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #intro -->




<?php get_template_part( 'partials/locations-map' ); ?>




<?php get_template_part( 'partials/featured-post' ); ?>





















<?php get_footer(); ?>