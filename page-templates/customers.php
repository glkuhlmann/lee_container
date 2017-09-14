<?php
/*
Template Name: Customers
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





<div id="industries" class="band kitchen-sink">
	<div class="container fluid-sm">
		<?php
		if( have_rows('industries') ):
			$postcount = '';
		    while ( have_rows('industries') ) : the_row();
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
</div><!-- #industries -->





<div id="our_customers" class="band kitchen-sink text-center mb-40">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<?php
				if( get_field( 'customers_title' ) ){
				?>
					<h2 class="section-title"><?php echo get_field( 'customers_title' ); ?></h2>
				<?php
				}
				?>
				
				<?php
				if( get_field( 'customers_content' ) ){
					echo get_field( 'customers_content' );
				}
				?>
			</div>
			<div class="col-sm-12">
				<?php
				if( have_rows('customer_list') ):
				    while ( have_rows('customer_list') ) : the_row();
						$image = get_sub_field( 'image' );
						?>
						<div class="logo-wrap conform col-sm-3">
							<div class="inner">
								<?php
								if( get_sub_field( 'link' ) ){
								?>
									<a target="_blank" href="<?php echo get_sub_field( 'link' ); ?>">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									</a>
								<?php
								}else{
								?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php
								}
								?>
							</div><!-- .inner -->
						</div><!-- .logo-wrap -->
					<?php
				    endwhile;
				else :
				endif;
				?>
				
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #our_customers -->








		<?php
		if( have_rows('testimonials') ):
		?>
<div id="testimonials_band" class="band slide-wrapper">
	<img class="quote-top" src="<?php echo get_template_directory_uri(); ?>/images/quote-top.svg" alt="quote"/>
	<img class="quote-bottom" src="<?php echo get_template_directory_uri(); ?>/images/quote-bottom.svg" alt="quote"/>
	<div class="container">
		<div class="row mb-20">
			<div class="col-sm-4">
				
			</div><!-- .col -->
			<div class="col-sm-8 kitchen-sink">
				<h3 class="section-title">Testimonials</h3>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
	<ul id="testimonials">
			<?php
		    while ( have_rows('testimonials') ) : the_row();
			?>
				<li>
			        <div class="container">
				        <div class="row kitchen-sink">
					        <?php
							if( get_sub_field('logo') ){
								$image = get_sub_field('logo');
								?>
								<div class="col-sm-4 image-wrap">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								</div><!-- .col -->
								<div class="col-sm-8">
							<?php
							}else{
							?>
								<div class="col-sm-12"
							<?php
							}
							?>
					        	<?php the_sub_field('content'); ?>
								<h5><?php the_sub_field('name'); ?></h5>
								<?php
								if( get_sub_field('title') ){
								?>
									<h6><?php echo get_sub_field('title'); ?></h6>
								<?php
								}
								?>
							</div><!-- .col -->
				        </div><!-- .row -->
			        </div><!-- .container -->
		        </li>
			<?php
		    endwhile;
		    ?>
		   </ul>
</div><!-- .slide-wrapper -->
	   <?php
		endif;
		?>
	





<?php get_template_part( 'partials/featured-post' ); ?>




<?php get_footer(); ?>





















