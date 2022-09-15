<?php
/**
 * Set the choices with a list of users
 */
function acf_load_user_field_choices( $field ) {
	// reset choices
	$field['choices'] = array();
	// default value
	$field['choices'][0] =array(
		null => 'None'
	);
	// get all users
	$users = get_users();
	// populate choices with users
	foreach ($users as $user) {
		$userLink = get_author_posts_url($user->ID);
		$userTitle = get_user_meta($user->ID, 'title', true);
		$userDetails = '{"name": "'.$user->first_name.' '.$user->last_name.'", "title": "'.$userTitle.'", "image": "'.get_avatar_url($user->ID).'",  "link": "'.$userLink.'"}';
		$field['choices'][$userDetails] = $user->first_name .' '. $user->last_name .' ('. $userTitle .')';
	}
	
	return $field;
}

add_filter('acf/load_field/name=primary_approver', 'acf_load_user_field_choices');
add_filter('acf/load_field/name=secondary_approver', 'acf_load_user_field_choices');
?>