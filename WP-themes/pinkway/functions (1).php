<?php $args = array(
                    'height'        => 55,
                    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'custom-background' );
?>
<?php function new_excerpt_length($length) {
	return 60;
	}
	add_filter('excerpt_length', 'new_excerpt_length');
    
    function new_excerpt_more( $more ) {
        return ' ... [Läs hela artikeln]';
    }
    add_filter('excerpt_more', 'new_excerpt_more');
?>
<?php function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  return $first_img;
} ?>