<?php
/**
 * functions and definitions
 *
 * @link https://bshwork.me/
 *
 * @package WordPress
 * @subpackage Quick_Links
 * @since Quick Links 1.0
 */

// Enqueue scripts and styles
// function twentytwenty_child_scripts(){
// 	wp_enqueue_style( 'twentytwenty', get_template_directory_uri() . '/style.css' );
// 	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twentytwenty-style' ));
// }
// add_action( 'wp_enqueue_scripts', 'twentytwenty_child_scripts' );
// add_action( 'wp_enqueue_scripts', 'tt_child_enqueue_parent_styles' );
//
// 	function tt_child_enqueue_parent_styles() {
// 	   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
// 	}


// Custom post types functions
// function create_custom_post_types() {
// // create a case study custom post type
// 	register_post_type( 'quick_links',
// 		array(
// 			'labels' => array(
// 				'name' => __( 'Quick Links' ),
// 				'singular_name' => __( 'Quick Link' )
// 				),
// 			'public' => true,
// 			'has_archive'	=> true,
// 			'rewrite' => array( 'slug' => 'quick-links' ),
// 		)
// 	);
// }
//
// // Hook this custom post type
// add_action( 'init', 'create_custom_post_types' );
?>
