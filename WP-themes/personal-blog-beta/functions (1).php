<?php if ( function_exists ('register_sidebar')) { 
    register_sidebar ('topleft'); 
    register_sidebar ('top'); 
    register_sidebar ('left');
    register_sidebar ('bottomleft'); 
    register_sidebar ('left6'); 
    register_sidebar ('left1'); 
    register_sidebar ('left4'); 
    register_sidebar ('left2'); 
} ?>
<?php if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menus( array(
        'main' => 'Huvudmeny',
        'footer' => 'Sidfotsmeny',) );
} ?>
<?php add_theme_support( 'menus' ); ?>
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
    $first_img = "/images/default.jpg";
  }
  return $first_img;
} ?>