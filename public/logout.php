<?php
require_once "functions.php";
require_once 'auth.php';
require_once '../src/Input.php';
function pageController($location) {
	session_start();
	clearSession();
	redirect("login-form.php");
}
pageController();
?>