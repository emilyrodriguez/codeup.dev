<?php  
function pageController() {
	$data = [];
	if (isset($_GET['counter'])){
		$data['counter'] = $_GET['counter'];
	}else {
		$data['counter'] = 0;
	}
	return $data;
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

		    <p>
		    	<a href="/ping.php?counter=<?= $counter +1; ?>"><button type="button" class="button">HIT</button></a>
		    </p>
		    <p>
		    	<a href="/pong.php?counter=<?= $counter=0; ?>"><button type="button" class="button">MISS</button></a>
		    </p>
 	</div>

</body>
</html>