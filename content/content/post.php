<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];


if ( has_post_thumbnail() ){
	$no_thumb = '';
}else{
	$no_thumb = 'no-thumb';
}
?>

<div class="band">
	<div class="container">
		<div class="row">
			
				<?php
				if( empty( $no_thumb ) ){
				?>
					<div class="col-sm-3">
						<a class="post-thumb" href="<?php the_permalink();?>">
							<?php the_post_thumbnail('url'); ?>
						</a>
					</div><!-- .col -->
					<div class="col-sm-9">
				<?php
				}else{
				?>
					<div class="col-sm-12">
				<?php
				}
				?>
			
			
			
				<h1 class="post-title">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h1>
				
				<h6 class="date"><?php echo get_the_date( get_option('date_format') ); ?></h6>
				
				<?php remove_empty_p( get_field( 'excerpt' ) ); ?>
				
				<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
			</div><!-- .col -->
			
			<div class="col-sm-12">
				<hr/>
			</div><!-- .col -->
		
		</div><!-- .row -->
	</div><!-- end .container -->
</div><!-- end .band -->




