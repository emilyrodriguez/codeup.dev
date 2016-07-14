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
 </head>
 <body>
 	<div id="container">
		<h2>We've counted to <?=$counter;?>!</h2>
		    <p>
		    	<a href="/counter.php?counter=<?= $counter +1; ?>">Up!</a>
		    </p>
		    <p>
		    	<a href="/counter.php?counter=<?= $counter-1; ?>">Down!</a>
		    </p>
 	</div>
 </body>
 </html>