<?php
namespace WPPS\Includes\Books;

class PostType {

    /**
    * Construct Function
    * @since 1.0.0
    */
    public function __construct() {
        add_action( 'init', [ $this, 'create_post_type' ] );
    }

    /**
    * Custom Post Type ( books )
    * @since 1.0.0
    * @return void
    */
    public function create_post_type() {
        $labels = array(
			'name'                  => _x( 'Books', 'Post type general name', 'wp-guest-post' ),
			'singular_name'         => _x( 'Book', 'Post type singular name', 'wp-guest-post' ),
			'menu_name'             => _x( 'Books', 'Admin Menu text', 'wp-guest-post' ),
			'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'wp-guest-post' ),
			'add_new'               => __( 'Add New', 'wp-guest-post' ),
			'add_new_item'          => __( 'Add New Book', 'wp-guest-post' ),
			'new_item'              => __( 'New Book', 'wp-guest-post' ),
			'edit_item'             => __( 'Edit Book', 'wp-guest-post' ),
			'view_item'             => __( 'View Book', 'wp-guest-post' ),
			'all_items'             => __( 'All Books', 'wp-guest-post' ),
			'search_items'          => __( 'Search Books', 'wp-guest-post' ),
			'parent_item_colon'     => __( 'Parent Books:', 'wp-guest-post' ),
			'not_found'             => __( 'No Book found.', 'wp-guest-post' ),
			'not_found_in_trash'    => __( 'No Book found in Trash.', 'wp-guest-post' ),
			'featured_image'        => _x( 'Book Cover Image', '', 'wp-guest-post' ),
			'set_featured_image'    => _x( 'Set cover image', '', 'wp-guest-post' ),
			'remove_featured_image' => _x( 'Remove cover image', '', 'wp-guest-post' ),
			'use_featured_image'    => _x( 'Use as cover image', '', 'wp-guest-post' ),
			'archives'              => _x( 'Book archives', '', 'wp-guest-post' ),
			'insert_into_item'      => _x( 'Insert into Book', '', 'wp-guest-post' ),
			'uploaded_to_this_item' => _x( 'Uploaded to this Book', '', 'wp-guest-post' ),
			'filter_items_list'     => _x( 'Filter Books list', '', 'wp-guest-post' ),
			'items_list_navigation' => _x( 'Books list navigation', '', 'wp-guest-post' ),
			'items_list'            => _x( 'Books list', '', 'wp-guest-post' ),
    	);
 
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'book' ),
            'capability_type'    => 'post',
            'capabilities'       => array(
                'edit_post'          => 'update_core',
                'read_post'          => 'update_core',
                'delete_post'        => 'update_core',
                'edit_posts'         => 'update_core',
                'edit_others_posts'  => 'update_core',
                'delete_posts'       => 'update_core',
                'publish_posts'      => 'update_core',
                'read_private_posts' => 'update_core'
            ),
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'show_in_rest'       => true,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);

		register_post_type( 'book', $args );
    }

}