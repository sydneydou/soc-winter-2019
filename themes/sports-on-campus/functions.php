<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sport_on_campus_theme
 */

if ( ! function_exists( 'sport_on_campus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function sport_on_campus_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // sport_on_campus_setup
add_action( 'after_setup_theme', 'sport_on_campus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function sport_on_campus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sport_on_campus_content_width', 640 );
}
add_action( 'after_setup_theme', 'sport_on_campus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sport_on_campus_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sport_on_campus_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function sport_on_campus_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'sport_on_campus_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function sport_on_campus_scripts() {
	wp_enqueue_style('font-awsome-cdn',"https://use.fontawesome.com/releases/v5.7.2/css/all.css",array(),'5.7.2');
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );
	wp_enqueue_script( 'red-starter-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );
	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );
	wp_enqueue_script( 'menu', get_template_directory_uri() . '/build/js/menu.min.js',array('jquery'), '20151215', true );
	wp_register_script ( 'flickityjs' , get_template_directory_uri() . '/build/js/flickity.pkgd.min.js', array( 'jquery' ), '1', true );
	wp_register_style ( 'flickitycss' , get_template_directory_uri() . '/flickity.css', '' , '', 'all' );
	wp_enqueue_script( 'flickityjs' );
	wp_enqueue_style( 'flickitycss' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sport_on_campus_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

function register_my_menu() {
	register_nav_menu('additional-menu',__( 'Additional Menu' ));
}
	add_action( 'init', 'register_my_menu' );


function register_another_menu() {
	register_nav_menu('desktop-menu',__( 'Desktop Menu' ));
}
	add_action( 'init', 'register_another_menu' );

	function register_additional_menu() {
		register_nav_menu('desktop-menu-two',__( 'Desktop Menu 2' ));
	}
		add_action( 'init', 'register_additional_menu' );

		function register_footer_menu() {
			register_nav_menu('footer-menu',__( 'Footer Menu' ));
		}
			add_action( 'init', 'register_footer_menu' );

function prefix_category_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	}
	return $title;
	}
add_filter( 'get_the_archive_title', 'prefix_category_title' );
