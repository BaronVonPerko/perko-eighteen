<?php get_header(); ?>

<?php

$GLOBALS['wp_query'] = new WP_Query( array(
	'posts_per_page' => 5,
	'paged'          => true,
) );

if ( have_posts() ) :

	while ( have_posts() ) :
		the_post();
		get_template_part( 'views/content-blog-snippet', get_post_format() );
	endwhile;

	the_posts_pagination();

endif;