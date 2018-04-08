<?php
/**
 * Theme Customizer - Header
 *
 * @package Perko
 */

namespace Perko\Api\Customizer;

use WP_Customize_Control;
use Perko\Api\Customizer;

/**
 * Customizer class
 */
class FrontPage 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register( $wp_customize ) 
	{
		$wp_customize->add_section( 'Perko_frontpage_section' , array(
			'title' => __( 'Front Page', 'Perko' ),
			'description' => __( 'Customize the Front Page' ),
			'priority' => 35
		) );

		$wp_customize->add_setting( 'Perko_frontpage_whatido' , array(
			'default' => 'List about yourself here',
			'transport' => 'postMessage', // or refresh if you want the entire page to reload
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'Perko_frontpage_whatido', array(
			'label' => __( 'What I Do Text', 'Perko' ),
			'type' => 'textarea',
			'section' => 'Perko_frontpage_section',
			'settings' => 'Perko_frontpage_whatido',
		) ) );

		if ( isset( $wp_customize->selective_refresh ) ) {
			$wp_customize->selective_refresh->add_partial( 'Perko_frontpage_whatido', array(
				'selector' => '#whatIDoText',
				'render_callback' => function() {
					echo Customizer::text('Perko_frontpage_whatido');		
				},
			) );
			
		}
	}

}