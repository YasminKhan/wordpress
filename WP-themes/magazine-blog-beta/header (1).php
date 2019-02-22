<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<!--[if lte IE 6]>
		<link href="<?php bloginfo('stylesheet_directory'); ?>/ie6.css" type="text/css" rel="stylesheet" />
		<![endif]-->
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<style type="text/css" media="screen"></style>

		<?php wp_head(); ?>
	</head>

	<body>
	
		<div id="banner"> <!-- displays an image named banner.jpg found in the "images"-directory -->
    				
    			</div>
    			
    	<div class="clear"></div>
    			
		<div id="header"> <!-- contains the navigation bar background image -->
				
				<ul id="navigationbar"> <!-- contains the navigation bar values -->
					
					<li id="homebutton"><a href="http://yasminshamsudin.com">Hem |</a></li> <!-- link to get back to homepage -->
					
					<li><?php _e('Om Mig '); ?> | <!-- here we keep all the pages -->
						<ul><?php wp_list_pages('title_li=&exclude=208&sort_column=menu_order&depth=1' ); ?></ul>
					</li>

					

					<li><?php _e('Ämnen '); ?> | <!-- here we have all blog categories -->
						<ul><?php wp_list_categories('title_li=&exclude=1'); ?></ul>
					</li>
					
					<li><?php get_search_form(); ?> <!-- to search the site, use this search form --> </li>

				</ul>
				
    	</div>	
    	
    	
