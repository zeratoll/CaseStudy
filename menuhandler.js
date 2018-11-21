// validator2r.js
//   The last part of validator2. Registers the 
//   event handlers
//   Note: This script does not work with IE8

// Get the DOM addresses of the elements and register 
//  the event handlers

      var javaNode = document.getElementById("qtyJava");
      var cafeSingleNode = document.getElementById("qtyCafe1");
      var cafeDoubleNode = document.getElementById("qtyCafe2");
      var capSingleNode = document.getElementById("qtyCap1");	  
	  var capDoubleNode = document.getElementById("qtyCap2");
      javaNode.addEventListener("change", subTotalJava, false);
      cafeSingleNode.addEventListener("change", subTotalCafe, false);
	  cafeDoubleNode.addEventListener("change", subTotalCafe, false);
      capSingleNode.addEventListener("change", subTotalCap, false);
	  capDoubleNode.addEventListener("change", subTotalCap, false);
	  