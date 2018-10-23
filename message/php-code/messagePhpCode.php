<?php
include_once('db/connection.php');
$Message = "";
if(isset($_REQUEST['register'])){
  $username  = $_POST['username'];
  $validationError = false; // Boolean
  //server validation error
  if(empty($username)){
    $usernameRequiredMessage = "<p class='ErrorMessage'>This field is required</p>";
    $validationError = true;
  }

  if($validationError == false){


    $query = "SELECT * FROM ".ADMIN." WHERE username= '".$username."'";
    $selectQuery = $Mysqli->query($query);
    $rowCount = $selectQuery->num_rows;
    if($rowCount < 1){
      // Insert the data form database
      $query  = "INSERT INTO `".ADMIN."`(`username`)VALUES('".$username."')";
      $insert = $Mysqli->query($query); 
      if($insert){
        $Message = "<p class='SuccessMessage'>Username registed</p>";
      }else{
        //echo $Mysqli->error();
        $Message = "<p class='ErrorMessage'>Username not registed</p>";
      } 
    }else{
        $Message = "<p class='ErrorMessage'>Username already existes</p>"; 
    }



  }
}

if(isset($_REQUEST['addSms'])){
  $messages  = $_POST['messages'];
  $validationError = false; // Boolean

    // Insert the data form database
    $query  = "INSERT INTO `".SMS."`(`messages`)VALUES('".$messages."')";
    $insert = $Mysqli->query($query); 
    if($insert){
      $Message = "Your sms is send";
    }else{
      //echo $Mysqli->error();
      $Message = "Your sms is not send";
    }
 }
?>