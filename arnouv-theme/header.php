<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<link rel="alternate" type="application/rss+xml" title="Flux RSS de <?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        
	<title><?php wp_title( '-', true, 'right' ); bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		  <![endif]-->

	<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="<?php bloginfo( 'wpurl' );?>">
						<img alt="<?php echo get_bloginfo( 'name' ); ?>" height="40" src="<?php bloginfo('template_directory'); ?>/img/brand-logo.png">
					</a>
					<a class="navbar-brand" href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<!-- <ul class="nav navbar-nav"> -->
						<!-- <li class="active"><a href="#">Accueil <span class="sr-only">(current)</span></a></li> -->
						<?php 
							wp_page_menu(array(
								'show_home' => 'Blog',
								'sort_column' => 'menu_order',
								'container' => 'ul',
								'before' => false,
								'after' => false,
								'menu_class' => 'nav navbar-nav'
							)); 
						?>
					<!-- </ul> -->
				</div>
			</div>
		</nav>
	</header>
	<div class="container">

		<div class="blog-header">
			<div class="blog-title">
				<h1><?php echo get_bloginfo( 'name' ); ?></h1>
			</div>
			<div class="lead blog-description">
				<p><?php echo get_bloginfo( 'description' ); ?></p>
			</div>
		</div>