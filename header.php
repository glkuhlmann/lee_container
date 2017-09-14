<?php get_template_part( 'content/header/doctype' );?>
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="initial-scale=1.0,user-scalable=0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		<?php global $body_classes;?>
  		
		<?php wp_head(); ?>
		
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->
		
		<?php get_template_part( 'content/header/favicons' );?>
		
		
		
		
		
		
		


		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	
	<body <?php isset($class)?body_class($class):body_class("navigation-fixed"); ?> >
		
		<div id="back_to_top"></div>
		
		
		
		
				
		<?php get_template_part( 'content/header/nav/standard' ); ?>
		
		<div id="page_wrap" class="band">
		
		<?php 
		if( ! is_front_page() ){
			get_template_part( 'partials/page-title' );
		}
		?>
			
		
		<div id="content" class="band">
		
		
		
