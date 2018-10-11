<!DOCTYPE html>
<html lang="en">
<head>
  <title>jQuery validation learning</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Stacked form</h2>
  <form id="validation-form">
    <div class="form-group row">
      <label for="fName"  class="col-sm-2 col-form-label">First Name</label>
      <div class="col-sm-7">
        <input type="text" class="form-control is-valid " id="inputfName" placeholder="Enter Your First Name">          
      </div>
      <div class="col-sm-3">
        <small id="input-Fname" class="text-danger"></small>      
      </div>
    </div>
    <div class="form-group row">
      <label for="lName" class="col-sm-2 col-form-label">Last Name</label>
      <div class="col-sm-7">
        <input type="text" class="form-control is-valid" id="inputlName" placeholder="Enter Your Last Name">          
      </div>
      <div class="col-sm-3">
        <small id="input-Lname" class="text-danger"></small>      
      </div>
    </div>        
    <div class="form-group row">
      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-7">
        <input type="email" class="form-control is-valid" id="inputEmail" placeholder="Email">          
      </div>
      <div class="col-sm-3">
        <small id="input-Email" class="text-danger"></small>      
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label ">Password</label>
      <div class="col-sm-7">
        <input type="password" class="form-control is-valid" id="inputPassword" placeholder="Password">
      </div>
      <div class="col-sm-3">
        <small id="input-password" class="text-danger"></small>      
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label ">Phone Number</label>
      <div class="col-sm-7">
        <input type="text" class="form-control is-valid" id="inputPNumber" placeholder="Phone Number">
      </div>
      <div class="col-sm-3">
        <small id="input-PNumber" class="text-danger"></small>      
      </div>
    </div>    
    <div class="form-group">
      <label for="exampleFormControlSelect1">Qualification</label>
      <select class="form-control" id="inputQualification">
        <option value="">Select</option>
        <option>MCA</option>
        <option>BBA</option>
        <option>BCA</option>
        <option>B.COM</option>
      </select>
      <small id="input-qualification" class="text-danger"></small>
    </div>
    <div class="form-group">
    </div>   
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Address:</label>
      <div class="col-sm-3">
        <small id="input-address" class="text-danger"></small>      
      </div>
      <textarea class="form-control" id="inputAddress" rows="3"></textarea>
    </div>    
  </form>
</div>
<script src= "js/custom-jquery.js" ></script>
</body>
</html>
