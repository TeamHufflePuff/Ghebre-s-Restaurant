<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Dyad
 */

if ( ! function_exists( 'dyad_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function dyad_posted_on() {
			$byline = esc_html__( 'Posted by', 'dyad' ) . ' <span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';

		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

		echo '<div class="posted-info"><span class="byline">' . $byline . '</span> ' . esc_html_x( 'on', 'date published', 'dyad' ) . ' <span class="posted-on">' . $posted_on . '</span></div>'; // WPCS: XSS OK.

		edit_post_link( esc_html__( 'Edit', 'dyad' ), '<div class="edit-link">', '</div>' );

	}
endif;


if ( ! function_exists( 'dyad_entry_meta' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function dyad_entry_meta() {
		// Hide category and tag text for pages.
		if ( 'post' == get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'dyad' ) );
			if ( $categories_list && dyad_categorized_blog() ) {
				echo '<span class="cat-links">' . $categories_list . '</span>'; // WPCS: XSS OK.
			}
		}
	}
endif;


if ( ! function_exists( 'dyad_post_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function dyad_post_footer() {
		// Hide category and tag text for pages.
		if ( 'post' == get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', '' );
			if ( $tags_list ) {
				echo '<footer class="entry-footer"><div class="tags-links">' . $tags_list . '</div></footer>'; // WPCS: XSS OK.
			}
		}
	}
endif;


/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function dyad_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'dyad_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'dyad_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so dyad_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so dyad_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in dyad_categorized_blog.
 */
function dyad_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'dyad_categories' );
}
add_action( 'edit_category', 'dyad_category_transient_flusher' );
add_action( 'save_post',     'dyad_category_transient_flusher' );
