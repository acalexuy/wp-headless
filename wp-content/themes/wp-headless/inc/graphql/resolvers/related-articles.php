<?php
/**
 * Related Articles resolver.
 *
 * @package WP headless
 */
add_action(
    'graphql_register_types',
    function () {
        register_graphql_connection([
		'fromType' => 'Post',
		'toType' => 'Post',
		'fromFieldName' => 'relatedArticles',
		'connectionArgs' => \WPGraphQL\Connection\PostObjects::get_connection_args(),
		'resolve' => function( \WPGraphQL\Model\Post $source, $args, $context, $info ) {
			$resolver = new \WPGraphQL\Data\Connection\PostObjectConnectionResolver( $source, $args, $context, $info, 'post' );
			$resolver->set_query_arg( 'category__in', wp_get_post_categories($source->ID) );
			$resolver->set_query_arg( 'orderby', 'rand' );
            $resolver->set_query_arg( 'posts_per_page', 4 );
            $resolver->set_query_arg( 'post__not_in', array($source->ID) );
            return $resolver->get_connection();
		}
	]);
    }
);