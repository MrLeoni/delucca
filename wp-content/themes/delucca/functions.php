<?php
/**
 * Agência Delucca functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Agência_Delucca
 */

if ( ! function_exists( 'delucca_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function delucca_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Agência Delucca, use a find and replace
	 * to change 'delucca' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'delucca', get_template_directory() . '/languages' );

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
		'header' => esc_html__( 'Topo', 'delucca' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'delucca_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'delucca_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function delucca_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'delucca_content_width', 640 );
}
add_action( 'after_setup_theme', 'delucca_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function delucca_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'delucca' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Adicione widgets aqui', 'delucca' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'delucca_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function delucca_scripts() {
	
	// Styles
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	
	wp_enqueue_style( 'delucca-style', get_stylesheet_uri() , array('bootstrap', 'font-awesome'));
	
	wp_enqueue_style( 'bx-slider', get_template_directory_uri() . '/assets/css/jquery.bxslider.css');

	// Scripts
	wp_enqueue_script( 'delucca-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'delucca-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'bxsliderScript', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.1.2', true);
	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery', 'bxsliderScript'), '1.0.0', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'delucca_scripts' );

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
 * Register "Complementos" custom post type
 */
add_action("init", "complementosPostType");
function complementosPostType() {
	
	$labels = array( "name" => "Complementos", "singular_name" => "Complemento");
	
	$args = array(
		"labels" => $labels,
		"supports" => array("title", "editor", "thumbnail"),
		"menu_position" => 20,
		"menu_icon" => "dashicons-plus",
		"public"	=> true,
		"show_in_menu"	=> true,
	);
	
	register_post_type("complementos", $args);
}

/**
 * Register taxonomy "Categoria" for "Compementos" post type
 */
add_action("init", "categoriaCustomTaxonomy");
function categoriaCustomTaxonomy() {
	
	$labels = array( "name" => "Categorias", "singular_name" => "Categoria");
	
	$args = array(
		"labels"	=> $labels,
		"show_ui"	=> true,
		"show_in_menu"	=> true,
		"show_tagcloud"	=> false,
		"show_admin_column" => true,
		"hierarchical"	=> true,
		"capabilities"	=> array("manage_terms", "edit_terms", "delete_terms", "assign_terms"),
	);
	
	register_taxonomy("categorias", "complementos", $args);
}
