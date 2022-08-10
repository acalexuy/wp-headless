<?php

if ( ! function_exists('cpt_comparison') ) {
    function cpt_comparison() {

        $labels = array(
            'name'                => _x( 'Comparisons', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Comparison', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Comparisons', 'text_domain' ),
            'name_admin_bar'      => __( 'Comparisons', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Page:', 'text_domain' ),
            'all_items'           => __( 'All Pages', 'text_domain' ),
            'add_new_item'        => __( 'Add New Page', 'text_domain' ),
            'add_new'             => __( 'Add New', 'text_domain' ),
            'new_item'            => __( 'New Page', 'text_domain' ),
            'edit_item'           => __( 'Edit Page', 'text_domain' ),
            'update_item'         => __( 'Update Page', 'text_domain' ),
            'view_item'           => __( 'View Page', 'text_domain' ),
            'search_items'        => __( 'Search Page', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $args = array(
            'label'               => __( 'Comparisons', 'text_domain' ),
            'description'         => __( 'Description here', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_rest'        => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-page',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite'             => array('slug' => 'compare'),
            'capability_type'     => 'page',
            'show_in_graphql'     => true,
            'graphql_single_name' => 'comparison',
            'graphql_plural_name' => 'comparisons',
        );
        register_post_type( 'comparisons', $args );

    }

    add_action( 'init', 'cpt_comparison', 0 );
}

if ( ! function_exists( 'cpt_taxonomy' ) ) {

// Register Custom Taxonomy
function cpt_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Categories', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Categories', 'text_domain' ),
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
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'rest_base'                  => 'comparison_categories',
        'show_tagcloud'              => false
    );
   register_taxonomy( 'comparison_category', array( 'comparisons' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_taxonomy', 0 );


}
