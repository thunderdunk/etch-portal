<?php

//CPTs
add_action( 'init', 'etch_tutorial_register' );

function etch_tutorial_register() {
	$labels = array(
		'name'               => _x( 'Tutorials', 'post type general name', 'etchasketch' ),
		'singular_name'      => _x( 'Tutorial', 'post type singular name', 'etchasketch' ),
		'menu_name'          => _x( 'Tutorials', 'admin menu', 'etchasketch' ),
		'name_admin_bar'     => _x( 'Tutorial', 'add new on admin bar', 'etchasketch' ),
		'add_new'            => _x( 'Add New', 'Tutorial', 'etchasketch' ),
		'add_new_item'       => __( 'Add New Tutorial', 'etchasketch' ),
		'new_item'           => __( 'New Tutorial', 'etchasketch' ),
		'edit_item'          => __( 'Edit Tutorial', 'etchasketch' ),
		'view_item'          => __( 'View Tutorial', 'etchasketch' ),
		'all_items'          => __( 'All Tutorials', 'etchasketch' ),
		'search_items'       => __( 'Search Tutorials', 'etchasketch' ),
		'parent_item_colon'  => __( 'Parent Tutorials:', 'etchasketch' ),
		'not_found'          => __( 'No Tutorials found.', 'etchasketch' ),
		'not_found_in_trash' => __( 'No Tutorials found in Trash.', 'etchasketch' ),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'			=> 'dashicons-welcome-learn-more',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'etch-tutorials' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'taxonomies'					=> array( 'category' )
	);

	register_post_type( 'etch_tutorial', $args );
}
