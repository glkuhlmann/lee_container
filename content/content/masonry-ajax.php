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

<div class="masonry-item">
	<div class="inner">
		<?php
		if( empty( $no_thumb ) ){
		?>
			<a href="<?php the_permalink();?>">
				<div class="photo_bg" style="background-image:url(<?php echo $thumb_url;?>);"></div>
			</a>
			
			<figure class="article-preview-image">
				<a class="photoLink" href="<?php the_permalink();?>">
					<?php the_post_thumbnail('url'); ?>
					<div class="overlay"></div>
				</a>
			</figure>
		<?php
		}
		?>
		
		
		<div class="post_excerpt <?php echo $no_thumb; ?>">
			
			<h1 class="post-title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>
			
			<h5 class="date"><?php echo get_the_date( get_option('date_format') ); ?></h5>
			
			<?php remove_empty_p( get_field( 'excerpt' ) ); ?>
			
			<a href="<?php the_permalink(); ?>" class="read_more">Read More</a>
			
		</div><!-- end .post_excerpt -->
		
	</div><!-- end .inner -->
</div><!-- end .masonry-item -->




