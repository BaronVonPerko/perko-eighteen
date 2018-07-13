<?php get_header(); ?>

<?php

$GLOBALS['wp_query'] = new WP_Query( array(
	'posts_per_page' => 6,
	'paged'          => true,
) );

?>

<?php if ( have_posts() ) : ?>
<div class="container my-8">
    <div class="flex flex-wrap justify-center">
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