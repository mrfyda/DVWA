<?php

// Is there any input?
if ( !is_null ($defaults) ) {

	# White list the allowable languages
	switch ($defaults) {
		case "French":
		case "English":
		case "German":
		case "Spanish":
			# ok
			break;
		default:
			header ("location: ?default=English");
			exit;
	}
}

?>
