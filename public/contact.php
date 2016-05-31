<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
	<head>
		<title>Contact Me</title>
		<!-- Bootstrap Content -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<!-- Custom CSS -->
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
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
            </ul>

            <div class="placement">
                <form class="navbar-form navbar-left" role="search"s>
                    <div class="form-group">
                            <input type="text" class="contact-form-control" placeholder>
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
			<div class="col-sm-4">
			<h3 id=contact-heading>Talk to me</h3>
				<hr>
				<address>
				<strong>Email:</strong> <a href="mailto:#"> rodriguez.emily1993@gmail.com</a><br><br>
				<strong>Phone:</strong> (210)459-3305
				</address>
		</div>
			    
		<div class="col-sm-8 contact-form">
			<form id="contact" method="post" class="form" role="form">
			<div class="row">
			<div class="col-xs-6 col-md-6 form-group">
				<input class="contact-form-control" id="name" name="name" placeholder="Name" type="text"			 required autofocus />
			</div>
			<div class="col-xs-6 col-md-6 form-group">
				<input class="contact-form-control"" id="email" name="email" placeholder="Email" type="			email" required />
			</div>
			</div>
				<textarea class="form-control" id="message" name="message" 	placeholder="Message"			 rows="5"></textarea>
				<br />
			<div class="row">
			<div class="col-xs-12 col-md-12 form-group">
				<button class="btn btn-primary pull-right" type="submit">Submit</button>
			</form>
			</div>
		</div>
	</body>
</html>