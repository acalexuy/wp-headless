<?php
    // Disable gutenberg editor
    add_filter('use_block_editor_for_post_type', '__return_false', 10);
    // enable featured image on post
    add_theme_support( 'post-thumbnails' );
?>