<?php  
require_once '../src/Input.php';

function pageController() {
	$counter = Input::has("counter") ? Input::get("counter") : 0;
	return [ "counter" => $counter ];
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pong</title>
	<link rel="stylesheet" href="css/pingpong.css">
</head>
<body id="pong">
	 	<div class="scoreboard">
	 	<h1>Pong</h1>
		<h2>Score: <?=$counter;?></h2>
		</div>
		
    	<a href="/ping.php??result=hit&amp;counter=<?=$counter + 1 ?>"><button type="button" class="button">HIT</button></a>
    	<a href="/pong.php?result=miss&amp;counter=<?=$counter = 0 ?>"><button type="button" class="button">MISS</button></a>

</body>
</html>