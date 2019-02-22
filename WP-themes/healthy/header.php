<!DOCTYPE html>

	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<meta content="noindex,nofollow" name="robots">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link href="style.css" media="all" type="text/css" rel="stylesheet">
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>

	<body>
	
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

	<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>

	<div id="content">
	
		<header>
			<a href="/index.php" >
				<div id="banner">
					<?php bloginfo('name'); ?></a>
				</div>
			<div id="searchbar"><?php get_search_form(); ?></div>
		</header>
				
		<nav id="navbar"> <!-- contains the navigation bar values -->
			<ul>
				<li id="site"><?php _e('You are @ '); ?></li>
				<li><?php $cat_name= the_category(' '); ?></li>
				<li id="menu"><?php _e('Go to: '); ?></li>
				<li><?php wp_nav_menu(); ?></li>
				
			</ul>
		</nav>
		
		<div class="clear"></div>			
    	
    	
