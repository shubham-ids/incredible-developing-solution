<?php 
  include_once('header.php'); 
/*if(isset($_POST['add'])){
    $firstname   = $_POST['fname'];
    $lastname    = $_POST['lname'];
    $email       = $_POST['email'];
    $password    = $_POST['password'];
    $phonenumber = $_POST['phnumber'];

    $validationError = false; //Boolean
    if(empty($firstname)){
      $validationError = true;
      $firstnameErrorMessage = "<p class='errormessage'>Firstname is required</p>";
    }
} */
?>
<div class="container">
            <form class="form-horizontal" role="form" method="post" >
                <h2>Registration</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input 
                        onkeyup="validateRequired(this , 'fnameRequiredMessage')" 
                        onblur="validateRequired(this , 'fnameRequiredMessage')" 
                        type="text" id="firstName" name="fname " placeholder="First Name" class="form-control" autofocus>
                        <div id="fnameRequiredMessage" style="color: red">
                        	<?php
                        	    if(isset($firstnameErrorMessage)==true){
                        	    	echo "Firstname is required";
                        	    }
                        	  ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input
                        onkeyup="validateRequired(this , 'lnameRequiredMessage')" 
                        onblur="validateRequired(this , 'lnameRequiredMessage')" 
                         type="text" id="lastName" name="lname" placeholder="Last Name" class="form-control" autofocus>
                        <div id="lnameRequiredMessage" style="color: red"></div>                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input 
                         onblur="validateRequired(this ,'emailRequiredMessage');"
                         onkeyup="validateRequired(this ,'emailRequiredMessage'); emailRequired(this , 'emailRequiredMessage');"
                         onchange="validateRequired(this ,'emailRequiredMessage'); emailRequired(this , 'emailRequiredMessage');"
                         type="email" id="email" name="email" placeholder="Email" class="form-control" name= "email">
                        <div id="emailRequiredMessage" style="color: red"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input 
                        onkeyup="passwordValidation(this ,'passwrdRequiredMessage');" 
                        onblur="passwordValidation(this ,'passwrdRequiredMessage');" 
                        type="text" id="password" name="password" placeholder="Password" class="form-control">
                        <div id="passwrdRequiredMessage" style="color: red"></div> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-6 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input 
                        onkeyup="validateRequired(this ,'confirmPasswrdRequiredMessage'); conpass();" 
                        onblur="validateRequired(this ,'confirmPasswrdRequiredMessage'); conpass();""
                        type="text" id="Cpassword" placeholder="Password" class="form-control">
                        <div id="confirmPasswrdRequiredMessage" style="color: red"></div> 
                    </div>
                </div>                
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-4 control-label">Phone Number </label>
                    <div class="col-sm-9">
                        <input
                         onkeyup ="mobileRequired(this , 'phoneNumberRequiredMessage')"
                         onblur  ="mobileRequired(this , 'phoneNumberRequiredMessage')" 
                        type="text" id="phoneNumber" name="phnumber " placeholder="Phone number" class="form-control">
                        <div id="phoneNumberRequiredMessage" style="color: red"></div>
                        <div id="phonenumberLengthMessage" style="color: red"></div>
                        <span class="help-block">Phone Number Like: +789456123 </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input
                                    onblur="genderRequired(this , 'GenderErrorMessage')" 
                                    onkeyup="genderRequired(this , 'GenderErrorMessage')" 
                                    type="radio" id="maleRadio" name="gender" value="Male">Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input
                                    onblur="genderRequired(this , 'GenderErrorMessage')" 
                                    onkeyup="genderRequired(this , 'GenderErrorMessage')"                      
                                     type="radio" id="femaleRadio" name="gender" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input
                                    onblur="genderRequired(this , 'GenderErrorMessage')" 
                                    onkeyup="genderRequired(this , 'GenderErrorMessage')"                      
                                    type="radio" id="otherRadio" name="gender" value="Other">Others
                                </label>
                            </div>  
                      <!--      <div id="GenderErrorMessage" style="color: red"></div> -->
                            <div class="col-sm-12">
                              <label for="sel1">Select :</label>
                                <select 
                                 onchange="genderRequired(this , 'GenderErrorMessage')" 
                                 onkeyup="genderRequired(this , 'GenderErrorMessage')" 
                                 class="form-control" id="sel1">
                                  <option value= " " style="display: none;">Gender</option>
                                  <option>Male</option>
                                  <option>Female</option>
                                  <option>Others</option>
                                </select>
                            </div>  
                            <div id="GenderErrorMessage" style="color: red"></div>                                                      
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->
</form>
<?php include_once('footer.php'); ?>