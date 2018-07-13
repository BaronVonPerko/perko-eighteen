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
    #post-<?=the_ID()?> .post-thumbnail {
        background-image: url(<?php the_post_thumbnail_url() ?>);
        width: 300px;
        height: 300px;
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
    }
</style>

<article id="post-<?= the_ID() ?>" <?php post_class('w-1/3'); ?>>
    <header class="entry-header">
		<?php the_title(
			'<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',
			'</a></h2>'
		); ?>

        <div class="entry-meta">
			<?php Perko\Core\Tags::posted_on(); ?>
        </div><!-- .entry-meta -->

    </header><!-- .entry-header -->

    <div class="entry-content">

        <div class="post-thumbnail"></div>

        <div>
			<?php the_excerpt(); ?>
        </div>
    </div><!-- .entry-content -->

    <div class="link-pages">
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Perko' ),
			'after'  => '</div>',
		) );
		?>
    </div>

    <footer class="entry-footer">
		<?php Perko\Core\Tags::entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
