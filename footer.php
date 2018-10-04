  </body>
  <script type="text/javascript">
    //Validation Requirment
    function fnameRequired(fname){
       if(fname.value === ""){ 
         document.getElementById('firstName').style.backgroundColor = "pink";       
         document.getElementById('fnameRequiredMessage').innerHTML = "First Name is required";
       }else{
         document.getElementById('fnameRequiredMessage').innerHTML = " ";
         document.getElementById('firstName').style.backgroundColor = "white";
       }
    }
    //Only words required Not a number
    function fnameWordRequired(fnameWR){
      if(!isNaN(fnameWR.value)){
        document.getElementById('firstName').style.backgroundColor = "pink";
        document.getElementById('fnameRequiredMessage').innerHTML = "<p color='red'>Enter the correct name<p>";
       }else{
         document.getElementById('fnameRequiredMessage').innerHTML = " ";
         document.getElementById('firstName').style.backgroundColor = "white";
       }  
    }
    //last Name Required
    function lnameRequired(lname){
       if(lname.value === ""){        
          document.getElementById('lnameRequiredMessage').innerHTML = "Last Name is required";
          document.getElementById('lastName').style.backgroundColor = "pink";
       }else{
          document.getElementById('lnameRequiredMessage').innerHTML = " ";
          document.getElementById('lastName').style.backgroundColor = "white";
        }  
    } 
    //Only words required Not a number
    function lnameWordRequired(lnameWR){
      if(!isNaN(lnameWR.value)){
        document.getElementById('lastName').style.backgroundColor = "pink";
        document.getElementById('lnameRequiredMessage').innerHTML = "Enter the correct name";
       }else{
         document.getElementById('lnameRequiredMessage').innerHTML = " ";
         document.getElementById('lastName').style.backgroundColor = "white";
       }  
    }    
    //Phone NUmber Validation
    // function phnumberRequired(lnameWR, errorId){
    //  var ErrorMessageShow = document.getElementById(errorId);
    //  var num  = "1234567890";    
    //  for(var i=0; i<lnameWR.length; i++){
    //   console.log(lnameWR.length);
    //  }   
    //  return;   
    // }  
   // valide phone number validation
    function valideNumber(input){
      var allowedCharacter = ["+","-","0","1","2","3","4","5","6","7","8","9"];

      var value = input.value;

      console.log(value, value.length);
      for(var i=0; i < value.length; i++){
           //console.log(values.value.length);
       if( allowedCharacter.indexOf(value[i]) == -1  ){
         console.log('Please enter the correct number')
          return false;
       }

      return true;

    }


    // if(input.value === ""){
    //   return errorElement.innerHTML = "This field is required";
    // }   
    // if(input.value == upperCaseArray){
    //   return errorElement.innerHTML = "Please enter the only numbers";
    // } 
    // if(input.value.length < 10){     
    //   return errorElement.innerHTML = "Only 10 numbers are allowed";
    // }  
    // if(input.value.length > 10){    
    //   return errorElement.innerHTML = "Please erase the extra number";
    // }  
  }
     //Email validation Eroor

       /*
   *
   * Parameter : 
   *  value    : Input string+
   * 
   *  Return   : boolean
   *    true  : If it has a single uppercase character
   *    false : If it has no uppercase character
   */
  /*function emailSpicalCharacterMatch(input , ID){
    var spicalCharacter = "@ .";
    //console.log(input.value.length);
    for(var i=0; i < spicalCharacter.length; i++ ){
      console.log(spicalCharacter[i]);
      if(input.value.indexOf(spicalCharacter[i]) !== spicalCharacter[i]){
        console.log('Please Enter the First word like : [A to Z]');
      }
    }
  }*/
  </script>
  </html>