<?php
/**
 * raymond-voyage functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package raymond-voyage
 */

if ( ! function_exists( 'raymond_voyage_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function raymond_voyage_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on raymond-voyage, use a find and replace
	 * to change 'raymond-voyage' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'raymond-voyage', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'raymond-voyage' ),
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
	add_theme_support( 'custom-background', apply_filters( 'raymond_voyage_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'raymond_voyage_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function raymond_voyage_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'raymond_voyage_content_width', 640 );
}
add_action( 'after_setup_theme', 'raymond_voyage_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function raymond_voyage_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'raymond-voyage' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'raymond-voyage' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'raymond_voyage_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function raymond_voyage_scripts() {
	wp_enqueue_style( 'raymond-voyage-style', get_stylesheet_uri() );

	wp_enqueue_script( 'raymond-voyage-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'raymond-voyage-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'raymond_voyage_scripts' );

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

/**************************************************************************
CUSTOM POST TYPE
**************************************************************************/

/**************************************************************************/
$labelsServices = array(
	'name' => "Forfaits",
	'singular_name' => "Forfaits",
	'add_new' => "Ajouter un forfait",
	'add_new_item' => "Ajouter un forfait",
	'edit_item' => "Modifier un forfait",
	'new_item' => "Nouveau forfait",
	'all_items' => "Tous les forfaits",
	'view_item' => "Voir le forfait",
	'search_items' => "Chercher un forfait",
	'not_found' =>  "Aucun forfait trouvé",
	'menu_name' => "Mes forfaits"
);

$argService = array(
	'labels' => $labelsServices,
	'public' => true,
	'has_archive' => true,
	'hierarchical' => true,
	'menu_position' => 20,
	'menu_icon' => 'dashicons-palmtree',
	'supports' => array('title', 'thumbnail', 'editor', 'revisions', 'page-attributes')
);

register_post_type('forfait', $argService);