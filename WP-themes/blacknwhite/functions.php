<?php // MENU SECTION ?>
<?php add_theme_support( 'menus' ); ?>
<?php if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menus( array(
        'main' => 'Huvudmeny',
        'footer' => 'Sidfotsmeny',) );
} ?>
<?php // SIDEBAR SECTION ?>
<?php if ( function_exists ('register_sidebar')) {  
    register_sidebar (); 
} ?>
<?php // CUSTOM CODE SECTION ?>
<?php // Add support for a variety of post formats ?>
<?php	add_theme_support( 'post-formats', array( 'notes', 'link', 'products', 'updates', 'reference', 'image' ) ); ?>
<?php add_custom_background(); ?>
<?php function new_excerpt_length($length) {
	return 45;
	}
	add_filter('excerpt_length', 'new_excerpt_length');
?>
<?php function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/wp-content/themes/blacknwhite/images/nopic.png";
  }
  return $first_img;
} ?>