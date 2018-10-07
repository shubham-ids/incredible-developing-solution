  </body>
  <script type="text/javascript">
    //Validation Requirment
    /*
    * This function is used to validation required field 
    * this function which uesd two perameters 
       => First perameter is used to given the input
       => Second perameter is used to display the error message using HTML ID
    * 
    */
  function validateRequired(input, errorId){
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = "";
    if(input.value === ""){
       errorElement.innerHTML = "This field is required";
       return;
    }    
  }

  /*
  * The function is used to  display the blank error validation
  *
  *
  */
   function genderRequired(value , errorId){
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = "";
    var maleId  = document.getElementById('maleRadio').checked;
    var fmaleId = document.getElementById('femaleRadio').checked;
    var otherId = document.getElementById("otherRadio").checked;
    if( maleId == true || fmaleId == true || otherId == true){
      return;
    }
    errorElement.innerHTML = "This field is required";
   }
    /*
   *
   * Parameter : 
   *  value    : Input string+
   * 
   *  Return   : boolean
   *    true  : If it has a single uppercase character
   *    false : If it has no uppercase character
   */
  function findUpperCaseWithCustomMatching(value){
    var upperCaseArray = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    var testString = value;
    var counter = 0;
    var flag = false;
    for(var i= 0 ; i < testString.length; i++){
      for(var y=0; y < upperCaseArray.length; y++){
        if(testString[i] == upperCaseArray[y] ){
          //console.log('we found one upper case i.e' , upperCaseArray[y] );
          flag = true;
          break;
        }
      }
      if(flag == true){
        break;
      }
    }
    return flag;
  }
  /*
   *
   * Parameter : 
   *  value    : Input string+
   * 
   *  Return   : boolean
   *    true  : If it has a single special character
   *    false : If it has no special character
   */
  function findSpecialCharacterWithCustomMatching(value){
    var specialCharacters = "~!@#$%^&*()_+{}:|<>?";
    for(var i= 0 ; i < value.length; i++){
      if(specialCharacters.indexOf(value[i]) !== -1){
        return true;
      }
    }
    return false;
  }

  /*
  * Correct Email validation Error
  * shjd@fnghlkf.khdfg
  * Spical Character are not allowed
  */
  function emailRequired(input ,errorId ){
    var specialCharacters = "@.";
    var notAllowedCharacter = ",'\";=-~!#$%^&*[]()_+{}:|<>?";
    var EmailField = input.value;
    var emailElement = document.getElementById(errorId);
    emailElement.innerHTML = ""; 
    // Find the " @ . " is not insert the First Number
    if(specialCharacters.indexOf(EmailField[0]) !== -1){
      emailElement.innerHTML = "An error occured while checking the email authentication status for :"+EmailField;
    }
    // Find the Not Allowed Number for email 
    if(EmailField !== ""){
      for( var i= 0; i< EmailField.length; i++ ){
        if(notAllowedCharacter.indexOf(EmailField[i]) !== -1){
          emailElement.innerHTML = "You have entered the invalide Email";
          return;
        }
      }
    }
    // Display the Message for Include the @
    if(EmailField.indexOf("@") == -1 ){
      emailElement.innerHTML = "Please include an '@'";
      return;
    }
    // Display the Message for Include the .
    if(EmailField.indexOf(".") == -1){
      emailElement.innerHTML = "Please Enter the part of following @ '.'";
      return;     
    }
    // Checked the @. is not insert the last digit 
   if(  specialCharacters.indexOf( EmailField[ EmailField.length -1] ) !== -1 ){
      emailElement.innerHTML = "Invalide Email";
      return;
   }
   // // isme condition check ho rahi hai ke 
   // if( EmailField.indexOf('@') == EmailField.indexOf('.') ){
   //   emailElement.innerHTML = "Invalide Email";
   //   return;
   // }

   // isme yeeh find ho raha hai ke . @ ke sth he to nhi aa raha eg : @.
   if( EmailField.indexOf('.') == EmailField.indexOf('@')+1 ){
      emailElement.innerHTML = " '.' is used at wrong position: "+ EmailField;
      return;
   }
   //isme yeeh dekh raha hai ke . @ ke age to nhi aa raha eg : .@
   if( EmailField.indexOf('.') == EmailField.indexOf('@')-1 ){
      emailElement.innerHTML = " '.' is used at wrong position: "+ EmailField;
      return;
   }   
    return true;
  }

/*
* This function is used to two perameter
* Checked the blank filed
* Checked the Min and Max value
* Find the Uppercase value 
* Find the Special character 
*/
    function passwordValidation(input, errorId){
      var errorElement = document.getElementById(errorId);
      errorElement.innerHTML = "";
      if(input.value === ""){
        return errorElement.innerHTML = "This field is required";
      }    
      if(input.value.length < 8){
        return  errorElement.innerHTML = "Min character allowed are 8";
      }
      if(input.value.length > 15){
        return errorElement.innerHTML = "Max character allowed are 15";
      }  
      if(findUpperCaseWithCustomMatching(input.value) === false){
        return  errorElement.innerHTML = "At least one Uppercase letter";
      }
      if(findSpecialCharacterWithCustomMatching(input.value) === false){
        return errorElement.innerHTML = "Atleast one special character";
      }
   }
  /*
  * Confirm password validation
  * Matching Password and confirm password
  */
  function conpass(){
    cPasswordTouched = true; 
    var errorElement = document.getElementById('confirmPasswrdRequiredMessage');
    var password     = document.getElementById("password");
    var cPassword    = document.getElementById("Cpassword");
    errorElement.innerHTML = "";
    if(password.value != cPassword.value)
    {
      errorElement.innerHTML = "The confirm Password should not be same as Password";
    }
  }   

  /*
   *
   *
   * Function name :  modifiedNumber 
   * Parmater      : value ( string )
   * return        : boolean
    -- True  -- In case all letters are number 
    -- False -- In case any one letter is not a number
   */

  function modifiedNumber(value){
    var allowedCharacter = ["+","-","0","1","2","3","4","5","6","7","8","9"];
    for(var i=0; i< value.length; i++){
     if( allowedCharacter.indexOf(value[i]) == -1  ){
        return false;
     }
    }
    return true;
  }

  /*
  * Mobile validation
  * Required
  *Min or max number allowed
  *charachter are not allowed
  */
  function mobileRequired(input, errorId){
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = "";
    if(input.value === ""){
      errorElement.innerHTML = "This field is required";
      return;
    }    
    if(modifiedNumber(input.value) === false){
      errorElement.innerHTML = "Only numbers are allowed";
      return;
    }
    if(input.value.length < 11){
      errorElement.innerHTML = "Please enter a 10-digit Phone Number";
      return;
    }  
    if(input.value.length > 11){
      errorElement.innerHTML = "Please erase the extra add number ";
      return;
    }  
  }    
  </script>
  </html>