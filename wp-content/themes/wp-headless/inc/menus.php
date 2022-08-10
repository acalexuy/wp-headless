<?php
/**
 * Register main menu.
 *
 * @package  Postlight_Headless_WP
 */

/**
 * Register navigation menu.
 *
 * @return void
 */
function register_menus() {
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'canstar-one'),
        'footer_navigation' => __('Footer Navigation', 'canstar-one')
    ]);
}
add_action( 'after_setup_theme', 'register_menus' );
