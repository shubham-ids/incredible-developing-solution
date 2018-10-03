  </body>
  <script type="text/javascript">
    //Validation Requirment
 /*   function fnameRequired(fname){
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
    //Password Validatin  
    function passwordRequired(passwrd){
      if(passwrd.value.length >= 8){      
          document.getElementById('passwrdRequiredMessage').innerHTML = "Minimum 8 characters in length ";
          document.getElementById('password').style.backgroundColor = "pink";
       }else{
          document.getElementById('passwrdRequiredMessage').innerHTML = " ";
          document.getElementById('password').style.backgroundColor = "white";
        }  
    }
    //Phone NUmber Validation
    function phnumberRequired(phnmbr){
     if(isNaN(phnmbr.value)){
        document.getElementById('phoneNumber').style.backgroundColor = "pink";
        document.getElementById('phoneNumberRequiredMessage').innerHTML = "Enter the correct phone number";
      }else{
        document.getElementById('phoneNumber').style.backgroundColor = "white";
        document.getElementById('phoneNumberRequiredMessage').innerHTML = " ";
      } 
    }  
    // Max and min value 
    function valideNumber(valideNumMgs){
     if( valideNumMgs.value.length<10 ||valideNumMgs.value.length>10 ){
      document.getElementById('phoneNumber').style.backgroundColor = "pink";
      document.getElementById('phonenumberLengthMessage').innerHTML = "Maximum 10 number are allowed";
      }else{
        document.getElementById('phoneNumber').style.backgroundColor = "white";
        document.getElementById('phonenumberLengthMessage').innerHTML = " ";
       }
     }
     //Email validation Eroor*/

       /*
   *
   * Parameter : 
   *  value    : Input string+
   * 
   *  Return   : boolean
   *    true  : If it has a single uppercase character
   *    false : If it has no uppercase character
   */
  function findUpperCaseWithCustomMatching(upperCase){
    var upperCaseArray = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    //var testString = "ncow uper case A";
    var testString = upperCase.value;
    var counter = 0;
    var flag = false;
    for(var i= 0 ; i < testString.length; i++){
       console.log(i, testString[i]);
      for(var y=0; y < upperCaseArray.length; y++){    
        //console.log(i, y, testString[i], upperCaseArray[y]);
        if(testString[i] == upperCaseArray[y] ){
          //console.log('we found one upper case i.e' , upperCaseArray[y] );
          document.getElementById('fnameRequiredMessage').innerHTML = "we found one upper case : "+upperCaseArray[y] ;
          flag = true;
          break;
        }
        counter++;
        console.log(counter);
      }
      if(flag == true){
        break;
      }
    }
    return flag;
  }
  </script>
  </html>