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
 	<title>Counter</title>
 	<style>
 		.button {
			border-radius: 4px;
			border: solid 1px #20538D;
			text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
			box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.2);
		    background: #4479BA;
		    color: #FFF;
		    text-decoration: none;
		    padding: 10px;
		    width: 70px;
		    margin: 10px;
		    font-size: 1em;
 		}
 	</style>
 </head>
 <body>
 	<div id="container">
		<h1>We've counted to <?=$counter;?>!</h1>
		    <p>
		    	<a href="/counter.php?counter=<?= $counter +1; ?>"><button type="button" class="button">Up!</button></a>
		    </p>
		    <p>
		    	<a href="/counter.php?counter=<?= $counter-1; ?>"><button type="button" class="button">Down!</button></a>
		    </p>
 	</div>
 </body>
 </html>