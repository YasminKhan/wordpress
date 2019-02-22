<?php // SIDEBAR SECTION ?>
<?php if ( function_exists ('register_sidebar')) {  
	
    	register_sidebar( array(
		'name' => __( 'Front Right Sidebar', 'preference' ),
		'id' => 'sidebar-front',
		'description' => __( 'This is the right sidebar column found on the front page.', 'preference' ),
		'before_widget' => '<div id="%1$s" class="module %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Blog Left Sidebar', 'preference' ),
		'id' => 'sidebar-leftblog',
		'description' => __( 'This is the left sidebar column found on the blogs.', 'preference' ),
		'before_widget' => '<div id="%1$s" class="module %2$s">',
		'after_widget' => '</div><div class="modline-outer-pink"><div class="modline-inner-pink"></div></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );

	register_nav_menus( array(
		'news-menu'			=>	__( 'News Menu', 'preference' ),
		'community-menu'		=>	__( 'Community Menu', 'preference' ),
	) );	
} ?>
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