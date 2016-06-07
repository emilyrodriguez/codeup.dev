	"use strict";
	// customer name
	// product name
	 // product price
	 // one more?
	 // product name
	 // product price
	 // total = sum of all the prices
	 // apply discount
	
	 // bonus
	 // another customer?
	
	 (function() {
	 	var discount = .35;
	 	var discountCostRequired = 200;
	 	var moreCustomers;

	
	 	function collectInfo(){
	 		var customer = {
	 		name: '',
	 		productName: [],
	 		productsToArray: function (product) {
	 			this.productName.push(product);
	 			return this.productName;
	 		},
	 		productPrice: [],
	 		priceToArray: function (price) {
	 			this.productPrice.push(price);
	 			return this.productPrice;
	 		},
	 		productTotal: function () {
	 			var totalPrice = 0;
	 			for (var index = 0; index < this.productPrice.length; index++){
	 				totalPrice = totalPrice + Number(this.productPrice[index]);
	 			} return totalPrice;
	 		}
	 	};

	 		var requestName = prompt('Please enter your name.');
	 		do {
	 			customer.name = requestName;
				var productMessage = prompt('Please enter the product name.');
				customer.productsToArray(productMessage);
				var priceMessage = prompt('Please enter the product price.');
				customer.priceToArray(priceMessage);
				var moreProducts = confirm('Do you have more items?');
			} while (moreProducts);
	
			var totalPrice = customer.productTotal();
			
	 		if (totalPrice >= discountCostRequired) {
	 			totalPrice = totalPrice - (discount * totalPrice);
	 			alert("35% discount recieved. New price $" + totalPrice);
	 		} else {
	 			alert("Spend $" + (discountCostRequired - totalPrice) + " to get 35% off your purchase!" + "Your total: $" + totalPrice );
	 		}
			}
	
				do {
					collectInfo();
					var moreCustomers = confirm("Are there more customers?");
				} while (moreCustomers);
	})();






