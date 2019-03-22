<?php

// Register Custom Post Type
function CPTfeature() {
    
    $labels = array(
        'name'                  => _x( 'Features', 'Post Type General Name', 'AnythingMachine' ),
        'singular_name'         => _x( 'Feature', 'Post Type Singular Name', 'AnythingMachine' ),
        'menu_name'             => __( 'Features', 'AnythingMachine' ),
        'name_admin_bar'        => __( 'Feature', 'AnythingMachine' ),
        'archives'              => __( 'Feature Archives', 'AnythingMachine' ),
        'attributes'            => __( 'Feature Attributes', 'AnythingMachine' ),
        'parent_item_colon'     => __( 'Parent Feature:', 'AnythingMachine' ),
        'all_items'             => __( 'All Features', 'AnythingMachine' ),
        'add_new_item'          => __( 'Add New Feature', 'AnythingMachine' ),
        'add_new'               => __( 'Add New', 'AnythingMachine' ),
        'new_item'              => __( 'New Feature', 'AnythingMachine' ),
        'edit_item'             => __( 'Edit Feature', 'AnythingMachine' ),
        'update_item'           => __( 'Update Feature', 'AnythingMachine' ),
        'view_item'             => __( 'View Feature', 'AnythingMachine' ),
        'view_items'            => __( 'ViewFeatures', 'AnythingMachine' ),
        'search_items'          => __( 'Search Feature', 'AnythingMachine' ),
        'not_found'             => __( 'Not found', 'AnythingMachine' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'AnythingMachine' ),
        'featured_image'        => __( 'Featured Image', 'AnythingMachine' ),
        'set_featured_image'    => __( 'Set featured image', 'AnythingMachine' ),
        'remove_featured_image' => __( 'Remove featured image', 'AnythingMachine' ),
        'use_featured_image'    => __( 'Use as featured image', 'AnythingMachine' ),
        'insert_into_item'      => __( 'Insert into feature', 'AnythingMachine' ),
        'uploaded_to_this_item' => __( 'Uploaded to this feature', 'AnythingMachine' ),
        'items_list'            => __( 'Features list', 'AnythingMachine' ),
        'items_list_navigation' => __( 'Features list navigation', 'AnythingMachine' ),
        'filter_items_list'     => __( 'Filter features list', 'AnythingMachine' ),
    );
    $args = array(
        'label'                 => __( 'Feature', 'AnythingMachine' ),
        'description'           => __( 'A feature of a software entity.', 'AnythingMachine' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type( 'feature', $args );
    
}
add_action( 'init', 'CPTfeature', 0 );