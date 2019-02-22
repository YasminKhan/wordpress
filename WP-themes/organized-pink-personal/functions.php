<?php if ( function_exists ('register_sidebar')) { 
    register_sidebar ('left'); 
} ?>
<?php if ( function_exists ('register_sidebar')) { 
    register_sidebar ('right'); 
} ?>
<?php if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menus( array(
        'main' => 'Huvudmeny',
        'footer' => 'Sidfotsmeny',) );
} ?>
<?php function new_excerpt_length($length) {
	return 35;
}
add_filter('excerpt_length', 'new_excerpt_length');
?>