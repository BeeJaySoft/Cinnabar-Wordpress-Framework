<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package cinnabar
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area MyriadPro-Blog" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
