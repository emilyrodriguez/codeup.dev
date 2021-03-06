<?php
	function pageController() {
		session_start();
		$data = [];
		$data['message'] = "Your guess:";
		$data['guess'] = isset($_POST['guess']) ? htmlspecialchars(strip_tags($_POST['guess'])) : '';
		$data['selectedNumber'] = isset($_SESSION['number']) ? $_SESSION['number'] : mt_rand(1, 100);
		$_SESSION['number'] = $data['selectedNumber'];
		$reset = isset($_GET['reset']) ? $_GET['reset'] : 0;
		if ($reset == 1) {
			session_destroy();
			session_unset($_SESSION['number']);
			session_regenerate_id(true);
			header('Location: high-low.php');
			$_POST['guess'] = '';
		}

			if ($data['guess'] == "") {
				$data['message'] = "Enter a number between 1 and 100";
			} elseif ($data['guess'] < $data['selectedNumber']) {
				$data['message'] = "Higher!";
			} elseif ($data['guess'] > $data['selectedNumber']) {
				$data['message'] = "Lower!";
			} elseif ($data['guess'] == $data['selectedNumber']) {
				$data['message'] = "You Win!!";
			}
		
		return $data;
	}
		extract(pageController());
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
            integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
            crossorigin="anonymous"
        >
        <title>High-Low game</title>
        <!--[if lt IE 9]>
              <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
              </script>
              <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
              </script>
        <![endif]-->
        <style>
        	button.btn.btn-primary {
        		margin-bottom: 10px;
        	}
        </style>
    </head>
    <body>
        <div class="container">
            <header class="page-header">
                <h1>High-Low Game</h1>
                <h2><?=$message;?></h2>
            </header>
            <form method="post">
                <div class="form-group">
                    <label for="guess">Guess</label>
                    <input
                        type="number"
                        class="form-control"
                        name="guess"
                        id="guess">
                </div>
                <button type="submit" class="btn btn-primary">
                    Guess!!
                </button>
            </form>
            <div>
            	<a href="high-low.php?reset=1" class="btn btn-primary">Start Over</a>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"
        ></script>
    </body>
</html>