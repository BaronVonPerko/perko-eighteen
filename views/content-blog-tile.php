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

<a class="sm:w-2/5 md:w-1/4 h-48 m-2 sm:m-4 relative shadow-lg" rel="bookmark" href="<?= esc_url( get_permalink() ) ?>">
    <article id="post-<?= the_ID() ?>" <?php post_class(); ?>>

        <div class="post-tile-image absolute pin"></div>

        <header class="entry-header absolute pin-b w-full" style="background-color: rgba(40,40,40,0.7)">
			<?php the_title(
				'<h2 class="entry-title py-2 px-4 text-grey-lightest text-base font-light no-underline">',
				'</h2>'
			); ?>
        </header><!-- .entry-header -->

    </article><!-- #post-## -->
</a>