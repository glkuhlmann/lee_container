<h1>Careers Promo</h1>

<?php
echo '<pre>';print_r(get_field( 'careers_background_image', $post->ID ));echo '</pre>';
	
if( get_field( 'careers_background_image' ) === true ){
	$image = get_field( 'careers_background_image' );
?>


<div id="special_job" class="band kitchen-sink text-center">
	<div class="container fluid-sm fluid-md">
		<div class="row">
			<div class="col-sm-12">
				<div class="wrapper" style="background-image: url(<?php echo $image['url']; ?>);">
					<div class="overlay"></div>
					<div class="inner">
						<div class="initial">
							<div class="table">
								<div class="table-cell">
									<h2>Careers At Lee</h2>
								</div><!-- .table-cell -->
							</div><!-- .table -->
						</div><!-- .initial -->
						<div class="hover">
							<h2>We're Hiring:</h2>
							<h3><?php the_field( 'special_job_title', 'options' ); ?></h3>
							<?php the_field( 'special_job_content', 'options' ); ?>
							<a target="_blank" class="btn-outline" href="<?php the_field( 'special_job_content', 'options' ); ?>">Learn More</a>
						</div><!-- .hover -->
					</div><!-- .inner -->
				</div><!-- .wrapper -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #special_job -->



<?php
}
?>