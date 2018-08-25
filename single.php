<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Perko
 */

get_header(); ?>

    <main id="main" role="main">

        <?php

        /* Start the Loop */
        while (have_posts()) : the_post();

            get_template_part('views/content', get_post_format());

            the_post_navigation();

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile;

        ?>

    </main><!-- #main -->


<?php
get_footer();
