<?php
  include_once('header.php');
  include_once('phpCode/edit.php');
 ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="well well-sm">
        <form class="form-horizontal" method="post">
          <fieldset>
            <legend class="text-center header">update Form</legend>
            <div class="displayMessage">
              <?php echo $message; ?>
            </div>
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8">
                <input id="fname" value="<?php echo $row['firstname']; ?>" name="firstname" type="text" placeholder="First Name" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8">
                  <input id="lname" value="<?php echo $row['lastname']; ?>" name="lastname" type="text" placeholder="Last Name" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8">
                  <input id="username" value="<?php echo $row['username']; ?>" name="username" type="text" placeholder="User Name" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
              <div class="col-md-8">
                  <input id="email" value="<?php echo $row['email']; ?>" name="email" type="text" placeholder="Email Address" class="form-control">
              </div>
            </div>

           <!-- <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa fa-eye-slash bigicon"></i></span>
              <div class="col-md-8">
                <input id="password" name="password" type="password" placeholder="Password" class="form-control">
              </div>
            </div> -->

          <!--    <div class="form-group">
                  <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                  <div class="col-md-8">
                      <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                  </div>
              </div> -->

              <div class="form-group">
                  <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary btn-lg" name="edit">update</button>
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