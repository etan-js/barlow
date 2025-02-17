<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package barlow
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside id="secondary" class="widget-area">
	<div class="widget-wrap">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- .widget-wrap -->
</aside><!-- #secondary -->
