<?php
/**
 * Estudio de Vozes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Estudio_de_Vozes
 */

if ( ! function_exists( 'estudiodevozes_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function estudiodevozes_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Estudio de Vozes, use a find and replace
		 * to change 'estudiodevozes' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'estudiodevozes', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'estudiodevozes' ),
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
		add_theme_support( 'custom-background', apply_filters( 'estudiodevozes_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'estudiodevozes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function estudiodevozes_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'estudiodevozes_content_width', 640 );
}
add_action( 'after_setup_theme', 'estudiodevozes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function estudiodevozes_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'estudiodevozes' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'estudiodevozes' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'estudiodevozes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function estudiodevozes_scripts() {

        // Plugins
	wp_enqueue_style('plugin-css', get_template_directory_uri() . '/css/plugins-css.css');
	// revoluation
	wp_enqueue_style('revolution', get_template_directory_uri() . '/revolution/css/settings.css');
	// Typography
	wp_enqueue_style('typography', get_template_directory_uri() . '/css/typography.css');
	// shortcodes
	wp_enqueue_style('shortcodes', get_template_directory_uri() . '/css/shortcodes/shortcodes.css');
	// responsive
	wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
       //style
	wp_enqueue_style( 'estudiodevozes-style', get_stylesheet_uri() );
       //skin
       wp_enqueue_style('skin', get_template_directory_uri() . '/css/skins/skin-green.css');

        // jquery
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array('jquery'), '3.4.1', true);
	//plugins-jquery
	wp_enqueue_script('plugin-jquery', get_template_directory_uri() . '/js/plugins-jquery.js', array('jquery'), '20151215', true);
	//REVOLUTION JS FILES
	wp_enqueue_script('themepunch-tools', get_template_directory_uri() . '/revolution/js/jquery.themepunch.tools.min.js', array('jquery'), '20151215', true);
	wp_enqueue_script('themepunch-revolution', get_template_directory_uri() . '/revolution/js/jquery.themepunch.revolution.min.js', array('jquery'), '20151215', true);
	//SLIDER REVOLUTION 5.0 EXTENSIONS
	wp_enqueue_script('actions', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.actions.min.js', array(), '20151215', true);
	wp_enqueue_script('carousel', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.carousel.min.js', array(), '20151215', true);
	wp_enqueue_script('kenburn', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.kenburn.min.js', array(), '20151215', true);
	wp_enqueue_script('layeranimation', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.layeranimation.min.js', array(), '20151215', true);
	wp_enqueue_script('migration', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.migration.min.js', array(), '20151215', true);
	wp_enqueue_script('navigation', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.navigation.min.js', array(), '20151215', true);
        wp_enqueue_script('parallax', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.parallax.min.js', array(), '20151215', true);
        wp_enqueue_script('slideanims', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.slideanims.min.js', array(), '20151215', true);
        wp_enqueue_script('video', get_template_directory_uri() . '/revolution/js/extensions/revolution.extension.video.min.js', array(), '20151215', true);
        // revolution custom
        wp_enqueue_script('revolution-custom', get_template_directory_uri() . '/revolution/js/revolution-custom.js', array(), '20151215', true);
        //custom
        wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true);




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'estudiodevozes_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

