<div class="site-banner-content banner-custom-header">

	<?php

	/**
	 * Media
	 */
	?>

	<div class="site-banner-media">
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'dyad-banner' ); ?>

		<div class="site-banner-thumbnail" title="<?php the_title_attribute(); ?>" <?php if ( has_post_thumbnail() ) { echo 'style="background-image: url(' . esc_url( $thumb[0] ) . ');"'; } ?>></div>
	</div>

	<?php

	/**
	 * Custom Header text
	 */
	$description = get_bloginfo( 'description', 'display' );

	if( 'image' != get_post_format() && ( '' != $description || is_customize_preview() ) ) { ?>
		<div class="site-banner-header banner-description">

			<h1 class="entry-title site-description">
				<?php echo $description; /* WPCS: xss ok. */ ?>
			</h1>

		</div><!-- .site-banner-header -->
	<?php } ?>
</div><!-- .site-banner-content -->
