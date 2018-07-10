<?php

namespace Perko\Custom;

/**
 * Custom
 * use it to write your custom functions.
 */
class Custom
{
	/**
     * register default hooks and actions for WordPress
     * @return
     */
	public function register()
	{
		add_action( 'init', array( $this, 'video_post_type' ) );
		add_action( 'init', array( $this, 'video_series_taxonomy' ) );
		add_action( 'after_switch_theme', array( $this, 'rewrite_flush' ) );
	}

	/**
	 * Create Video Post Types
	 * @return The registered post type object, or an error object
	 */
	public function video_post_type()
	{
		$labels = array(
			'name'               => _x( 'Videos', 'post type general name', 'Perko' ),
			'singular_name'      => _x( 'Video', 'post type singular name', 'Perko' ),
			'menu_name'          => _x( 'Videos', 'admin menu', 'Perko' ),
			'name_admin_bar'     => _x( 'Video', 'add new on admin bar', 'Perko' ),
			'add_new'            => _x( 'Add New', 'video', 'Perko' ),
			'add_new_item'       => __( 'Add New Video', 'Perko' ),
			'new_item'           => __( 'New Video', 'Perko' ),
			'edit_item'          => __( 'Edit Video', 'Perko' ),
			'view_item'          => __( 'View Video', 'Perko' ),
			'view_items'         => __( 'View Videos', 'Perko' ),
			'all_items'          => __( 'All Videos', 'Perko' ),
			'search_items'       => __( 'Search Videos', 'Perko' ),
			'parent_item_colon'  => __( 'Parent Videos:', 'Perko' ),
			'not_found'          => __( 'No videos found.', 'Perko' ),
			'not_found_in_trash' => __( 'No videos found in Trash.', 'Perko' )
		);

		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Video posts', 'Perko' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-video-alt3',
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'video' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 5, // below post
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		);

		register_post_type( 'video', $args );
	}

	/**
	 * Create the Video Series Taxonomy
	 */
	public function video_series_taxonomy() {
		register_taxonomy(
			'video_series',
			'video',
			array(
				'label' => 'Series',
			)
		);
	}

	/**
	 * Flush Rewrite on CPT activation
	 * @return empty
	 */
	public function rewrite_flush() 
	{   
		$this->video_post_type();
		$this->video_series_taxonomy();

		// Flush the rewrite rules only on theme activation
		flush_rewrite_rules();
	}
}
