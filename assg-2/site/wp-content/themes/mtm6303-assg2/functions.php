<?php
/**
 * Header template for the theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage MTM6303_Assignment
 * @since MTM6303 Assignment 1.0
 */
?>

 
 <?php


function mtm6303assignment_setup() {
    
  wp_register_style('main', get_template_directory_uri() . '/assets/css/main.a3f694c0.css', array(), 1, 'all');
  wp_enqueue_style('main');

  register_nav_menus(array(
		'top' => __('Top Menu', 'mtm6303assignment'),
		'socia;' => __('Socia Links Menu', 'mtm6303assignment' ),
	));

	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'mtm6303assignment-featured-image', 2000, 1200, true );
    

  
}
// <link href="./assets/css/main.a3f694c0.css" rel="stylesheet">
// <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">
// <link href="./assets/favicon.ico" rel="icon">

add_action('after_setup_theme', 'mtm6303assignment_setup'); 
// add_action('after_setup_theme', 'mtm6303assignment_setup'); 