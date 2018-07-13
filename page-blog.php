<?php get_header(); ?>

<?php

$GLOBALS['wp_query'] = new WP_Query( array(
	'posts_per_page' => 6,
	'paged'          => true,
) );

?>

<?php if ( have_posts() ) : ?>
    <div class="flex flex-wrap">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'views/content-blog-tile', get_post_format() );
		endwhile;
		?>
    </div>

	<?php the_posts_pagination(); ?>

<?php endif; ?>