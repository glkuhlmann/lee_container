<?php
$image = get_field( 'banner' );
if( ! empty( $image ) ){
	$image = 'style="background-image: url('.$image['url'].');"';
}else {
	$image = '';
}
?>


<div id="page_title" class="band" <?php echo $image; ?>>
	<div class="pt-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php
				if(is_search()){
				?>
				  <h1 id="page_display_title"><span><?php _e("Search Results for","wpbootstrap"); ?>: <?php echo esc_attr(get_search_query()); ?></span></h1>
				<?php
				}elseif (is_category()) { 
				?>
					<h1 id="page_display_title">
						<span><?php _e("Posts Categorized:", "wpbootstrap"); ?> <?php single_cat_title(); ?></span>
					</h1>
				<?php } elseif (is_tag()) { ?> 
					<h1 id="page_display_title">
						<span><?php _e("Posts Tagged:", "wpbootstrap"); ?> <?php single_tag_title(); ?></span>
					</h1>
				<?php } elseif (is_author()) { ?>
					<h1 id="page_display_title">
						<span><?php _e("Posts By:", "wpbootstrap"); ?> <?php get_the_author_meta('display_name'); ?></span>
					</h1>
				<?php } elseif (is_day()) { ?>
					<h1 id="page_display_title">
						<span><?php _e("Daily Archives:", "wpbootstrap"); ?> <?php the_time('l, F j, Y'); ?></span>
					</h1>
				<?php } elseif (is_month()) { ?>
				    <h1 id="page_display_title">
				    	<span><?php _e("Monthly Archives:", "wpbootstrap"); ?> <?php the_time('F Y'); ?></span>
				    </h1>
				<?php } elseif (is_year()) { ?>
				    <h1 id="page_display_title">
				    	<span><?php _e("Yearly Archives:", "wpbootstrap"); ?> <?php the_time('Y'); ?></span>
				    </h1>
				<?php }elseif(is_post_type_archive()) {
					    ?>
					    <h1 id="page_display_title"><span><?php post_type_archive_title(); ?></span></h1>
					    <?php
					    }elseif(is_home()){
				  	  ?>
				  	  <h1 id="page_display_title"><span>News</span></h1>
				  	  <?php  
					    }elseif(is_404()){
				?>
				  <h1 class="page_display_title"><span>Error 404</span></h1>
				<?php
				}elseif( get_post_type() === 'post' ){
				?>
				  <h1 class="page_display_title"><span>News</span></h1>
				<?php
				}else{
				?>
				  <h1 class="page_display_title"><span><?php the_title();?></span></h1>
				<?php
				}
				?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
	</div><!-- .pt-wrap -->
</div><!-- #page_title -->