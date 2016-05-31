<?php 
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
	<head>
		<title>My First HTML Form</title>
	</head>
	<body>
	
		<form method="POST" action="/my_first_form.php">
		<h2>User Login</h2>
		    <div>
		        <label for="username">Username</label>
		        <input id="username" name="username" type="text" placeholder="Enter your Username">
		    </div>
		    <div>
		        <label for="password">Password</label>
		        <input id="password" name="password" type="password" placeholder="Enter your Password">
		    </div>
		    <div>
		        <input type="submit" name="submit" value="Login">
		    </div>
		</form>	
		<div>
				<h2>Compose an Email</h2>
				<label for="to">To:</label>
				<input id="to" name="to" type="text">
			</div>
			<div>
				<label for="from">From:</label>
				<input id="from" name="from" type="text">
			</div>
			<div>
		<form method="POST" action="/my_first_form.php">
				<label for="subject">Subject:</label>
				<input for="subject" name="subject" type="text">
			</div>
			<div>
				<label for="message">Message:</label>
				<textarea id="message" name="message" placeholder="Enter Message" rows="5" cols="40"></textarea>
			</div>
			<div>
				<label><input type="checkbox" name="save" value="save" checked>Save copy to sent folder?</label>
			</div>
			<div>
				<button type="send">Send</button>
			</div>
		</form>
		<form method="POST" action="/my_first_form.php">
			<h2>Multiple Choice Test</h2>
				<h3>Favorite Pizza Topping?</h3>
					<label>
						<input type="radio" name="q1" value="a">Pepperoni
					</label>
					<label>
						<input type="radio" name="q1" value="b">Veggies
					</label>
					<label>
						<input type="radio" name="q3" value="c">Canadian Bacon
					</label>
					<label>
						<input type="radio" name="q3" value="d">Peppers
					</label>
				<h3>What city do you want to visit?</h3>
					<label>
						<input type="radio" name="q2" value="a">San Francisco
					</label>
					<label>
						<input type="radio" name="q2" value="b">New York City
					</label>
					<label>
						<input type="radio" name="q2" value="c">Seattle
					</label>
					<label>
						<input type="radio" name="q2" value="d">Portland
					</label>
					<h3>Favorite way to game?</h3>
				<label for="letter"></label>
				<select id="letter" name="letter">
					<option>Playstation</option>
					<option>Xbox</option>
					<option>Wii</option>
					<option>PC</option>
				</select>
				<h3>Whic consoles do you own?</h3>
					<label><input type="checkbox" id="playstation" name="consoles[]" value="playstation">Playstation</label>
					<label><input type="checkbox" id="xbox" name="consoles[]" value="xbox">XBox</label>
					<label><input type="checkbox" id="wii" name="consoles[]" value="wii">Wii</label>
					<label><input type="checkbox" id="PC" name="consoles[]" value="computer">PC</label>
				<div>
					<button type="submit">Submit</button>
				</div>
		</form>
		<form method="POST" action="my_first_form.php">
			<h2>Select Testing</h2>
				<div>
				<label for="candy"><h3>Do you like candy?</h3></label>
				<select id="candy" name="candy">
					<option value="1">Yes</option>
					<option selected value="0">No</option>
				</select>
				</div>
				<button type="submit">Submit</button>
		</form>
	</body>
</html>