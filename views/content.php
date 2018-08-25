<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Perko
 */

?>

<style>
    .entry-header {
        background-image: url('<?php the_post_thumbnail_url('full') ?>');
        background-size: cover;
        background-position: center center;
    }
    .overlay {
        background-color: rgba(0,0,0,0.6);
    }
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="overlay py-32 text-center text-white">
        <?php
        if (is_single()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">',
                '</a></h2>');
        endif; ?>
        </div>
    </header><!-- .entry-header -->

    <div class="entry-content container mx-auto max-w-xl shadow-lg p-4 mb-32 -mt-8 bg-grey-lightest rounded">
        <?php
        the_content(sprintf(
        /* translators: %s: Name of current post. */
            wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'Perko'), array(
                'span' => array(
                    'class' => array(),
                ),
            )),
            the_title('<span class="screen-reader-text">"', '"</span>', false)));

        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'Perko'),
            'after'  => '</div>',
        ));
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php Perko\Core\Tags::entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
