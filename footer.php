<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package barlow
 */

?>

	</div><!-- #content -->

	</div><!-- #page -->

	<footer id="colophon" class="site-footer">
		<?php get_sidebar(); ?>

		<div class="footer-wrap">

			<?php
			if ( has_nav_menu( 'social' ) ) : ?>
				<nav id="social-navigation" class="social-links">
					<?php
						// Social links navigation menu.
						wp_nav_menu( array(
							'theme_location' => 'social',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php printf( esc_html__( '%1$s by %2$s', 'barlow' ), 'Powered', '<a href="https://wordpress.org/">WordPress</a>' ); ?>

				<span class="sep">&middot;</span>

				<?php printf( esc_html__( 'Built with %1$s', 'barlow' ), '<a href="https://refueled.net/">Barlow</a>' ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
