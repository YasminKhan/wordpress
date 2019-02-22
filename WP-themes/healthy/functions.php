<?php register_sidebar ( array('name' => 'Right Sidebar',) ); ?>
<?php register_sidebar ( array('name' => 'Leftmost Footer',) ); ?>
<?php register_sidebar ( array('name' => 'Inner-Left Footer',) );?>
<?php register_sidebar ( array('name' => 'Inner-Right Footer',) );?>
<?php register_sidebar ( array('name' => 'Rightmost Footer',) );?>
<?php if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menus( array(
        'main' => 'Huvudmeny',) );
} ?>
<?php add_theme_support( 'menus' ); ?>
<?php function new_excerpt_length($length) {
	return 35;
	}
	add_filter('excerpt_length', 'new_excerpt_length');
?>
<?php function new_excerpt_more($more) {
	return '<a href="'. get_permalink($post->ID) . '">' . ' [Read full article]' . '</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
?>
<?php function catch_first_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
  if(empty($first_img)){ //Defines a default image
			$category = get_the_category();
			$currentcat = $category[0]->cat_ID;
			if (($currentcat = 34)){
    		$first_img = "wp-content/themes/healthy/images/default-34.jpg";}
    		else {$first_img = "wp-content/themes/healthy/images/default.jpg";}
  			}
  return $first_img;
} ?>
<?php function add_googleplusone() {
echo '<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>';
}
add_action('wp_footer', 'add_googleplusone');?>