<?php
/**
* Register Custom Post Type
**/

if ( ! function_exists('cpt_brand_pages') ) {
  function cpt_brand_pages() {
      $singular = 'Brand Page';
      $plural = 'Brand Pages';

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
          'not_found_in_trash'  => __( 'No ' . $plural . 'in Trash', 'text_domain' ),
      );
      $args = array(
          'label'               => __( $plural, 'text_domain' ),
          'description'         => __( $singular . ' Brand Custom Post Page', 'text_domain' ),
          'labels'              => $labels,
          'supports'            => array( 'title', 'author', 'revisions' ),
          'hierarchical'        => true,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'menu_position'       => 22,
          'menu_icon'           => 'dashicons-clipboard',
          'show_in_admin_bar'   => true,
          'show_in_nav_menus'   => true,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'rewrite'             => array(
              'slug' => 'providers',
              'with_front' => false
          ),
          'capability_type'     => 'page',
          'show_in_graphql'     => true,
          'graphql_single_name' => 'brandPage',
          'graphql_plural_name' => 'brandPages',
      );
      register_post_type( 'brand_page', $args );
  }

  add_action( 'init', 'cpt_brand_pages', 1 );
}

/**
* Register taxonomy
**/

function cpt_brand_pages_register_taxonomy() {
    $singular = 'Category';
    $plural = 'Categories';

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
        'show_ui'               => true,
        'show_admin_column'     => true,
        'has_archive'           => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'providers', ),
        'show_in_graphql' => true,
        'graphql_single_name' => 'brandPageCategory',
        'graphql_plural_name' => 'brandPageCategories',
    );
    register_taxonomy( 'brand', 'brand_page', $args );
}
add_action('init', 'cpt_brand_pages_register_taxonomy');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Brand Page Archive Options',
		'menu_title'	=> 'Archive Options',
		'parent_slug'	=> 'edit.php?post_type=brand_page',
        'show_in_graphql' => true,
	));

}
