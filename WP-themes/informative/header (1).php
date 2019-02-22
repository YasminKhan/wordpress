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

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20874173-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	</head>

	<body>
	
		<a href="http://mimi.yasminshamsudin.com" ><div id="banner"> <!-- displays an image named banner.jpg found in the "images"-directory -->
    				
    			</div></a>
    			
    			
		<div id="header"> <!-- contains the navigation bar background image -->
				
				<ul id="navigationbar"> <!-- contains the navigation bar values -->
					
					<li id="homebutton"><a href="http://mimi.yasminshamsudin.com">Hem</a></li> <!-- link to get back to homepage -->
					
					<li><?php wp_list_categories('title_li=&include=1,7,3,4&hide_empty=0'); ?></li>
					
					<li><?php get_search_form(); ?> <!-- to search the site, use this search form --> </li>

				</ul>
				
    	</div>	

		
