<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type

function lrb_create_product() {

	$labels = array(
		'name'                => 'Products',
		'singular_name'       => 'Product',
		'menu_name'           => 'Product',
		'name_admin_bar'      => 'Products',
		'parent_item_colon'   => 'Product',
		'all_items'           => 'Products',
		'add_new_item'        => 'Add new product',
		'add_new'             => 'Add new product',
		'new_item'            => 'New product',
		'edit_item'           => 'Edit product',
		'update_item'         => 'Update product',
		'view_item'           => 'View product',
		'search_items'        => 'Search product',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'Product',
		'description'         => 'Products',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-cart',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => 'products',
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'product', $args );
}
add_action( 'init', 'lrb_create_product', 0 );
