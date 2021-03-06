<?php
/**
 * etchasketch functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package etchasketch
 */

if ( ! function_exists( 'etchasketch_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function etchasketch_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on etchasketch, use a find and replace
	 * to change 'etchasketch' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'etchasketch', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'etchasketch' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'etchasketch_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'etchasketch_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function etchasketch_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'etchasketch_content_width', 640 );
}
add_action( 'after_setup_theme', 'etchasketch_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function etchasketch_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'etchasketch' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'etchasketch_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function etchasketch_scripts() {
	wp_enqueue_style( 'etchasketch-style', get_stylesheet_uri() );

	wp_enqueue_script( 'etchasketch-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'etchasketch-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'etchasketch_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Custom Loops, Widgets and Post Types.
 */
require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/loops.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/taxonomies.php';

/**
 * WPAlchemy
 **/

include_once 'metaboxes/setup.php';

include_once 'metaboxes/tutorial-spec.php';

/* eof */


/**
 * Customize Login page
 */
// Change logo
function etch_login_logo() { ?>
   <style type="text/css">
       #login h1 a, .login h1 a {
				 	background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/EtchK-1.png);
			 		height:46px;
			 		width:160px;
			 		background-size: 100%;
         	padding-bottom: 30px;
         }
   </style>
 <?php }

// Change logo URL
function etch_loginURL() {
    return 'https://zhealthdocumentation.com';
}

// Change link title
function etch_loginTitle() {
	return 'Etch by ZHealth';
}

add_filter( 'login_headertitle', 'etch_loginTitle' );
add_filter( 'login_headerurl', 'etch_loginURL' );
add_action( 'login_enqueue_scripts', 'etch_login_logo' );
