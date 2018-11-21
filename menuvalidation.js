// validator2.js
//   An example of input validation using the change and submit 
//   events, using the DOM 2 event model
//   Note: This document does not work with IE8

// ********************************************************** //
// The event handler function for the name text box
//var check = true;

function subTotalJava(event) {
	var qty = document.getElementById("qtyJava").value;
	//alert(qty);
	var cost = qty*2.00;
	document.getElementById("subJava").value = parseFloat(cost).toFixed(2);
	totalCost();	
	//var test = document.getElementById("qtyCafe1").value;
	//alert(test);
}

function subTotalCafe(event) {
	var qty1 = document.getElementById("qtyCafe1").value;	
	var qty2 = document.getElementById("qtyCafe2").value;
	cost = qty1*2.00 + qty2*3.00;
	//alert(cost);
	document.getElementById("subCafe").value = parseFloat(cost).toFixed(2);
	totalCost();	
}

function subTotalCap(event) {
	var qty1 = document.getElementById("qtyCap1").value;	
	var qty2 = document.getElementById("qtyCap2").value;
	cost = qty1*4.75 + qty2*5.75;
	//alert(cost);
	document.getElementById("subCap").value = parseFloat(cost).toFixed(2);
	totalCost();
}

function totalCost(){
	var qtyJava = document.getElementById("qtyJava").value;
	var qtyCafe1 = document.getElementById("qtyCafe1").value;	
	var qtyCafe2 = document.getElementById("qtyCafe2").value;
	var qtyCap1 = document.getElementById("qtyCap1").value;	
	var qtyCap2 = document.getElementById("qtyCap2").value;
	total = qtyJava*2.00 + qtyCafe1*2.00 + qtyCafe2*3.00 + qtyCap1*4.75 + qtyCap2*5.75;
	document.getElementById("total").value = parseFloat(total).toFixed(2);	
}

function calculateAll(){
	subTotalJava();
	subTotalCafe();
	subTotalCap();
}

setInterval(calculateAll, 100);