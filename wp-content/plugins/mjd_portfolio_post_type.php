<?php
/*
Plugin Name: MJD Work Post Type
Description: Registers the post type and taxonomies for our shop
Author: Matt Daley
Version: 0.1
License: GPLv3
*/

//Register the post type
add_action( 'init', 'mjd_post_type_register' );
function mjd_post_type_register(){
	register_post_type( 'work', array(
		'public' 		    => true,
		'has_archive' 	=> true,
		'menu_icon'		  => 'dashicons-cart',
		'menu_position'	=> 5,
		'rewrite'		    => array( 'slug' => 'portfolio' ),
		'supports'		  => array( 'title', 'editor', 'thumbnail', 'custom-fields',
									'excerpt', 'comments', 'revisions' ),
		'labels'		=> array(
			'name' 			    => 'Works',
			'singular_name'	=> 'Work',
			'add_new_item'	=> 'Add New Work',
			'not_found'		  => 'No Works Found',
			'search_items'	=> 'Search Works',
		),
	));

	//Attach "brands" taxonomy to our products
	register_taxonomy('work-type', 'work', array(
		'hierarchical'      => true,
		'show_admin_column' => true,
		'labels'            => array(
						'name'          => 'Work Types',
						'singular_name' => 'Work Type',
						'add_new_item'  => 'Add New Work Type',
						'not_found'     => 'No work types found.',
						'search_items'  => 'Search Work Types',
		),
	));

	// //Attach "brands" taxonomy to our products
	// register_taxonomy('feature', 'product', array(
	// 	'hierarchical'      => false,
	// 	'show_admin_column' => true,
	// 	'labels'            => array(
	// 					'name'          => 'Features',
	// 					'singular_name' => 'Features',
	// 					'add_new_item'  => 'Add New Feature',
	// 					'not_found'     => 'No features found.',
	// 					'search_items'  => 'Search Features',
	// 	),
	// ));
}

/**
* Flush permalinks (rewrite rules) when this plugin is activated
* Prevents 404 error_get_last
*/
function mjd_flush() {
	mjd_post_type_register();
	flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'mjd_flush');
