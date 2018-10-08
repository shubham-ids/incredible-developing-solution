$(document).ready(function(){ 
	/* Called the Function in Input Field */
	$('#inputfName').change(function(){
	  requireField(this , '#input-Fname' ,'#inputfName'); // Display the Required Message in First Name
	});
	$('#inputfName').keyup(function(){
	  notAllowedNumber(this , '#input-Fname' , '#inputfName'); // Display the Error Message in Not Allowed Number in First Name
	});	
	$('#inputlName').change(function(){
		requireField(this , '#input-Lname' , '#inputlName'); // Display the Required Message in Last Name 
	});
	$('#inputlName').keyup(function(){
		notAllowedNumber(this , '#input-Lname' , '#inputlName'); // Display the Error Message in Not Allowed Number in Last Name
	});	
	$('#inputEmail').change(function(){
	    requireField(this , '#input-Email' , '#inputEmail' ); // Display the Required Message in Email
	});
    $('#inputEmail').blur(function(){
      requireField(this , '#input-Email' , '#inputEmail' ); // Display the Required Message in Email
  });
		$('#inputEmail').keyup(function(){
	    EmailValidation(this , '#input-Email' , '#inputEmail' ); // Display the Email Validation Message
	});
	$('#inputPassword').change(function(){
		requireField(this , '#input-password' , '#inputPassword'); // Display the Required Message in Password
	});
    $('#inputPassword').blur(function(){
    requireField(this , '#input-password' , '#inputPassword'); // Display the Required Message in Password
  });
	$('#inputPassword').keyup(function(){
		passwordValidation(this , '#input-password' , '#inputPassword'); // Display The Password Min or Max Length 
	});
  $('#inputQualification').blur(function(){
    requireField(this , '#input-qualification' , '#inputQualification'); // Display The Required Message  in qualification
  });
    $('#inputQualification').change(function(){
    requireField(this , '#input-qualification' ,'#inputQualification' ); // Display The Required Message in qualification
  });
    $('#inputAddress').blur(function(){
    requireField(this , '#input-address' , '#inputAddress'); // Display The Required Message  in qualification
  });  
 /*
  * This function is used to display the error in text border
  */

  function ErrorBorder(textErrorId , ErrorId){
    // Display error message Id
    $(ErrorId).addClass('text-danger');
    //Display error border Id
    $(textErrorId).removeClass('is-valid');
    $(textErrorId).addClass('is-invalid');   
  }

 /*
  * This function is used to display the success in text border
  */

  function SuccessBorder(textErrorId , ErrorId){
   // Display Success message Id 
    $(ErrorId).html('');
    $(ErrorId).addClass('text-success');
   // Display Success Border Id 
    $(textErrorId).removeClass('is-invalid');     
    $(textErrorId).addClass('is-valid');  
  }

 /*
 * This Function is used to print the Error Message by blank text
 */
 function requireField(input , ErrorId , textErrorId){
  SuccessBorder(textErrorId , ErrorId);
  if($(input).val() ==""){
    $(ErrorId).html('This field is required');
    $(ErrorId).addClass('text-danger');
    ErrorBorder(textErrorId , ErrorId);
    return;
  }
}

/*
*  This Function is used to print the Error Message by not allowed Number
*/
  function notAllowedNumber(input , ErrorId , textErrorId){
  	var notAllowedCharacter = ["+","-","0","1","2","3","4","5","6","7","8","9"];
    SuccessBorder(textErrorId , ErrorId);
  	var InputValue = $(input).val();
  	for(var i=0; i< InputValue.length; i++){
 			if( notAllowedCharacter.indexOf(InputValue[i]) !== -1  ){
		    $(ErrorId).html('Just filled by character : '+InputValue);
        ErrorBorder(textErrorId , ErrorId);         
    		return;
 			}
		}
  	return;
 	}
/*
* This Function is Used to print Email Validation
*/
function EmailValidation(input , ErrorId , textErrorId){
	var specialCharacters = "@ .";
  SuccessBorder(textErrorId , ErrorId); 	
	var InputValue = $(input).val();
	// Find the " @ . " is not insert the First Number
	if( specialCharacters.indexOf(InputValue[0]) !== -1 ){
		$(ErrorId).html("An error occured while checking the email authentication status for :"+InputValue);
		ErrorBorder(textErrorId , ErrorId);
		return;
	}
	// Display the Message for Include the @
  if(InputValue.indexOf("@") == -1 ){
  	$(ErrorId).html("Please include an '@'");
    ErrorBorder(textErrorId , ErrorId);
    return;
  }	
  // Display the Message for Include the .
  if(InputValue.indexOf(".") == -1){
  	$(ErrorId).html("Please Enter the part of following @ '.'");
    ErrorBorder(textErrorId , ErrorId);
    return;     
  } 
   // isme yeeh find ho raha hai ke . @ ke sth he to nhi aa raha eg : @.
   if( InputValue.indexOf('.') == InputValue.indexOf('@')+1 ){
   	  $(ErrorId).html(" '.' is used at wrong position: "+ InputValue);
      ErrorBorder(textErrorId , ErrorId);
      return;
   }
  // Checked the @. is not insert the last digit 
  if(  specialCharacters.indexOf( InputValue[ InputValue.length -1] ) !== -1 ){
    $(ErrorId).html("Email should be valid: "+InputValue);
    ErrorBorder(textErrorId , ErrorId);
    return;
  }
}
/*
* This function is used to three perameter
* Checked the blank filed
* Checked the Min and Max value
* Find the Uppercase value 
* Find the Special character 
*/
  function passwordValidation(input, ErrorId , textErrorId){
    SuccessBorder(textErrorId , ErrorId);   	
	  var InputValue = $(input).val();   
      if(InputValue.length < 8){
      	$(ErrorId).html(" Password at least 5 character");
        ErrorBorder(textErrorId , ErrorId);
        return;
      }
      if(InputValue.length > 15){
      	$(ErrorId).html("Max character allowed are 15");
        ErrorBorder(textErrorId , ErrorId);
        return;
      }  
  }   

});
