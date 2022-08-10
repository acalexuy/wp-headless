<?php

if ( ! function_exists('cpt_team_member') ) {

// Register Custom Post Type
function cpt_team_member() {

    $labels = array(
        'name'                => _x( 'Team Members', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Team Members', 'text_domain' ),
        'name_admin_bar'      => __( 'Team Members', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Page:', 'text_domain' ),
        'all_items'           => __( 'All Team Members', 'text_domain' ),
        'add_new_item'        => __( 'Add New Team Member', 'text_domain' ),
        'add_new'             => __( 'Add New Team Member', 'text_domain' ),
        'new_item'            => __( 'New Page', 'text_domain' ),
        'edit_item'           => __( 'Edit Team Member', 'text_domain' ),
        'update_item'         => __( 'Update Team Member', 'text_domain' ),
        'view_item'           => __( 'View Team Member', 'text_domain' ),
        'search_items'        => __( 'Search Team Members', 'text_domain' ),
        'not_found'           => __( 'No Team Members', 'text_domain' ),
        'not_found_in_trash'  => __( 'No Team Members in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'Team Members', 'text_domain' ),
        'description'         => __( 'Team Member Description here', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 22,
        'menu_icon'           => 'dashicons-groups',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'rewrite'             => array('slug' => 'team-members'),
        'capability_type'     => 'page',
        'show_in_graphql'     => true,
        'graphql_single_name' => 'teamMember',
        'graphql_plural_name' => 'teamMembers',
    );
    register_post_type( 'team_member', $args );
}

// Hook into the 'init' action
add_action( 'init', 'cpt_team_member', 1 );
}

if ( ! function_exists( 'cpt_team_member_taxonomy' ) ) {

// Register Custom Taxonomy
function cpt_team_member_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Teams', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Team', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Teams', 'text_domain' ),
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
        'show_tagcloud'              => false
    );
   register_taxonomy( 'team', array( 'team_member' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_team_member_taxonomy', 1 );

}
?>
