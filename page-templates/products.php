<?php
/*
Template Name: Products
*/
?>

<?php get_header(); ?>



<div id="intro" class="band kitchen-sink text-center mb-40">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<?php the_field( 'intro_content' ); ?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #intro -->








<div id="gallery" class="band kitchen-sink text-center mb-40">
	<div class="container fluid-sm fluid-md">
		<div class="row">
			<?php
			$images = get_field('products_gallery');
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
						<h4>Life of a bottle</h4>
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
						<h4>Video:<br/>Life of<br/>a bottle</h4>
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








<div id="variations" class="band kitchen-sink">
	<div class="container fluid-sm">
		<?php
		if( have_rows('product_options') ):
			$postcount = '';
		    while ( have_rows('product_options') ) : the_row();
				$postcount++;
				$evenOdd = ( ($postcount % 2) == 0 ) ? "even" : "odd";
				?>
				<div class="row section">
					<div class="col-sm-6 column <?php echo $evenOdd; ?>">
						<?php
						$image = get_sub_field('image');
						if( !empty($image) ):
						?>
							<img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php 
						endif;
						?>
					</div><!-- .col -->
					<div class="col-sm-6 column text-center">
						<h3 class="section-title"><?php the_sub_field( 'title' ); ?></h3>
						<?php the_sub_field( 'content' ); ?>
					</div><!-- .col -->
					<div class="col-sm-6 column <?php echo $evenOdd; ?> last">
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
</div><!-- #variations -->








<div id="our_story" class="cta band kitchen-sink text-center">
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
				<h2 class="section-title"><?php the_field( 'cta_title' ); ?></h2>
				<?php the_field( 'cta_content' ); ?>
				<a class="btn-outline" href="<?php the_field( 'cta_page' ); ?>">Request Quote</a>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #our_story -->






<?php
if( get_field( 'distributors_active' ) === true ){
?>

<div id="distributors" class="band kitchen-sink text-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="video-wrap">
					<h4><?php the_field( 'distributors_title' ); ?></h4>
					<?php the_field( 'distributors_content' ); ?>
					<a target="_blank" class="btn-primary" href="<?php the_field( 'distributors_link' ); ?>">For Distributors</a>
				</div><!-- .video-wrap -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #distributors -->

<?php
}
?>





<?php get_footer(); ?>





















