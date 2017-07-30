<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dyad
 */

?>
<html>
<body>

		<div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

				<div class="widget-area <?php echo esc_attr( dyad_widget_column_class( 'sidebar-1' ) ); ?>" role="complementary">
					<div class="grid-container">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div><!-- .grid-container -->
				</div><!-- #secondary -->

			<?php } ?>

			<div class="footer-bottom-info <?php if ( has_nav_menu( 'social' ) ) { echo 'has-social-menu'; } ?>">
				<?php
				if ( has_nav_menu( 'social' ) ) {
					wp_nav_menu( array(
						'theme_location'  => 'social',
						'container'       => 'div',
						'container_id'    => '',
						'container_class' => 'social-links',
						'menu_id'         => '',
						'menu_class'      => 'social-links-items',
						'depth'           => 1,
						'link_before'     => '<span class="screen-reader-text">',
						'link_after'      => '</span>',
						'fallback_cb'     => '',
					) );
				}
				?>

				
                        Follow us on social media:
                        <a href="https://www.facebook.com/GhebreRestaurant/" target="_blank"><img src="facebook.png" alt="facebook icon" /></a>
                        <a href="https://www.yelp.com/biz/ghebres-saint-paul" target="_blank"><img src="yelp.png" alt="yelp icon" /></a>
					
			
                
			</div><!-- .footer-bottom-info -->

		</footer><!-- #colophon -->

	</div><!-- #content -->


<?php wp_footer(); ?>

</body>
</html>
