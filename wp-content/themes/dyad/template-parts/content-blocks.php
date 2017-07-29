<?php
/**
 * Template part for displaying posts.
 *
 * @package Dyad
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'dyad-thumbnails' ); ?>
	<div class="entry-media" <?php if (has_post_thumbnail()) { echo 'style="background-image: url(' . esc_url( $thumb['0'] ) . ')"'; } ?>>
	</div>

	<div class="entry-inner">
		<div class="entry-inner-content">
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
		</div><!-- .entry-inner-content -->
	</div><!-- .entry-inner -->

	<a class="cover-link" href="<?php the_permalink(); ?>"></a>

</article><!-- #post-## -->
