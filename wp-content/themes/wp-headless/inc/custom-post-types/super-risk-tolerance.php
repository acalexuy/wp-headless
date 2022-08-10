<?php
/**
* Register Custom Post Type
**/

if ( ! function_exists('cpt_super_risk_tolerance') ) {
    function cpt_super_risk_tolerance() {
        $singular = 'Super Risk Tolerance';
        $plural = 'Super Risk Tolerances';

        $labels = array(
            'name'                => _x( $plural, 'text_domain' ),
            'singular_name'       => _x( $singular, 'text_domain' ),
            'menu_name'           => __( $plural, 'text_domain' ),
            'name_admin_bar'      => __( $plural, 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Page:', 'text_domain' ),
            'all_items'           => __( 'All ' . $plural, 'text_domain' ),
            'add_new_item'        => __( 'Add New ' . $singular, 'text_domain' ),
            'add_new'             => __( 'Add New ' . $singular, 'text_domain' ),
            'new_item'            => __( 'New Page', 'text_domain' ),
            'edit_item'           => __( 'Edit ' . $singular, 'text_domain' ),
            'update_item'         => __( 'Update ' . $singular, 'text_domain' ),
            'view_item'           => __( 'View ' . $singular, 'text_domain' ),
            'search_items'        => __( 'Search ' . $plural, 'text_domain' ),
            'not_found'           => __( 'No ' . $plural, 'text_domain' ),
            'not_found_in_trash'  => __( 'No ' . $plural . ' in Trash', 'text_domain' ),
        );
        $args = array(
            'label'               => __( $plural, 'text_domain' ),
            'description'         => __( $singular . ' Super Risk Tolerance Custom Post Type', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'author', 'revisions', 'page-attributes' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 22,
            'menu_icon'           => 'dashicons-align-center',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_graphql'     => true,
            'graphql_single_name' => 'superRiskTolerance',
            'graphql_plural_name' => 'superRiskTolerances',
        );
        register_post_type( 'super-risk-tolerance', $args );
    }

    add_action( 'init', 'cpt_super_risk_tolerance', 1 );
}

function super_risk_archive_options() {

  if(function_exists('acf_add_options_page')) {
    acf_add_options_sub_page(array(
      'page_title'      => 'Super Risk Archive Settings',
      'parent_slug'     => 'edit.php?post_type=super-risk-tolerance',
      'capability' => 'manage_options',
      'show_in_graphql' => true,
    ));
  }

}

add_action('init', 'super_risk_archive_options');

?>
