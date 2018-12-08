<?php

namespace {{namespace}}\functions;

function user_has_role ( $role, $user_id = null ) {
	if ( empty( $user_id ) ) {
		$user_id = get_current_user_id();
	}
	$user = get_userdata( $user_id );
	if ( $user ) {
		/* works with Roles and Capabilities */
		return in_array( $role, (array) $user->roles ) || user_can( $user_id, $role );
	}
	return false;
}