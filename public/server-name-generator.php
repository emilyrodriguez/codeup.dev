<?php
function pageController() {
 	$data['nouns'] = ['art', 'music', 'glitter', 'dragons', 'kazoos', 'mermaids', 'unicorns', 'rainbows', 'puppies', 'lasers'];
 	$data['adjectives'] = ['grumpy', 'dangerous', 'miniature', 'mysterious', 'obnoxious', 'slippery', 'colassal', 'fluffy', 'magnificent', 'scattered'];
 	$data['randomize'] = $data['adjectives'][mt_rand(0, count($data['adjectives']) - 1)]. " " . $data['nouns'][mt_rand(0, count($data['nouns']) - 1)];
 		return $data;
 }
 	extract(pageController()); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
</head>
<body>
	<div id="generator">
		<h1>Do you like... </h1>
			<?= $randomize . "?\n"?>
	</div>
</body>
</html>