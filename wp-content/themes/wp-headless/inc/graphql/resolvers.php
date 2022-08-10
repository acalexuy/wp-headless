<?php
/**
 * Add GraphQL resolvers
 *
 * @package  Canstar
 */

// check if WPGraphQL plugin is active.
if ( function_exists( 'register_graphql_field' ) ) {
    require_once 'resolvers/user-profile.php';
    require_once 'resolvers/related-articles.php';
}
