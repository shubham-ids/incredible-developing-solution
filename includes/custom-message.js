$(document).ready(function(){
  $('#inputField').blur(function(){
    requireField(this , '.outputMessage');
  });
  $('#inputField').keyup(function(){
    findUpperCaseValue(this , '.outputMessage');
  });
  $('#inputField').mouseup(function(){
    findUpperCaseValue(this , '.outputMessage');
  });

 /*
 * This Function is used to print the Error Message by blank text
 */
  function requireField(input , ErrorId ){
    $(ErrorId).html('');
    if($(input).val() == ""){ 
      $(ErrorId).html('<p class="ErrorMessage">This field is required</p>');
      return;
    }
  }

/*
 * This function is used to print the username validation error
 */
  function findUpperCaseValue(input , ErrorId ){
    $(ErrorId).html('');
    var upperCaseArray = "~!{}[]-/=_#$:;,.%^&*()";
    var InputValue = $(input).val();
    for(var i=0; i<InputValue.length; i++){
      if( upperCaseArray.indexOf(InputValue[i]) !== -1 ){
        $(ErrorId).html('<p class="ErrorMessage">Please use only letter(a-z),numbers and periods : </p>'+InputValue);
      }else{
        $('#pullIcon').css('display','inline');
      }
    }
  }
});