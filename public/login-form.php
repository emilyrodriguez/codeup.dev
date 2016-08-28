<?php
require_once 'functions.php';
require_once 'auth.php';
require_once '../src/Input.php';
	function pageController(){
		session_start();
		$data = [];
		$data['username'] = isset($_POST['username']) ? htmlspecialchars(strip_tags($_POST['username'])) : '';
		$data['password'] = isset($_POST['password']) ? htmlspecialchars(strip_tags($_POST['password'])) : '';

		if(isset($_SESSION['logged_in_user'])) {
			header('Location: authorize.php');
			exit();
		}elseif ($data['username'] === 'guest' && $data['password'] === 'password') {
			$_SESSION['logged_in_user'] = $data['username'];
			header('Location: authorize.php');
			exit();
		} elseif ($data['username'] !== '' && $data['password'] !== '') {
			$data['message'] = 'Incorrect username or password. Try again!';
		}
		return $data;
	}
	extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    	<style>
    		h1 {
    			margin-bottom: 15px;
    		}
    		body {
			    padding-top: 120px;
			    padding-bottom: 40px;
			    background-image: url("/img/dark_embroidery.png");
			}
			form#login {
				background-color: white;
				padding-top: 10px;
							
			}
			input {
				width: 85%;
				height: 10%;
			}
			button#bttn-login {
				margin-top: 5px;
				width: 85%;
				
			}
			.container {
				width: 50%;
			}
    	</style>
</head>
<body>
	<div class="container text-center">
	    <form method="POST" id="login">
	    <h1>Login</h1>
	        <?php if (isset($message)) : ?>
	                <div class="alert alert-error">
                		<a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
            		</div>   	
            <?php endif ?>
            <div class="form-group">
	        	<input type="text" name="username" placeholder="Username" required autofocus>
	        </div>
	        <div class="form-group">
	        	<input type="password" name="password" placeholder="Password" required>
	        </div>
	        	<button type="submit" id="bttn-login"><a href="authorize.php"></a>Sign In</button>
	      	<div class="checkbox">
	        	<label><input type="checkbox" name="remember" value="1"> Remember Me</label>
	       </div>
	        <div class="form-group">
		 		<span class='text-center'><a href="/resetting/request" class="text-sm">Forgot Password?</a></span>
		 	</div>
		 	<div class="form-group">
		 	<a href="/register/" class="btn btn-default btn-block m-t-md">Create an account</a>
		 	</div>
		</form>   
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>