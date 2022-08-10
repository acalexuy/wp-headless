<?php
/**
 * User Profile resolver.
 *
 * @package Canstar
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
                'description' => __('User title and biography', 'Canstar One'),
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