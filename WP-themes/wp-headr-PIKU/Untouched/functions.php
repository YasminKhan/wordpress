<?php
/**
 * wpheadr functions and definitions
 *
 * @package wpheadr
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'wpheadr_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function wpheadr_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on wpheadr, use a find and replace
	 * to change 'wpheadr' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wpheadr', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 280, 136, true );
	add_image_size( 'wpheadr-page-feature', 1230, 500, true ); //(cropped)
	add_image_size( 'wpheadr-post-feature', 940, 320, true ); //(cropped)
	add_image_size( 'wpheadr-post-standard', 940, 500, true ); //(cropped)

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wpheadr' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

}
endif; // wpheadr_setup
add_action( 'after_setup_theme', 'wpheadr_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function wpheadr_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wpheadr' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'wpheadr_widgets_init' );



/**
 * Enqueue scripts and styles
 */
function wpheadr_scripts() {
	global $wp_styles;
	// Bump this when changes are made to bust cache
    $version = '1.0.1';
	// CSS Scripts
    wp_register_style( 'wpheadr-fonts', '//fonts.googleapis.com/css?family=Ubuntu:400', array() );
	wp_enqueue_style( 'wpheadr-fonts' );
		
	wp_enqueue_style('wpheadr-style', get_template_directory_uri().'/css/style.css', false ,$version, 'all' );
	wp_enqueue_style('wpheadr-bootstrap', get_template_directory_uri().'/css/app.css', false ,$version, 'all' );
    wp_enqueue_style('wpheadr-responsive', get_template_directory_uri().'/css/app-responsive.css', false ,$version, 'all' );
	wp_enqueue_style('wpheadr-custom', get_template_directory_uri().'/css/custom.css', false ,$version, 'all' );
	
	if ( is_front_page() ) :
	wp_enqueue_style('banner-style', get_template_directory_uri().'/css/headr.css', false ,$version, 'all' );
	wp_enqueue_style( 'wpheadr-carousel', get_template_directory_uri() . '/css/carousel.css', false ,$version, 'all' );
	endif;
	
	// Load style.css from child theme
    if (is_child_theme()) {
      wp_enqueue_style('wpheadr_child', get_stylesheet_uri(), false, $version, null);
    }
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    	
	wp_enqueue_script('bootstrap.min.js', get_template_directory_uri().'/js/app.js', array('jquery'),$version, true );
	
	wp_enqueue_script( 'wpheadr-bootstrapnav', get_template_directory_uri() . '/js/twitter-bootstrap-hover-dropdown.js', array(), $version, true );
	
	if ( is_front_page() ) :
	wp_enqueue_script( 'bootstrap-carousel', get_template_directory_uri() . '/js/bootstrap-carousel2.3.1.js', array( 'jquery' ), $version, true );
	endif;
    
	wp_enqueue_script('bootstrap.min.js', get_template_directory_uri().'/js/modernizr.custom.79639.js', array('jquery'),$version, false );
	
	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'wpheadr-ie', get_template_directory_uri() . '/css/ie.css', array( 'wpheadr-style' ), $version );
	wp_style_add_data( 'wpheadr-ie', 'conditional', 'lt IE 8' );
	
}
add_action( 'wp_enqueue_scripts', 'wpheadr_scripts' );


if ( !wp_is_mobile() ) {
  require get_template_directory() . '/inc/nav-menu-walker.php';
  } else {
  require get_template_directory() . '/inc/nav-mobile-walker.php';
}

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//require get_template_directory() . '/inc/jetpack.php';

// Lets do a separate excerpt length for the slider
function wpheadr_slider_excerpt () {
	$theContent = trim(strip_tags(get_the_content()));
		$output = str_replace( '"', '', $theContent);
		$output = str_replace( '\r\n', ' ', $output);
		$output = str_replace( '\n', ' ', $output);
			if (get_theme_mod( 'wpheadr_slider_excerpt' )) :
			$limit = get_theme_mod( 'wpheadr_slider_excerpt' );
			else : 
			$limit = '20';
			endif;
			$content = explode(' ', $output, $limit);
			array_pop($content);
		$content = implode(" ",$content)."  ";
	return strip_tags($content, ' ');
}