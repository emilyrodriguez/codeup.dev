	(function(){
	    "use strict";
	    	var names = ["Chico", "Lola", "Max", "Dexter"];
	    	console.log("There are " + names.length + " dog's names in the array.");
	
	    	console.log("For Loop:"); 
	    		for (var i = 0; i < names.length; i++) {
	    			console.log("The first dog's name at index " + i + ' is: ' + names[i]);
	    		}
	
	    	console.log("For Each Loop:"); 
	    		names.forEach(function (element, index, array) {
	    			console.log("The first dog's name at index " + index + ' is: ' + element);
	    		})
			})();
	
	
    	
  // console.log("The first name is: "names[0]);
  // console.log("The second name is: "names[1]);
  // console.log("The third name is: "names[2]);
  // console.log("The fourth name is: "names[3]);


    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.

    // TODO: Create a log statement that will log the number of elements in the names array.

    // TODO: Create log statements that will print each of the names array elements individually.

