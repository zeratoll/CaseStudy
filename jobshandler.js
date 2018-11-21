// validator2r.js
//   The last part of validator2. Registers the 
//   event handlers
//   Note: This script does not work with IE8

// Get the DOM addresses of the elements and register 
//  the event handlers

      var customerNode = document.getElementById("CustName");
      var emailNode = document.getElementById("CustEmail");
      var dateNode = document.getElementById("CustDate");
      var experienceNode = document.getElementById("CustExperience");	  
      customerNode.addEventListener("change", chkName, false);
      emailNode.addEventListener("change", chkEmail, false);
      dateNode.addEventListener("change", chkDate, false);	  
      experienceNode.addEventListener("change", chkExperience, false);
