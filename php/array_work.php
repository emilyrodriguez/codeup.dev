<?php
// Reverse numbers without using a premade reverse function
  $numbers = [1, 2, 3, 4, 5];
  $size = sizeof($numbers);
  for ($i=$size - 1; $i >= 0; $i--) {
      echo $numbers[$i] . PHP_EOL;
  }

// capitalize the first letter of every word in the sentence
  var sentence = ['please excuse my dear aunt sally'];
  function ucwords(str) {
    var split = str.toLowercase().split("");
    for (var i =0; i < split.length; i++) {
      split[i] = splitString[i].charAt(0).toUppercase() + splitString[i].substring(1);
    }
    return split.join(' ');
  }
console.log(ucwords(sentence));
