<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Perko
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site" <?php echo ! is_customize_preview() ?: 'style="padding: 0 40px;"'; ?>>

    <header class="py-2 px-4 shadow z-20 bg-white flex justify-between">
        <h1 class="text-2xl">
            <span class="text-gray">ChrisPerko</span><span class="text-gray-light font-thin">.NET</span>
        </h1>
        <p id="menu-link" class="cursor-pointer">menu</p>
    </header>

    <div id="menu-overlay" class="menu-overlay pt-16">
        <?php $items = wp_nav_menu([
            'menu_class' => 'flex content-center justify-between flex-wrap p-0 mt-32 container mx-auto'
        ]); ?>
    </div>

    <div id="content" class="site-content">
