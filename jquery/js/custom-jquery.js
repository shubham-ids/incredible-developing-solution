$(document).ready(function(){ 
	/* Called the Function in Input Field */
	$('#inputfName').change(function(){
	  requireField(this , '#input-Fname' ); // Display the Required Message in First Name
	});
	$('#inputfName').keyup(function(){
	  notAllowedNumber(this , '#input-Fname' ); // Display the Error Message in Not Allowed Number in First Name
	});	
	$('#inputlName').change(function(){
		requireField(this , '#input-Lname'); // Display the Required Message in Last Name 
	});
	$('#inputlName').keyup(function(){
		notAllowedNumber(this , '#input-Lname'); // Display the Error Message in Not Allowed Number in Last Name
	});	
	$('#inputEmail').change(function(){
	    requireField(this , '#input-Email' ); // Display the Required Message in Email
	});
		$('#inputEmail').keyup(function(){
	    EmailValidation(this , '#input-Email' ); // Display the Email Validation Message
	});
	$('#inputPassword').change(function(){
		requireField(this , '#input-password'); // Display the Required Message in Password
	});
	$('#inputPassword').keyup(function(){
		passwordValidation(this , '#input-password'); // Display The Password Min or Max Length 
	});

 /*
 * This Function is used to print the Error Message by blank text
 */
 function requireField(input , ErrorId){
  if($(input).val() ==""){
    $(ErrorId).html('This field is required');
    $(ErrorId).addClass('text-danger');
    return;
  }
}

/*
*  This Function is used to print the Error Message by not allowed Number
*/
  function notAllowedNumber(input , ErrorId){
  	var notAllowedCharacter = ["+","-","0","1","2","3","4","5","6","7","8","9"];
    $(ErrorId).html('');
    $(ErrorId).addClass('text-success');  	
  	var InputValue = $(input).val();
  	for(var i=0; i< InputValue.length; i++){
 			if( notAllowedCharacter.indexOf(InputValue[i]) !== -1  ){
		    $(ErrorId).html('Not allowed the number please insert the valid number');
		    $(ErrorId).addClass('text-danger');
    		return;
 			}
		}
  	return;
 	}
/*
* This Function is Used to print Email Validation
*/
function EmailValidation(input , ErrorId){
	var specialCharacters = "@ .";
  $(ErrorId).html('');
  $(ErrorId).addClass('text-success');  	
	var InputValue = $(input).val();
	// Find the " @ . " is not insert the First Number
	if( specialCharacters.indexOf(InputValue[0]) !== -1 ){
		$(ErrorId).html("An error occured while checking the email authentication status for :"+InputValue);
		$(ErrorId).addClass('text-danger');
		return;
	}
	// Display the Message for Include the @
  if(InputValue.indexOf("@") == -1 ){
  	$(ErrorId).html("Please include an '@'");
    return;
  }	
  // Display the Message for Include the .
  if(InputValue.indexOf(".") == -1){
  	$(ErrorId).html("Please Enter the part of following @ '.'");
    return;     
  } 
   // isme yeeh find ho raha hai ke . @ ke sth he to nhi aa raha eg : @.
   if( InputValue.indexOf('.') == InputValue.indexOf('@')+1 ){
   	  $(ErrorId).html(" '.' is used at wrong position: "+ InputValue);
      return;
   }
  // Checked the @. is not insert the last digit 
  if(  specialCharacters.indexOf( InputValue[ InputValue.length -1] ) !== -1 ){
    $(ErrorId).html("Invalid Email: "+InputValue);
    return;
  }
}
/*
* This function is used to two perameter
* Checked the blank filed
* Checked the Min and Max value
* Find the Uppercase value 
* Find the Special character 
*/
  function passwordValidation(input, ErrorId){
    $(ErrorId).html('');
    $(ErrorId).addClass('text-success');  	
	  var InputValue = $(input).val();   
      if(InputValue.length < 8){
      	$(ErrorId).html("Min character allowed are 8");
        return;
      }
      if(InputValue.length > 15){
      	$(ErrorId).html("Max character allowed are 15");
        return;
      }  
  }     
});
