<?php

// Register Custom Post Type
function alfred_cpt() {
	// MEMBRES 
	$labels = array(
		'name'                  => _x( 'Membres', 'Post Type General Name', 'alfred' ),
		'singular_name'         => _x( 'Membre', 'Post Type Singular Name', 'alfred' ),
		'menu_name'             => __( 'Membres', 'alfred' ),
		'name_admin_bar'        => __( 'Membre', 'alfred' ),
		'archives'              => __( 'Item Archives', 'alfred' ),
		'attributes'            => __( 'Item Attributes', 'alfred' ),
		'parent_item_colon'     => __( 'Parent Item:', 'alfred' ),
		'all_items'             => __( 'All Items', 'alfred' ),
		'add_new_item'          => __( 'Ajouter un membre', 'alfred' ),
		'add_new'               => __( 'Ajouter', 'alfred' ),
		'new_item'              => __( 'Nouveau', 'alfred' ),
		'edit_item'             => __( 'Modifier', 'alfred' ),
		'update_item'           => __( 'Mettre à jour', 'alfred' ),
		'view_item'             => __( 'Voir', 'alfred' ),
		'view_items'            => __( 'Voir', 'alfred' ),
		'search_items'          => __( 'Rechercher', 'alfred' ),
		'not_found'             => __( 'Not found', 'alfred' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'alfred' ),
		'featured_image'        => __( 'Featured Image', 'alfred' ),
		'set_featured_image'    => __( 'Set featured image', 'alfred' ),
		'remove_featured_image' => __( 'Remove featured image', 'alfred' ),
		'use_featured_image'    => __( 'Use as featured image', 'alfred' ),
		'insert_into_item'      => __( 'Insert into item', 'alfred' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'alfred' ),
		'items_list'            => __( 'Items list', 'alfred' ),
		'items_list_navigation' => __( 'Items list navigation', 'alfred' ),
		'filter_items_list'     => __( 'Filter items list', 'alfred' ),
	);
	$args = array(
		'label'                 => __( 'Membre', 'alfred' ),
		'description'           => __( 'Les membres', 'alfred' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite' => array('slug' => 'membres','with_front' => false),
	);
	register_post_type( 'membres', $args );	
}
add_action( 'init', 'alfred_cpt', 10 );


// Register Custom Taxonomy
function alfred_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Types de membre', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Type de membre', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Types', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'member_type', array( 'membres' ), $args );

}



add_action( 'init', 'alfred_taxonomy', 0 );
