<?php
/**
 * Template part for search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package barlow
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>
	<?php barlow_post_thumbnail(); ?>
	
	<div class="content-wrap">
		<header class="entry-header">
			<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					barlow_posted_on();
					barlow_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php barlow_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .content-wrap -->
</article><!-- #post-<?php the_ID(); ?> -->
