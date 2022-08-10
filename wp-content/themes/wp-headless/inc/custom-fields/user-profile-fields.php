<?php
    // Display & Edit Author Title and Short Biography to User's Profile Page
    add_action( 'show_user_profile', 'additional_user_profile_fields' );
    add_action( 'edit_user_profile', 'additional_user_profile_fields' );

    function additional_user_profile_fields($user) { ?>
    <h3><?php _e('Additional Profile Information', 'blank'); ?></h3>

    <table class='form-table'>
        <tr>
        <th><label for='title'><?php _e('Title'); ?></label></th>
        <td>
            <input type='text' name='title' id='title' value='<?php echo esc_attr(get_the_author_meta("title", $user->ID));?>' placeholder='Content Manager' class='regular-text'/>
            <br>
            <span class='description'><?php _e('Please enter your title'); ?></span>
        </td>
        </tr>
        <tr>
            <th><label for='title'><?php _e('Title'); ?></label></th>
        </tr>
        <tr>
        <th><label for='biography'><?php _e('Short Biography'); ?></label></th>
        <td>
            <textarea rows='5' cols='30' maxlength='300' name='biography' id='biography' class='regular-text'><?php echo esc_attr(get_the_author_meta("biography", $user->ID));?></textarea>
            <br>
            <span class='description'><?php _e('Please enter a short biography, this will be displayed in the author-biography section of your article'); ?></span>
        </td>
        </tr>
    </table>
    <?php }

    // Save Author Title and Short Biography to User's Profile Page
    add_action('personal_options_update', 'save_additional_user_profile_fields');
    add_action('edit_user_profile_update', 'save_additional_user_profile_fields');

    function save_additional_user_profile_fields($user_id) {
        if (!current_user_can( 'edit_user', $user_id )) { return false; }
        update_user_meta($user_id, 'title', $_POST['title']);
        update_user_meta($user_id, 'biography', $_POST['biography']);
    }
?>
