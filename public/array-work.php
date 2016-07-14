<?php
// write function removing all vowels

    $letters = ['a','b','c','d','e','f','g','h','i'];
    $vowels = ['a','e','i','o','u'];

    $result = array_diff($letters, $vowels);
    
    function disemvowel ($letters, $vowels) {
	    $result = str_replace($vowels, "", implode('', $letters));
	    $letters = str_split($result);
    return $letters;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Disem-vowel</title>
	<style>
		p {
			font-size: 1.25em;
		}
		#one {
			margin-left: 15px;
		}
		#two {
			margin-left: 35px;
		}
		#three {
			margin-left: 55px;
		}
	</style>
</head>
<body>
	<h1>Don't you hate vowels? I do.</h1> 
	<h2>They're in everything!</h2>
	<h3>Even in this array!</h3>
		<p><?php var_dump($letters); ?></p>
	<h3>Here are the culprits!</h3>
		<p><?php var_dump($vowels); ?></p>
		<p><b>Time to</b></p> 
		<p id= 'one'>( •_•)</b></p>
		<p id= 'two'>( •_•)>⌐■-■</b></p>
		<p id= 'three'>	(⌐■_■)</b></p>
		<p><b>disem-vowel...</b></p>
	<p><?php var_dump($result); ?></p>
	<h3>Tht's bttr<h3>
</body>
</html>