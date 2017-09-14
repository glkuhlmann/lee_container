<?php //Old Body Clases: nav-fixed with-scroll ?>

<?php $body_classes = 'money'; ?>


<div id="nav_standard" class="nav-fixed with-scroll band">
	<div class="container fluid-sm fluid-md">
		<div class="row">
			<div class="col-sm-12 full-mobile">
				<div id="navBars"></div>
				<div id="logo">
					<?php 
				if(is_front_page()){ 
		        ?>
		          <a class="scrollLink" href="/#back_to_top">
		        <?php
		        }else{
		        ?>
		          <a class="scrollLink" href="/">
		        <?php
		        }
		        ?>
						<img class="logo-full" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo.svg" alt="<?php wp_title(); ?>"/>
						<img class="logo-small" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-white.svg" alt="<?php wp_title(); ?>"/>
					</a>
				</div><!-- end #logo -->
				<div class="mobile-wrapper">
					<?php wp_bootstrap_main_nav();?>
				</div><!-- end .mobile-wrapper -->
			</div><!-- end .col-sm-12 -->
		</div><!-- end .row -->
	</div><!-- end .container -->
</div><!-- end #nav_standard -->











