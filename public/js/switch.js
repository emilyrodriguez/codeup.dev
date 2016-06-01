	var luckyNumber = Math.floor(Math.random()* 6);
	var luckyNumber0 = 0;
	var luckyNumber1 = .10;
	var luckyNumber2 = .25;
	var luckyNumber3 = .35;
	var luckyNumber4 = .5;
	var luckyNumber5 = 1;
	var totalPurchase = 60;
	
		console.log(luckyNumber);
		switch (luckyNumber) {
			case 1:
				console.log("You get 10% off. Total: $" + (totalPurchase - (totalPurchase * luckyNumber1)));
				break;
			case 2:
				console.log("You get 25% off. Total: $" + (totalPurchase - (totalPurchase * luckyNumber2)));
					break;
			case 3:
				console.log("You get 35% off. Total: $" + (totalPurchase - (totalPurchase * luckyNumber3)));
				break;
		
			case 4:
				console.log("You get 50% off. Total: $" + (totalPurchase - (totalPurchase * luckyNumber4)));
				break;
			case 5:
				console.log("You get 100% off. Total: $" + (totalPurchase - (totalPurchase * luckyNumber5)));
				break;
			default:
				console.log("You did not recieve a discount.");
		}

	var monthNumber = Math.floor(Math.random()* 12) + 1;
		
		switch (monthNumber) {
			case 1:
				console.log("Month " + monthNumber + " is January.");
				break;
			case 2:
				console.log("Month " + monthNumber + " is February.");
				break;
			case 3:
				console.log("Month " + monthNumber + " is March.");
				break;
			case 4:
				console.log("Month " + monthNumber + " is April.");
				break;
			case 5:
				console.log("Month " + monthNumber + " is May.");
				break;
			case 6:
				console.log("Month " + monthNumber + " is June.");
				break;
			case 7:
				console.log("Month " + monthNumber + " is July.");
				break;
			case 8:
				console.log("Month " + monthNumber + " is August.");
				break;
			case 9:
				console.log("Month " + monthNumber + " is September.");
				break;
			case 10:
				console.log("Month " + monthNumber + " is October.");
				break;
			case 11:
				console.log("Month " + monthNumber + " is November.");
				break;
			case 12:
				console.log("Month " + monthNumber + " is December.");
				break;
			default:
				console.log("There aren't that many months in a year.");
		}












