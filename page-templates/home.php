<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>



<div id="slideshow" class="band">
	<div class="container fluid-sm fluid-md">
		<div class="row">
			<div class="col-sm-12">
				<?php
				if( have_rows('slideshow') ):
				?>
					<ul id="home_slides">
					<?php
				    while ( have_rows('slideshow') ) : the_row();
						$image = get_sub_field( 'image' );
						?>
						<li>
							
							<div class="band image-wrapper">
								<img src="<?php echo $image['sizes']['slideshow']; ?>" alt="<?php echo $image['alt']; ?>" />
								<div class="overlay"></div>
							</div><!-- .image-wrapper -->
							<div class="tagline kitchen-sink">
								<h2><?php the_sub_field( 'title' ); ?></h2>
							</div><!-- .tagline -->
						</li>
					<?php
				    endwhile;
				    ?>
					</ul>
				<?php
				else :
				endif;
				?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #slideshow -->







<div id="home_pillars" class="band kitchen-sink text-center mb-40">
	<div class="container fluid-sm fluid-md">
		<div class="row">
			<?php
			if( have_rows('pillars') ):
			    while ( have_rows('pillars') ) : the_row();
					$image = get_sub_field( 'background_image' );
					?>
					<div class="conform col-sm-4">
						<div class="wrap" style="background-image: url(<?php echo $image['url']; ?>);">
							<div class="overlay"></div>
							<div class="initial">
								<div class="ii">
									<h3><?php the_sub_field( 'title' ); ?></h3>
								</div><!-- .ii -->
							</div><!-- .initial -->
							<div class="inner">
								<h3><?php the_sub_field( 'title' ); ?></h3>
								<?php the_sub_field( 'content' ); ?>
								<a class="btn-outline" href="<?php the_sub_field( 'link' ); ?>">Learn More</a>
							</div><!-- .inner -->
						</div><!-- .wrap -->
					</div><!-- .col -->
				<?php
			    endwhile;
			else :
			endif;
			?>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #home_pillars -->


<?php
if( get_field( 'vimeo_id' ) ){
?>

<div id="video" class="band kitchen-sink text-center mt-10">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				<?php
				$video_bg = get_field( 'video_thumbnail' );
				if( ! empty( $video_bg ) ){
				?>
					<div class="video-thumb">
						<h4>Introduction to Lee Container</h4>
						<div class="vt-inner" style="background-image: url(<?= $video_bg['url']; ?>);">
							<?php
							$href = 'http://vimeo.com/'.get_field( 'vimeo_id' );
							?>
							<a class="wp-video-lightbox" rel="wp-video-lightbox" href="<?php echo $href;?>" title="">
								<div class="overlay"></div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/video-shim.png" alt="Video shim"/>
								<i class="icon-play"></i>
							</a>
						</div><!-- .vt-inner -->
						
						
							
						
					</div><!-- .video-wrap -->
				<?php
				}else{
				?>
					<div class="video-wrap">
						<?php
						$href = 'http://vimeo.com/'.get_field( 'vimeo_id' );
						?>
						<a class="wp-video-lightbox" rel="wp-video-lightbox" href="<?php echo $href;?>" title="">
							<i class="icon-play"></i>
						</a>
						<h4>Video:<br/>Introduction to<br/>Lee Container</h4>
					</div><!-- .video-wrap -->
				<?php
				}
				?>
				
				
				
				
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #video -->

<?php
}
?>




<div id="our_story" class="band kitchen-sink text-center mb-50">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<?php
				$image = get_field( 'story_image' );
				?>
				<img class="mb-20" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div><!-- .col -->
			
			<div class="col-sm-8">
				<h2 class="section-title"><?php the_field( 'story_title' ); ?></h2>
				<?php the_field( 'story_content' ); ?>
				<a class="btn-outline" href="<?php the_field( 'story_link' ); ?>">Learn More</a>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #our_story -->





















<?php get_template_part( 'partials/special-job' ); ?>


<?php get_template_part( 'partials/featured-post' ); ?>





<?php get_footer(); ?>





















