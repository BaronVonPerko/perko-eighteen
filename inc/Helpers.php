<?php
/**
 * Helpers methods
 * List all your static functions you wish to use globally on your theme
 *
 * @package Perko
 */

if ( ! function_exists( 'dd' ) ) :
	/**
	 * Var_dump and die method
	 *
	 * @return void
	 */
	function dd() {
		echo '<pre>';
		array_map( function( $x ) {
			var_dump( $x );
		}, func_get_args() );
		echo '</pre>';
		die;
	}
endif;

/**
 * Get a file from the views/partials directory.
 * This takes a dot notation.
 * ex. "front-page.hero" will load the views/partials/front-page/hero.php file
 */
if ( ! function_exists( 'load_partial') ) :
	function load_partial($filename) {
		require get_template_directory() 
		.  "/views/partials/" 
		. str_replace(".", "/", $filename) 
		. ".php";
	}
endif;