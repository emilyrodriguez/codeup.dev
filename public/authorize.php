<?php  
	function pageController() {
		session_start();
		$reset = isset($_GET['reset']) ? $_GET['reset'] : 0;
		if(!isset($_SESSION['logged_in_user'])) {
			header('Location: login-form.php');
			exit();
		} elseif ($reset == 1) {
			session_destroy(); {
				session_unset($_SESSION['logged_in_user']);
				session_regenerate_id(true);
			}
			header('Location: login-form.php');
		}
		return['reset' => $reset];
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