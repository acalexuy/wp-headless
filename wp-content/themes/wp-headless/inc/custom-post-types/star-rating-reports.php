<?php

if ( ! function_exists('cpt_star_rating_report_new') ) {

// Register Custom Post Type
function cpt_star_rating_report_new() {

    $labels = array(
        'name'                => _x( 'Star Rating Reports', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Star Rating Report', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Star Rating Reports', 'text_domain' ),
        'name_admin_bar'      => __( 'Star Rating Reports', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Page:', 'text_domain' ),
        'all_items'           => __( 'All Star Rating Reports', 'text_domain' ),
        'add_new_item'        => __( 'Add New Star Rating Report', 'text_domain' ),
        'add_new'             => __( 'Add New Star Rating Report', 'text_domain' ),
        'new_item'            => __( 'New Star Rating Report', 'text_domain' ),
        'edit_item'           => __( 'Edit Star Rating Report', 'text_domain' ),
        'update_item'         => __( 'Update Star Rating Report', 'text_domain' ),
        'view_item'           => __( 'View Star Rating Report', 'text_domain' ),
        'search_items'        => __( 'Search Star Rating Reports', 'text_domain' ),
        'not_found'           => __( 'No Star Rating Reports', 'text_domain' ),
        'not_found_in_trash'  => __( 'No Star Rating Reports in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'Star Rating Reports', 'text_domain' ),
        'description'         => __( 'Star Rating Report Description here', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 22,
        'menu_icon'           => 'dashicons-star-filled',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'rewrite'             => array('slug' => 'star-rating-reports'),
        'capability_type'     => 'page',
        'show_in_graphql'     => true,
        'graphql_single_name' => 'starRatingReport',
        'graphql_plural_name' => 'starRatingReports',
    );
    register_post_type( 'star_rating_new', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpt_star_rating_report_new', 1 );
}
?>
