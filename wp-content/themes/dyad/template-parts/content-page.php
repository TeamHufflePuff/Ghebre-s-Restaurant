<?php
/**
 * Template part for displaying pages.
 *
 * @package Dyad
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<?php
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'dyad-featured-image' );
		$thumb2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'dyad-featured-image-horz' );
		?>

		<div class="entry-media" style="background-image: url(<?php echo esc_url( $thumb['0'] ); ?>)">
			<div class="entry-media-thumb" style="background-image: url(<?php echo esc_url( $thumb2['0'] ); ?>); "></div>
		</div><!-- .entry-media -->
	<?php endif; ?>

	<div class="entry-inner">

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php edit_post_link( esc_html__( 'Edit', 'dyad' ), '<div class="edit-link">', '</div>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dyad' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

	</div><!-- .entry-inner -->
</article><!-- #post-## -->

