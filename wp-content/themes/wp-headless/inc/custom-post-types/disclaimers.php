<?php
/**
* Register Custom Post Type
**/

if ( ! function_exists('cpt_disclaimers') ) {

function cpt_disclaimers() {
    $singular = 'Disclaimer';
    $plural = 'Disclaimers';

    $labels = array(
        'name'                => _x( $plural, 'text_domain' ),
        'singular_name'       => _x( $singular, 'text_domain' ),
        'menu_name'           => __( $plural, 'text_domain' ),
        'name_admin_bar'      => __( $plural, 'text_domain' ),
        'parent_item_colon'   => __( 'Parent ' . $singular .':', 'text_domain' ),
        'all_items'           => __( 'All ' . $plural, 'text_domain' ),
        'add_new_item'        => __( 'Add New ' . $singular, 'text_domain' ),
        'add_new'             => __( 'Add New ' . $singular, 'text_domain' ),
        'new_item'            => __( 'New ' . $singular, 'text_domain' ),
        'edit_item'           => __( 'Edit ' . $singular, 'text_domain' ),
        'update_item'         => __( 'Update ' . $singular, 'text_domain' ),
        'view_item'           => __( 'View ' . $singular, 'text_domain' ),
        'search_items'        => __( 'Search ' . $plural, 'text_domain' ),
        'not_found'           => __( 'No ' . $plural, 'text_domain' ),
        'not_found_in_trash'  => __( 'No ' . $plural . 'in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( $plural, 'text_domain' ),
        'description'         => __( $singular, 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'author', 'editor', 'revisions' ),
        'hierarchical'        => true,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 24,
        'menu_icon'           => 'dashicons-editor-ol',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => false,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'rewrite'             => false,
        'capability_type'     => 'page',
        'show_in_graphql'     => true,
        'graphql_single_name' => 'disclaimer',
        'graphql_plural_name' => 'disclaimers',
    );
    register_post_type( 'disclaimer', $args );
}

add_action( 'init', 'cpt_disclaimers', 1 );
}

/**
* Register taxonomy
**/

function cpt_disclaimers_register_taxonomy() {
    $singular = 'Disclaimer Category';
    $plural = 'Disclaimer Categories';

    $labels = array(
        'name'                          => __( $plural, 'text_domain'),
        'singular_name'                 => __( $singular, 'text_domain'),
        'search_items'                  => __('Search ' . $plural, 'text_domain'),
        'popular_items'                 => __( 'Popular ' . $plural, 'text_domain'),
        'all_items'                     => __( 'All ' . $plural, 'text_domain'),
        'parent_item'                   => null,
        'parent_item_colon'             => null,
        'edit_item'                     => __('Edit ' . $singular, 'text_domain'),
        'update_item'                   => __('Update ' . $singular, 'text_domain'),
        'add_new_item'                  => __('Add New ' . $singular, 'text_domain'),
        'new_item_name'                 => __('New ' . $singular . ' Name', 'text_domain'),
        'separate_items_with_commas'    => __('Separate ' . $plural . 'with commas', 'text_domain'),
        'add_or_remove_items'           => __('Add or remove  ' . $plural, 'text_domain'),
        'choose_from_most_used'         => __('Choose from the most used ' . $plural, 'text_domain'),
        'not_found'                     => __('No '. $plural .' found.', 'text_domain'),
        'menu_name'                     => __( $plural, 'text_domain'),
    );

    $args = array(
        'labels'                => $labels,
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'publicly_queryable'    => false,
        'show_in_nav_menus'     => false,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => false
    );
    register_taxonomy( 'disclaimer_category', 'disclaimer', $args );
}
add_action('init', 'cpt_disclaimers_register_taxonomy');
?>
