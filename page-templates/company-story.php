<?php
/*
Template Name: Company Story
*/
?>

<?php get_header(); ?>


<div id="intro" class="band kitchen-sink">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 mb-20 mt-30">
				<?php
				$image = get_field( 'intro_image' );
				?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div><!-- .col -->
			<div class="col-sm-6">
				<h2 class="section-title"><?php the_field( 'intro_title' ); ?></h2>
				<?php the_field( 'intro_content' ); ?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #intro -->




<?php
if( get_field( 'vimeo_id' ) ){
?>

<div id="video" class="band kitchen-sink text-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="video-wrap">
					<?php
					$href = 'http://vimeo.com/'.get_field( 'vimeo_id' );
					?>
					<a class="wp-video-lightbox" rel="wp-video-lightbox" href="<?php echo $href;?>" title="">
						<i class="icon-play"></i>
					</a>
					<h4>Company<br/>Story<br/>Video</h4>
				</div><!-- .video-wrap -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #video -->

<?php
}
?>








<div id="timeline" class="band kitchen-sink">
	<div id="time_title" class="band text-center">
		<h2 class="section-title">Company Timeline</h2>
	</div><!-- .band -->
	<div class="container fluid-sm fluid-md">
		<div class="row">
			<div class="col-sm-12">
				<section id="cd-timeline">
					
					
					
					<?php
					if( have_rows('timeline') ):
						$i = '';
					    while ( have_rows('timeline') ) : the_row();
					    $i++;
					    $evenOdd = ( ($i % 2) == 0 ) ? "even" : "odd";
						?>
							<div class="cd-timeline-block <?php echo $evenOdd; ?>">
								<div class="cd-timeline-img">
									<i class="icon icon-calendar-detail"></i>
								</div> <!-- cd-timeline-img -->
						 
								<div class="cd-timeline-content">
									<div class="title">
										<h4><?php the_sub_field( 'title' ); ?></h4>
									</div><!-- .title -->
									<div class="time-content">
										<?php
										$image = get_sub_field( 'image' );
										if( $image ){
										?>
											<img src="<?php echo $image['sizes']['timeline']; ?>" alt="<?php echo $image['alt']; ?>" />
										<?php
										}
										?>
										
										<?php the_sub_field( 'content' ); ?>
									</div><!-- .time-content -->
									
									<div class="date">
										<?php the_sub_field( 'date_field' ); ?>
									</div><!-- .date -->
								</div> <!-- cd-timeline-content -->
							</div> <!-- cd-timeline-block -->
						<?php
					    endwhile;
					else :
					endif;
					?>
					
				</section>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #timeline -->







<?php get_footer(); ?>





















