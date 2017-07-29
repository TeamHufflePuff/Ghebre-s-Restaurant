<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Dyad
 */

if ( ! function_exists( 'dyad_jetpack' ) ) {
	function dyad_jetpack() {
		//Responsive videos
		add_theme_support( 'jetpack-responsive-videos' );

		//Site logo
		add_image_size( 'dyad-site-logo', 600, 300 );
		add_theme_support( 'site-logo', array(
			'header-text' => array(
				'site-title',
				'site-description',
			),
			'size' => 'dyad-site-logo',
		) );

		//Featured content
		add_theme_support( 'featured-content' , array(
			'featured_content_filter' => 'dyad_get_banner_posts',
			'max_posts' => 6,
			'post_types' => array( 'post' ),
		) );

		//Infinite scroll
		add_theme_support( 'infinite-scroll', array(
			'container' => 'posts',
			'footer' => 'primary',
			'footer_widgets' => array( 'sidebar-1'),
			'render' => 'dyad_infinite_scroll_render',
			'wrapper' => false,
			'posts_per_page' => 12,
		) );
	}
} // /dyad_jetpack
add_action( 'after_setup_theme', 'dyad_jetpack' );


/**
 * Custom render function for Infinite Scroll.
 */
function dyad_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', 'blocks' );
	}
} // end function dyad_infinite_scroll_render

/**
* Getter function for Featured Content.
* See http://jetpack.me/support/featured-content/
*/
function dyad_get_banner_posts() {
	return apply_filters( 'dyad_get_banner_posts', array() );
}

/**
 * Check for minimum number of featured posts
 */
function dyad_has_banner_posts( $minimum = 1 ) {

	$minimum = absint( $minimum );
	$featured_posts = apply_filters( 'dyad_get_banner_posts', array() );

	if ( ! is_array( $featured_posts ) ) {
		return false;
	}

	if ( $minimum > count( $featured_posts ) ) {
		return false;
	}

	return true;
}

