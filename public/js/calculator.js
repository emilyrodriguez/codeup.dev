"use strict";
		var leftSide = document.getElementById("leftSide");
		var operator = document.getElementById("operator");
		var rightSide = document.getElementById("rightSide");

	var numberButtons = document.getElementsByClassName("digits");
	function pressNumberButton() {
		for (var i = 0; i < numberButtons.length; i++) {
			numberButtons[i].addEventListener('click', sendNumberToTop);
		}
	}
	function sendNumberToTop() {
		

		if (operator.value == '') {
			leftSide.value += this.getAttribute("value");
		} else {	
			
			rightSide.value += this.getAttribute("value");
		}
		}
		pressNumberButton();
	
	var operationButtons = document.getElementsByClassName("signs");
	function pressSignButton() {
		for (var i = 0; i < operationButtons.length; i++) {
			operationButtons[i].addEventListener('click', sendSignToTop);
		}
	}
	function sendSignToTop() {
		var operator = document.getElementById("operator");
		operator.value = this.getAttribute("value");
		}
		pressSignButton();


	// function clearDisplay() {

 // 		var clearDisplay = document.getElementById('display');
 // 			clearDisplay.innerHTML = "0";
 // 			clearDisplay.value = '0';
 	
 // 		if (leftSide !== '' && rightSide !== ''){
 // 		    window.addEventListener('click', clearDisplay);
 // 		}
 // 		else {
 // 		    window.attachEvent('click', clearDisplay);
 // 		}
	// }
	
// math operations
	 function equals() {
	 	var equalsButton = document.getElementById("equals");
	 	equalsButton.addEventListener('click', math);
	 }
	function math() {
		var x = leftSide.value;
		var y = operator.value;
		var z = rightSide.value;
		var result;
	
		if (y == "+") {
			result = parseFloat(x) + parseFloat(z);
		} else if (y == "-") {
			result = x - z;
		} else if (y == "/") {
			result = x / z;
		} else if (y == "*") {
			result = x * z;
		}
		leftSide.value = result;
		console.log(result);

	 }
	 	equals();

// 	function insertDecimal() {
// 	    var display = document.getElementById('leftSide');
// 	    	clearPrevious();
// 	    if (display.value.indexOf('.') === -1) {
// 	    	display.value += '.';
// 	}
// 	function calculate() {
// 	    var display = document.getElementById('rightSide');
// 	    	display.value = operation(+ storedNum, + display.value);
// 	    	calcFinished = true;
// 	    	operation = operations.none;
// 	}
