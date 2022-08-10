<?php

function wporg_simple_role() {
    add_role(
        'simple_role',
        'Simple Role',
        array(
            'read'         => true,
            'edit_posts'   => true,
            'upload_files' => true,
        ),
    );
}
 
// Add the simple_role.
add_action( 'init', 'wporg_simple_role' );

?>