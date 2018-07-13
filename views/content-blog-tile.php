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
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
    }
</style>

<article id="post-<?= the_ID() ?>" <?php post_class( 'w-1/4 h-48 m-8 relative shadow-lg' ); ?>>

    <div class="post-tile-image absolute pin"></div>

    <header class="entry-header absolute pin-b w-full" style="background-color: rgba(40,40,40,0.7)">
		<?php the_title(
			'<h2 class="entry-title py-2 px-4"><a class="text-grey-lightest text-base font-light no-underline" href="' . esc_url( get_permalink() ) . '" rel="bookmark">',
			'</a></h2>'
		); ?>
    </header><!-- .entry-header -->

</article><!-- #post-## -->
