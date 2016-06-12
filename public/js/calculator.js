"use strict";
(function() {
// left side input
	function clearDisplay() {
	    var display = document.getElementById('display');
	    	display.value = '0';
	    	storedNum = '0';
	    	calcFinished = true;
	    	operation = operations.none;
	}
	
	function clearPrevious() {
	    var display = document.getElementById('display');
	    if (calcFinished) {
	        display.value = '0';
	        calcFinished = false;
	    }
	}
	
	function numInput(digits) {
	    var display = document.getElementById('leftSide');
	    	clearPrevious();
	    if (display.value === '0') display.value = '';
	    	display.value += digit;
	}
	
	function insertDecimal() {
	    var display = document.getElementById('leftSide');
	    	clearPrevious();
	    if (display.value.indexOf('.') === -1) display.value += '.';
	}
	
// math operations

	function add() {
		var display = document.getElementById('operator');
		setOperation
	}
	function subtract() {
		var display = document.getElementById('operator');
	}

	function multiply() {
		var display = document.getElementById('operator');
	}
	function divide() {
		var display = document.getElementById('operator');
	}



// right side output
	function setOperation(command) {
	    var display = document.getElementById('rightSide');
	    	calculate();
	    	storedNum = display.value;
	    if (operations.hasOwnProperty(command))
	        operation = operations[command];
	}
	
	function calculate() {
	    var display = document.getElementById('rightSide');
	    	display.value = operation(+ storedNum, + display.value);
	    	calcFinished = true;
	    	operation = operations.none;
	}
	
// events
	if ('addEventListener')
	    window.addEventListener('load', clearDisplay);
	else
	    window.attachEvent('onload', clearDisplay);
	}());
	





// 	 var storeNumber = function(event) {
// 		 var operators = document.getElementById("signs");
// 		 if (operators !== "signs") {
// 			 var numberInput = document.getElementById("leftSide");
// 			 numberInput.value += this.getAttribute('data-value');
// 		 } else {
// 			 var numberInput = document.getElementById("signs");
// 			 numberInput.value = this.getElementById('output-area-center');
// 		 }
			
// 	 }
	

// //events


// 	var numberInput = document.getElementsByClassName("digits");
// 	    for(var i = 0; i < numberInput.length; i++) {
// 	        numberInput[i].addEventListener('click', storeNumber);
// 	    }
// 	    console.log(numberInput);

// 	var operatorInput = document.getElementById("signs");
// 	    for(var i = 0; i < operatorInput.length; i++) {
// 	        operatorInput[i].addEventListener('click', storeSecondInput);
// 	    }
// 	    console.log(operatorInput);

// 	var printLeft= document.getElementsByClassName("digits");
// 	    document.getElementsByClassName("digits").addEventListener('click', printLeft);
// 	    printLeft();






