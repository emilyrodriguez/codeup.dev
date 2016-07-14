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
	<title>Ping</title>
</head>
<body>
	 	<div id="container">
	 	<h1>Ping</h1>
		<h2>Score: <?=$counter;?>!</h2>
		    <p>
		    	<a href="/pong.php?counter=<?= $counter +1; ?>"><button type="button" class="button">Hit!</button></a>
		    </p>
		    <p>
		    	<a href="/pong.php?counter=<?= $counter-$counter; ?>"><button type="button" class="button">Miss!</button></a>
		    </p>
 	</div>

</body>
</html>