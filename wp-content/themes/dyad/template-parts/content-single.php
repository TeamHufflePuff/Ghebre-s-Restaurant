<?php
/**
 * Template part for displaying single posts.
 *
 * @package Dyad
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() && 'image' != get_post_format() ) : ?>
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
			<div class="entry-meta">
				<?php dyad_entry_meta(); ?>
			</div><!-- .entry-meta -->

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<div class="entry-posted">
				<?php dyad_posted_on(); ?>
			</div><!-- .entry-posted -->
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

		<?php dyad_post_footer(); ?>
	</div><!-- .entry-inner -->
</article><!-- #post-## -->

