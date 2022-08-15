<?php
/**
 * Add GraphQL resolvers
 *
 * @package WP headless
 */

// check if WPGraphQL plugin is active.
if ( function_exists( 'register_graphql_field' ) ) {
    require_once 'resolvers/user-profile.php';
    require_once 'resolvers/related-articles.php';
}
