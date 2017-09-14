<div id="masonry_wrapper" class="band">
	<?php 
	if (have_posts()) : 
		while (have_posts()) : the_post();
		
			get_template_part( 'content/content/masonry-ajax' );
		
		endwhile;
	endif;
	?>
</div><!-- #masonry_wrapper -->



<div id="masonry_counts" class="band">
	<?php
	if($wp_query->found_posts < get_option('posts_per_page') && (!get_query_var('paged') || get_query_var('paged') < 2)) {
	?>
		<h1 id="no_more" class="">More Posts<br/><span>Coming Soon</span></h1>
	<?php
	}else{
	?>
		<a id="load_more" class="" href="#">Load More Stories</a>
		<h1 id="no_more" class="hidden">More Posts<br/><span>Coming Soon</span></h1>
	<?php
	}
	?>
</div><!-- #masonry_counts -->






<?php
//get the number of total posts and posts per page in order to grab it in js.
?>

<?php $published_posts = wp_count_posts()->publish;?>
<div id="posts_count" data-count="<?php echo $published_posts;?>"></div>
<div id="posts_per_page" data-count="<?php echo get_option('posts_per_page');?>"></div>