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
                        onkeyup="findUpperCaseWithCustomMatching(this)" 
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
                        <input onkeypress="" type="text" id="lastName" name="lname" placeholder="Last Name" class="form-control" autofocus>
                        <div id="lnameRequiredMessage" style="color: red"></div>                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email* </label>
                    <div class="col-sm-9">
                        <input onkeypress="//emailSpicalCharacterMatch(this , emailRequiredMessage);//emailRequired(this)" type="email" id="email" name="email" placeholder="Email" class="form-control" name= "email">
                        <div id="emailRequiredMessage"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*</label>
                    <div class="col-sm-9">
                        <input onkeypress="passwordRequired(this)" type="password" id="password" name="password" placeholder="Password" class="form-control">
                        <div id="passwrdRequiredMessage" style="color: red"></div> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-6 control-label">Confirm Password*</label>
                    <div class="col-sm-9">
                        <input onkeypress="cnfrmpasswrd(this)" type="password" id="Cpassword" placeholder="Password" class="form-control">
                        <div id="confirmPasswrdRequiredMessage"></div> 
                    </div>
                </div>                
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-4 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input 
                          onkeyup="valideNumber(this)"
                          type="text" id="phoneNumber" name="phnumber " placeholder="Phone number" class="form-control">
                        <div id="phoneNumberRequiredMessage" style="color: red"></div>
                        <div id="phonenumberLengthMessage" style="color: red"></div>
                      <!--  <span class="help-block">Your phone number won't be disclosed anywhere </span> -->
                    </div>
                </div>
                <button type="submit" name="add" class="btn btn-primary btn-block">Register</button>
            </form> <!-- /form -->
        </div> <!-- ./container -->
</form>
<?php include_once('footer.php'); ?>