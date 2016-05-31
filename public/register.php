<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


		<link rel="stylesheet" href="CSS/my_website.css">
	</head>
	<body>

	<!-- <div id="navbar-default"> -->
		<nav class="navbar-default">
      <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#" class="anchor_text">Emily Rodriguez</a>
            </div>
            <ul class="nav navbar-nav">
                    <li><a href="resume.html">Resume</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="blog.html">Blog</a></li>
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


		<div class="login-container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Registration</h3>
				
				<div class="form-group col-lg-12">
					<label>Username</label>
					<input type="" name="" class="form-control" id="" value="" required="">
				</div>
				
				<div class="form-group col-lg-12">
					<label>Password</label>
					<input type="password" name="" class="form-control" id="password" value="" required>
				</div>

				<div class="form-group col-lg-12">
					
					<label>Repeat Password</label>
					<input type="password" name="" class="form-control" id="password" value="" required>
				</div>

								
				<div class="form-group col-lg-12">
					
					<label>Email Address</label>
					<input type="email" name="email" class="form-control" id="email" value="" required>
				</div>		

				<div class="col-sm-6">
					<input type="checkbox" class="checkbox">Send notifications to this email
				</div>

				<div class="col-sm-6">
				<button type="submit" class="btn pull-right" href="register.php">Register</button>	
				</div>

				</div>
				</div>
			</section>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>