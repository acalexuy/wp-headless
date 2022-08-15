<?php
/**
 * User Profile resolver.
 *
 * @package WP headless
 */
add_action(
    'graphql_register_types',
    function () {
        register_graphql_object_type('UserProfileType', [
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
            'User',
            'profile',
            array(
                'type'        =>  'UserProfileType',
                'description' => __('User title and biography', 'WP headless'),
                'resolve'     => function (\WPGraphQL\Model\User $user, $args, $depth) {
                    $mate = [
                        'title' => get_user_meta(561, 'title', true),
                        'biography' => get_user_meta(561, 'biography', true),
                    ];
                    return $mate;
                },
            )
        );
    }
);