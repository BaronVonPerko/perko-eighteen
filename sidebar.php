<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Perko
 */

if ( ! is_active_sidebar( 'Perko-sidebar' ) ) :
	return;
endif;
?>

<?php if ( is_customize_preview() ) echo '<div id="Perko-sidebar-control"></div>'; ?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'Perko-sidebar' ); ?>
</aside><!-- #secondary -->
