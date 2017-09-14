<?php get_header(); ?>


<div  class="band mt-50">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				
					<article id="post-<?php the_ID(); ?>" class="kitchen-sink mb-50" role="article">
					
					
					
					
					
						
						<div>
						<?php
						if(get_field('event_date',$post->ID)){
						?>
							<a class="feed_date" href="<?php the_permalink();?>">
								<?php
								if(get_field('event_start_date', $post->ID )){
					  				$eventDateStart = DateTime::createFromFormat('Ymd', get_field('event_start_date', $post->ID ));
									echo $eventFormatEndMonth = $eventDateStart->format('m');
									echo '|';
									echo $eventFormatEndNumber = $eventDateStart->format('j');
								  	echo ' - ';
								}
								?>
								
								<?php
								if(get_field('event_date', $post->ID )){
					  				$eventDateEnd = DateTime::createFromFormat('Ymd', get_field('event_date', $post->ID ));
									echo $eventFormatEndMonth = $eventDateEnd->format('m');
									echo '|';
									echo $eventFormatEndNumber = $eventDateEnd->format('j');
								}
								?>
							</a>
						<?php
						}
						?>
						</div>
					
					
						
						
						<?php
						if( get_field( 'location' ) ){
						?>
							<h5><em>Map Available</em></h5>
						<?php
						}
						?>
						
					
					
					
						<h1>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php the_title(); ?>
							</a>
						</h1>
						
						<?php
						if(get_field('excerpt')){
							echo preg_replace('~\s?<p>(\s|&nbsp;)+</p>\s?~', '', get_field('excerpt'));
						}
						?>
						
						<a class="btn-primary" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Learn More</a>
		
						
				
					</article> <!-- end article -->
					
					<hr/>
				
				<?php 
				endwhile;
				else:
				endif;
				?>
				
				
				<?php
				if (function_exists('wp_bootstrap_page_navi')) {
					wp_bootstrap_page_navi();
				}	
				?>	
				
				
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #blog_content -->





<?php get_footer(); ?>








