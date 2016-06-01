	 var gradeOne = 70;
	 var gradeTwo = 80;
	 var gradeThree = 95;
	 var average = (gradeOne + gradeTwo + gradeThree) / 3;
	 var awesomeGrade = 80;
	 
		 ;
		 if (average >= awesomeGrade) {
			console.log("You're awesome!");
		 } else {
			console.log("You need to practice more.");
		 }
		 
	  var offerMin = 200;
	  var discount = .35;
	  var cameron = 180;
	  var ryan = 250;
	  var george = 320;
	  

			if (cameron < 200) {
			console.log("You do not qualify for our offer. Spend $" + (offerMin - cameron) + " to get 35% off your purchase!");
			} else	{
				console.log("You qualify for 35% off your purchase! Your new total is $" + (cameron - (cameron * .35)).toFixed(2) + "!");
				console.log ("Saved: $" + (cameron * discount).toFixed(2));
			}
			if (ryan < 200) {
			console.log("You do not qualify for our offer. Spend $" + (offerMin - ryan) + " to get 35% off your purchase!");
			} else	{
				console.log("You qualify for 35% off your purchase! Your new total is $" + (ryan - (ryan * .35)).toFixed(2) + "!");
				console.log ("Saved: $" + (ryan * discount).toFixed(2));
			}

			if (george < 200) {
			console.log("You do not qualify for our offer. Spend $" + (offerMin - george) + " to get 35% off your purchase!");
			} else	{
				console.log("You qualify for 35% off your purchase! Your new total is $" + (george - (george * .35)).toFixed(2) + "!");
				console.log ("Saved: $" + (george * discount).toFixed(2));
			}


			
			 var flipACoin = Math.floor(Math.random()* 2);

				console.log(flipACoin);

				 if (flipACoin) {
				console.log("Buy a house");

				 } else {
				console.log("Buy a car");
				}

				console.log((flipACoin) ? 'Buy a house' : 'Buy a car');
						