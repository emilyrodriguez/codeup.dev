<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" href="CSS/my_website.css">
	</head>
	<body>
		<nav class="navbar-default">
      <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#" class="anchor_text">Emily Rodriguez</a>
            </div>
            <ul class="nav navbar-nav">
                    <li><a href="resume.html">Resume</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="ajax_blog.html">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
            </ul>

            <div class="placement">
                <form class="navbar-form navbar-left" role="search"s>
                    <div class="form-group">
                            <input type="text" class="form-control" placeholder>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    <a href="login.php" class="anchor_text">Login</a>
                    <a href="register.php" class="anchor_text">Register</a>
                </form>
            </div>
        </div>
    </nav>

		<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title" align="center">Hey there!</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="login-form-group">
			    		    <input class="login-form-control" placeholder="yourmail@example.com" name="email" type="text">
			    		</div>
			    		<br>
			    		<div class="form-group">
			    			<input class="login-form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
	</body>
</html>