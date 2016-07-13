<?php
	$nouns = ['art', 'music', 'glitter', 'dragons', 'kazoos', 'mermaids', 'unicorns', 'rainbows', 'puppies', 'lasers'];
	$adjectives = ['grumpy', 'dangerous', 'miniature', 'mysterious', 'obnoxious', 'slippery', 'colassal', 'fluffy', 'magnificent', 'scattered'];
	$randomizer = $adjectives[mt_rand(0, count($adjectives) -1)]. " " . $nouns[mt_rand(0, count($nouns) -1)];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
</head>
<body>
	<div id="generator">
		<h1>Do you like... </h1>
			<?= $randomizer . "?\n"?>
	</div>
</body>
</html>