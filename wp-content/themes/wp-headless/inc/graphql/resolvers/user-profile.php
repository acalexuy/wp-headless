<?php
/**
 * User Profile resolver.
 *
 * @package WP headless
 */
add_action(
    'graphql_register_types',
    function () {
        register_graphql_object_type('AuthorProfileType', [
            'fields' => [
                'title' => [
                    'type' => 'String'
                ],
                'biography' => [
                    'type' => 'String'
                ]              
            ],
        ]);
        register_graphql_field(
            'Post',
            'authorProfile',
            array(
                'type'        =>  'AuthorProfileType',
                'description' => __('Author title and biography', 'WP Headless'),
                'resolve'     => function ($post, $args, $context, $info ) {
                    $author = get_post_field( 'post_author', $post->ID );
                    $authorId = get_the_author_meta( 'ID', $author );
                    $authorProfile = [
                        'title' => get_user_meta($authorId, 'title', true),
                        'biography' => get_user_meta($authorId, 'biography', true),
                    ];
                    return $authorProfile;
                },
            )
        );
    }
);