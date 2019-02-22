<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 		
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
    <?php if ( get_theme_mod( 'wpheadr_header_banner_visibility' ) != 1 ) { ?>
        <?php if ( is_front_page() ) : ?>		
		    <div class="st-container"> 
                <?php get_template_part( 'headr-banner' ); ?>
            </div>
		<?php endif; ?>
    <?php } ?>
<div class="clearfix"></div>
<?php get_template_part( 'nav-top' ); ?>

<div class="container">
