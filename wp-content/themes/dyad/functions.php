<?php
/**
 * dyad functions and definitions
 *
 * @package Dyad
 */

if ( ! function_exists( 'dyad_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dyad_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dyad, use a find and replace
		 * to change 'dyad' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'dyad', get_template_directory() . '/languages' );

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
		 * Register menus
		 */
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'dyad' ),
			'social'  => esc_html__( 'Social Links Menu', 'dyad' ),
		) );

		/*
		 * Add Post Format support
		 */
		add_theme_support( 'post-formats', array( 'image' ) );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		/* setting custom image size for thumbnails for dyad */
		add_image_size( 'dyad-banner', '1800', '720', true );
		add_image_size( 'dyad-thumbnails', '630', '840', true );
		add_image_size( 'dyad-featured-image', '960', '1280', true );
		add_image_size( 'dyad-featured-image-horz', '960', '640', true );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'gallery',
			'caption',
		) );

	}
endif; // dyad_setup
add_action( 'after_setup_theme', 'dyad_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dyad_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dyad_content_width', 1000 );
}
add_action( 'after_setup_theme', 'dyad_content_width', 0 );


/**
 * Replaces the excerpt "more" text by a link
 */
if ( ! function_exists( 'dyad_excerpt_continue_reading' ) ) {
	function dyad_excerpt_continue_reading() {
		return '... <div class="link-more"><a href="' . esc_url( get_permalink() ) . '">' . sprintf( esc_html__( 'Read More', 'dyad' ), '<span class="screen-reader-text"> "' . get_the_title() . '"</span>' ) . '</a></div>';
	}
} // /dyad_excerpt_continue_reading

add_filter( 'excerpt_more', 'dyad_excerpt_continue_reading' );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function dyad_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'dyad' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Displays in footer area.', 'dyad' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'dyad_widgets_init' );


/**
 * Counts the number of widgets in a specific sidebar
 *
 * @param   string  $id
 * @return  integer number of widgets in the sidebar
 */
function dyad_count_widgets( $id ) {
	$count = 0;
	$sidebars_widgets = wp_get_sidebars_widgets();

	if ( array_key_exists( $id, $sidebars_widgets ) ) {
		$count = ( int ) count( ( array ) $sidebars_widgets[ $id ] );
	}
	return $count;
}


/**
 * Widget column class helper
 *
 * @param   string  $id
 * @return  string  grid class
 */
function dyad_widget_column_class( $widget_id ) {
	$count = dyad_count_widgets( $widget_id );
	$class = '';
	if ( $count >= 4 ) {
		$class .= 'widgets-four';
	} elseif ( 3 == $count ) {
		$class .= 'widgets-three';
	} elseif ( 2 == $count ) {
		$class .= 'widgets-two';
	} else {
		$class .= 'widget-one';
	}
	return $class;
}

/**
 * Wrap avatars in div for easier styling
 */
function dyad_get_avatar( $avatar ) {
	if( ! is_admin() ) {
		$avatar = '<span class="avatar-container">' . $avatar . '</span>';
	}
	return $avatar;
}
add_filter( 'get_avatar', 'dyad_get_avatar', 10, 5 );


/**
 * Google Fonts
 */

function dyad_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Lato, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$lato = _x( 'on', 'Lato font: on or off', 'dyad' );

	/* Translators: If there are characters in your language that are not
	* supported by Noto Serif, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$noto_serif = _x( 'on', 'Noto Serif font: on or off', 'dyad' );

	if ( 'off' !== $lato || 'off' !== $noto_serif ) {
		$font_families = array();

		if ( 'off' !== $lato ) {
			$font_families[] = 'Lato:400,400italic,700,700italic';
		}

		if ( 'off' !== $noto_serif ) {
			$font_families[] = 'Noto Serif:400,400italic,700,700italic';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}


/**
 * Add Google Fonts, editor styles to WYSIWYG editor
 */
function dyad_editor_styles() {
	add_editor_style( array( 'editor-style.css', dyad_fonts_url() ) );
}
add_action( 'after_setup_theme', 'dyad_editor_styles' );


/**
 * Enqueue scripts and styles.
 */
function dyad_scripts() {

	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	wp_enqueue_style( 'dyad-fonts', dyad_fonts_url(), array(), null );

	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pk.js', array( 'jquery' ), '20151006', true );

	wp_enqueue_script( 'dyad-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'dyad-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( ( is_front_page() || is_home() ) && dyad_has_banner_posts( 2 ) ) {
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array(), '20140523', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'dyad-style', get_stylesheet_uri() );

	wp_enqueue_script( 'dyad-global', get_template_directory_uri() . '/js/global.js', array( 'jquery', 'masonry' ), '20151204', true );
}
add_action( 'wp_enqueue_scripts', 'dyad_scripts' );

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
 * Load plugin enhancement file to display admin notices.
 */
require get_template_directory() . '/inc/plugin-enhancements.php';