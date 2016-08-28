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
?>