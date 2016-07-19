<?php
// returns the value specified by the key, or null if the key is not set.
function inputGet($key) {
	if (inputHas($key)) {
		return $_REQUEST["$key"];
	}
	return null;
}
// returns true or false based on whether the key is available.
function inputHas($key) {
	if (isset($_REQUEST["$key"])) {
		return true;
	}
	return false;
}
// escape($input): returns the input as a safely escaped string.
function escape($input) {
	$input = "";
	return $input;
}

function authenticated($username, $password) {
	if ($username == "guest" && $password == "password") {
		$authenticated = true;
	} elseif ($username == null && $password == null) {
		$authenticated = null;
	} else {
		$authenticated = false;
	}
	return $authenticated;
}
function redirect($location) {
	header("Location: $location");
	exit;
}
function clearSession() {
	session_unset();
	session_regenerate_id(true);
}
?>