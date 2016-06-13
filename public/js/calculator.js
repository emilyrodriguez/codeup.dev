"use strict";
(function() {})
	var leftSide = document.getElementById("leftSide");
	var operator = document.getElementById("operator");
	var rightSide = document.getElementById("rightSide");

	function pressNumberButton() {
		var numberButtons = document.getElementsByClassName("digits");
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
	
	function pressSignButton() {
		var operationButtons = document.getElementsByClassName("signs");
		for (var i = 0; i < operationButtons.length; i++) {
			operationButtons[i].addEventListener('click', sendSignToTop);
		}
	}
	function sendSignToTop() {
		var operator = document.getElementById("operator");
		operator.value = this.getAttribute("value");
		}
		pressSignButton();
	
		
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
			result = parseFloat(x) - parseFloat(z);
		} else if (y == "/") {
			result = parseFloat(x) / parseFloat(z);
		} else if (y == "*") {
			result = parseFloat(x) * parseFloat(z);
		} else if (y == "%") {
			result = (parseFloat(x) * .01);
		} 




		leftSide.value = result;
		rightSide.value = "";
		operator.value = "";

	}
	 	equals();

	function clearDisplay() {
		var clearButton = document.getElementById("clear-bttn");
		clearButton.addEventListener('click', function() {
			leftSide.value = '';
			operator.value = '';
			rightSide.value = '';
		});
	}
		clearDisplay();
		


// 	function insertDecimal() {
// 	    var display = document.getElementById('leftSide');
// 	    	clearPrevious();
// 	    if (display.value.indexOf('.') === -1) {
// 	    	display.value += '.';
// 	}

