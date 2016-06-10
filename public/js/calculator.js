"use strict";

var storeNumber = function(event) {
    if (operator != "") {
        var numberInput = document.getElementById("firstNumber");
        numberInput.value += this.getAttribute('data-value');
    } else { 
        var numberInput = document.getElementsById("secondNumber");
        numberInput.value = this.getAttribute('data-value');
    }
}
var storeSecondInput = function(event) {
    var addOperator = document.getElementById("operator");
    addOperator.value += this.getAttribute('data-value');
}


//events


var numberInput = document.getElementsByClassName("numberButton");
    for(var i = 0; i < numberInput.length; i++) {
        numberInput[i].addEventListener('click', storeNumber , false);
    }
var operatorInput = document.getElementsByClassName("operatorButtons");
    for(var i = 0; i < operatorInput.length; i++) {
        operatorInput[i].addEventListener('click', storeSecondInput , false);
    }