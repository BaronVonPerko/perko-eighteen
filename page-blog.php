<?php get_header(); ?>

<h3 class="blog_page_title">Latest Posts</h3>

<?php

$GLOBALS['wp_query'] = new WP_Query( array(
	'posts_per_page' => 6,
	'paged'          => true,
) );

?>

<?php if ( have_posts() ) : ?>
    <div class="container my-8">
        <div class="flex flex-wrap justify-center flex-col sm:flex-row">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'views/content-blog-tile', get_post_format() );
			endwhile;
			?>
        </div>

		<?php the_posts_pagination(); ?>
    </div>

<?php endif; ?>


<h3 class="blog_page_title">Latest Videos</h3>


<?php

wp_reset_query();

$GLOBALS['wp_query'] = new WP_Query( array(
	'posts_per_page' => 3,
	'paged'          => false,
	'post_type'      => [ 'video' ],
) );

?>

<?php if ( have_posts() ) : ?>
    <div class="container my-8">
        <div class="flex flex-wrap justify-center flex-col sm:flex-row">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'views/content-blog-tile', get_post_format() );
			endwhile;
			?>
        </div>
    </div>

<?php endif; ?>


<?php get_footer(); ?>