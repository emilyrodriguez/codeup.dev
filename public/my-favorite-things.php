<?php 
 	$favorites = ['video games', 'trivia', 'food', 'sleeping', 'pokemon catching'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>My Favorite Things</title>
 	<style>
 		h1 {
 			text-align: center;
 		}
 		#favorites, th, td {
 			border: 1px solid black;
 			border-collapse: collapse;
 			width: 100%;

 		}
 		#container {
 			margin-left: 25%;
 			margin-right: 25%;
 		}
 		tr:nth-child(even) {
 			background-color: #d3d3d3;
 		}
 		th, td {
 			font-size: 1.5em;
 		}
 	</style>
 </head>
 <body>
 	<div id= "container">
	 	<h1>I'm pretty fond of some stuff</h1>
	 	<table id="favorites">
		 	<ul>
		 		<tr>
		 			<th>Actually I'm pretty boring, but for the sake of this exercise...</th>
		 		</tr>
		 	<?php foreach ($favorites as $favorite) { ?>
		 		<tr>
		 			<td><?php echo $favorite; ?></td>
		 		</tr>
		 	<?php } ?>
		 	</ul>
	 	</table>
 	</div>
 </body>
 </html>