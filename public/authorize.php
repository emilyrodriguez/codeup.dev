<?php  
require_once '../src/auth.php';
require_once '../src/Input.php';

	function pageController() {
		session_start();
		if(!isset($_SESSION['logged_in_user'])) {
			if (!Auth::check()) {
		  		$_SESSION["message"] = "Please log in.";
				redirect("authorize.php");
				Auth::redirect("login-form.php");
  			}
		}
		return $_SESSION;
	}
	extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
	<script>
		alert("Authorized! Welcome, " + '<?= $_SESSION['logged_in_user'] ?>');
	</script>
		<a href="authorize.php?reset=1"><button class="buttons">Logout</button></a>
</body>
</html>