<?php
/**
 * Template part for displaying the blog snippet content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Perko
 */
?>

<style>
    #post-<?=the_ID()?> .post-tile-image {
        background-image: url(<?php the_post_thumbnail_url() ?>);
        width: 100%;
        height: 100%;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
    }
</style>

<article id="post-<?= the_ID() ?>" <?php post_class( 'w-1/3 h-48 relative' ); ?>>

    <div class="post-tile-image absolute pin" style="z-index: -1;"></div>

    <header class="entry-header">
		<?php the_title(
			'<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',
			'</a></h2>'
		); ?>
    </header><!-- .entry-header -->

</article><!-- #post-## -->
