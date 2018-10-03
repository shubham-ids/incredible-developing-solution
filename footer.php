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
      //Phone NUmber Validation
    function phnumberRequired(phnmbr){
     var ErrorMessageShow = document.getElementById('phoneNumberRequiredMessage');
          ErrorMessageShow.innerHTML = " ";
      if(isNaN(phnmbr.value)){
        document.getElementById('phoneNumberRequiredMessage').innerHTML = "Enter the correct phone number";
        return false;
      }
      if(isNaN(phnmbr.value) != false){
       if( phnmbr.value.length < 10 ){
        document.getElementById('phonenumberLengthMessage').innerHTML = "Minimum 10 number are allowed";
        return;
        }else{
        document.getElementById('phonenumberLengthMessage').innerHTML = "Maximum 10 number are allowed";
        return;
        }
      } 
    }  
  </script>
  </html>