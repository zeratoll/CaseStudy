// validator2.js
//   An example of input validation using the change and submit 
//   events, using the DOM 2 event model
//   Note: This document does not work with IE8

// ********************************************************** //
// The event handler function for the name text box
var check = true;

function chkName(event) {

// Get the target node of the event

  var myName = event.currentTarget;

// Test the format of the input name 
//  Allow the spaces after the commas to be optional
//  Allow the period after the initial to be optional

  var pos = myName.value.search(/^[A-Za-z ]*$/);
//  if (pos == 0) {
//	  alert("CORRECT LOL");
//  }
  if (pos != 0) {
    alert("The name you entered (" + myName.value + 
          ") is not in the correct form. \n" +
          "The correct form is in only Alphabets and spaces.\n");

    myName.focus();
    myName.select();
	document.getElementById("btnSubmit").disabled = true;
	return false;
  } 
  else {
	document.getElementById("btnSubmit").disabled = false;	  
  }
}

// ********************************************************** //
// The event handler function for the phone number text box

function chkEmail(event) {

// Get the target node of the event

  var myEmail = event.currentTarget;

// Test the format of the input phone number
//\.[A-Za-z0-9]+\.*[A-Za-z0-9]*\.*[A-Za-z0-9]{2,3}$ 
//  var pos = myEmail.value.search(/^[A-Za-z-.]+\@[A-Za-z0-9]+\.);
//  var pos = myEmail.value.search(/^[A-Za-z-.]+\@[A-Za-z0-9]+\.[A-Za-z0-9]+/); 
  var pos = myEmail.value.search(/^[A-Za-z-.]+\@[A-Za-z0-9]+\.*[A-Za-z0-9]*\.*[A-Za-z0-9]*\.[A-Za-z0-9]{2,3}$/);   
  if (pos != 0) {
    alert("The email address you entered (" + myEmail.value +
          ") is not in the correct form.\n");
    myEmail.focus();
    myEmail.select();
	document.getElementById("btnSubmit").disabled = true;	
	return false;


  } 
  else {
	document.getElementById("btnSubmit").disabled = false;	  
  }  
}

// ********************************************************** //
// The event handler function for the date text box

function chkDate(event) {

// Get the target node of the event

  var myDate = event.currentTarget;

// Test the format of the input phone number
 
  var currentDate = new Date();
  //var currentDateMillisecond = currentDate.getMilliseconds();
  var dayNum = (currentDate.getDate()+1);
  if (dayNum < 10) {
	  dayNum = "0"+dayNum;
  }
//  var tmrDate = currentDate.getFullYear()+"-"+(currentDate.getMonth()+1)+"-"+(currentDate.getDate()+1);
  var tmrDate = currentDate.getFullYear()+"-"+(currentDate.getMonth()+1)+"-"+dayNum;
  
  if (myDate.value < tmrDate) {
    //alert("Date must not be today or earlier. Earliest possible date should be tmrDate"  + tmrDate + " myDate.value " + myDate.value + " dayNum " + dayNum + " testDate " + testDate);
	document.getElementById("btnSubmit").disabled = true;	
	alert("Date must not be today or earlier. Earliest possible date should be "  + tmrDate);
    myEmail.focus();
    myEmail.select();		
	return false;
  }
  else {
	document.getElementById("btnSubmit").disabled = false;	  
  }    
}

function chkExperience(event) {

// Get the target node of the event

  var myExperience = event.currentTarget;

// Test the format of the input phone number
 
  var text = myExperience.value;
  if (text == null) {
	  alert("Please fill in your relevant experiences.");
	  return false;
  }
  
}

/*
function buttonEnabling(){
	var name = chkName();
	var email = chkEmail();
	var date = chkDate();
	var experience = chkExperience();
	
	if (name == false || email == false || date == false || experience == false) {
		document.getElementById("btnSubmit").disabled = true;
	}
	else {
		document.getElementById("btnSubmit").disabled = false;		
	}
}
*/