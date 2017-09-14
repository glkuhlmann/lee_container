<?php get_header(); ?>

<div class="band mt-50">
	<div class="container fluid-md">
		<div class="row kitchen-sink">
			<?php get_template_part( 'content/loop/post' ); ?>
			
			<div class="col-sm-12 text-center">
				<?php wp_bootstrap_page_navi(); // use the page navi function ?>
			</div><!-- .col -->
			
		</div><!-- end .row -->
	</div><!-- end .container -->
</div><!-- end .band -->




<?php get_footer(); ?>