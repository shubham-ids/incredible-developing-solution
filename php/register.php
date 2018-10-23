<?php
  include_once('phpCode/add.php');
  include_once('header.php');
 ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Register Form</legend>
                        <div class="displayMessage">
                          <?php echo $message; ?>
                        </div>
                        <div class="form-group">
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                          <div class="col-md-8">
                            <input id="fname" name="firstname" type="text" placeholder="First Name" class="form-control">
                            <div class="serverErrorMessage">
                              <?php
                                if(isset( $firstnameErrorMessage ) === true){
                                  echo $firstnameErrorMessage;
                                } 
                              ?>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                          <div class="col-md-8">
                            <input id="lname" name="lastname" type="text" placeholder="Last Name" class="form-control">
                            <div class="serverErrorMessage">
                              <?php
                                if(isset( $lastnameErrorMessage ) == true){
                                  echo $lastnameErrorMessage;
                                } 
                              ?>
                            </div>                            
                          </div>
                        </div>
                        <div class="form-group">
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                          <div class="col-md-8">
                            <input id="username" name="username" type="text" placeholder="User Name" class="form-control">
                            <div class="serverErrorMessage">
                              <?php
                                if(isset( $usernameErrorMessage ) == true){
                                  echo $usernameErrorMessage;
                                } 
                              ?>
                            </div>                            
                          </div>
                        </div>

                        <div class="form-group">
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                          <div class="col-md-8">
                            <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            <div class="serverErrorMessage">
                              <?php
                                if(isset( $emailErrorMessage ) == true){
                                  echo $emailErrorMessage;
                                } 
                              ?>
                            </div>                            
                          </div>
                        </div>

                        <div class="form-group">
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa fa-eye-slash bigicon"></i></span>
                          <div class="col-md-8">
                            <input id="password" name="password" type="password" placeholder="Password" class="form-control">
                            <div class="serverErrorMessage">
                              <?php
                                if(isset( $passwordErrorMessage ) == true){
                                  echo $passwordErrorMessage;
                                } 
                              ?>
                            </div>                            
                          </div>
                        </div>

                    <!--    <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div> -->

                        <div class="form-group">
                          <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg" name="add">Submit</button>
                          </div>
                          <div class="col-md-11 text-right">
                            <a href="listing.php">Listing File</a>
                          </div>                               
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>