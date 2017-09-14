


<div id="featured_post" class="band kitchen-sink">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<?php
				query_posts( 'posts_per_page=1&cat=4' );
				
				
 				
 				$args = array(
					'posts_per_page' => 1,
					'cat' => 4,
					'date_query' => array(
					     array(
					         'after'     => '60 days ago',  // or '-2 days'
					         'inclusive' => true,
					     ),
					 ),
				);
				$query = new WP_Query( $args );
				?>
				
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								
					<div class="wrap">
						<h2>Featured News</h2>
						<h3 class="post-title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						
						
						<div class="excerpt-wrap">
							<?php remove_empty_p( get_field( 'excerpt' ) ); ?>
						</div><!-- .excerpt-wrap -->
						
						<div class="btn-wrap">
							<a href="<?php the_permalink(); ?>" class="btn-outline">Read Article</a>
						</div><!-- .btn-wrap -->
					</div><!-- .wrap -->
					
				<?php endwhile; 
					
					wp_reset_query();
				?>
	
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .contaienr -->
</div><!-- #featured_post.band -->
