"use strict";
// (function() {

// left side input
	var numberButtons = document.getElementsByClassName("digits");
	function pressNumberButton() {
		for (var i = 0; i < numberButtons.length; i++) {
			numberButtons[i].addEventListener('click', sendNumberToTop);
		}
	}
	function sendNumberToTop() {
		var leftInput = document.getElementById("leftSide");
		var operator = document.getElementById("operator");
		
		if (operator.value == '') {
			leftInput.value += this.getAttribute("value");
		} else {	
			var rightInput = document.getElementById("rightSide");
			rightInput.value += this.value;
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
		var operatorInput = document.getElementById("operator");
		operatorInput.value = this.getAttribute("value");
		}
		pressSignButton();
		console.log(pressSignButton());



// 	function numInput(digits) {
// 	    // var display = document.getElementsByClassName('digits');
// 	    	clearPrevious();
// 	    if  (display.value === '0') {
// 	    	display.value = ''; 
// 	    	display.value += digit;
// 	    }
// 	}

//  	 var numberInput = document.getElementsByClassName("digits");
//  	     for(var i = 0; i < numberInput.length; i++) {
//  	         numberInput[i].addEventListener('click', storeNumber);
//  	    } 

// 	function clearDisplay() {

// 		var clearDisplay = document.getElementById('display');
// 			clearDisplay.innerHTML = "0";
// 			clearDisplay.value = '0';
// 			storedNum = '';
// 	    	calcFinished = true;
// 	    	// operation = operations.none;
// 	}
// 		if ('addEventListener'){
// 		    window.addEventListener('load', clearDisplay);
// 		}
// 		else {
// 		    window.attachEvent('onload', clearDisplay);
// 		}
	
// 	// define the term within the funciton or the global sense
// 	// do storedNum = ''; 
// 	function clearPrevious() {
// 	    var display = document.getElementById('display');
// 	    if (calcFinished) {
// 	        display.value = '0';
// 	        calcFinished = false;
// 	    }
// 	}
	
	
// 	function insertDecimal() {
// 	    var display = document.getElementById('leftSide');
// 	    	clearPrevious();
// 	    if (display.value.indexOf('.') === -1) {
// 	    	display.value += '.';
// 	}
// 	}
	
// // math operations

// 	function add() {
// 		var display = document.getElementById('operator');
// 		leftSide = leftSide + rightSide
// 	}
// 	function subtract() {
// 		var display = document.getElementById('operator');
// 		leftSide = leftSide - rightSide
// 	}

// 	function multiply() {
// 		var display = document.getElementById('operator');
// 		leftSide = leftSide * rightSide
// 	}
// 	function divide() {
// 		var display = document.getElementById('operator');
// 		leftSide = leftSide / rightSide
// 	}



// // right side output
// 	function setOperation(command) {
// 	    var display = document.getElementById('rightSide');
// 	    	calculate();
// 	    	storedNum = display.value;
// 	    if (operations.hasOwnProperty(command)) {
// 	        operation = operations[command];
// 	    }
// 	}
	
// 	function calculate() {
// 	    var display = document.getElementById('rightSide');
// 	    	display.value = operation(+ storedNum, + display.value);
// 	    	calcFinished = true;
// 	    	operation = operations.none;
// 	}
	
// // events



// // //events


//   var operatorInput = document.getElementById("signs");
//  	    for(var i = 0; i < operatorInput.length; i++) {
//  	        operatorInput[i].addEventListener('click', storeSecondInput);
//  	    }
// }());
// 	var printLeft= document.getElementsByClassName("digits");
// 	    document.getElementsByClassName("digits").addEventListener('click', printLeft);
// 	    printLeft();

