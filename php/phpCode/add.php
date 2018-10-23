<?php
include_once('db/connection.php');
$message = "";
try{
  if(isset($_REQUEST['add'])){
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $username  = $_POST['username'];
    $email     = $_POST['email'];
    $password  = $_POST['password']; 
 
  // This methos is used to display the required message
    $validationErrorMessage = false;
    if(empty($firstname)){
      $firstnameErrorMessage  = "This field is required";
      $validationErrorMessage = true;
    }
    if(empty($lastname)){
      $lastnameErrorMessage   = "This field is required";
      $validationErrorMessage = true;
    }
    if(empty($username)){
      $usernameErrorMessage   = "This field is required";
      $validationErrorMessage = true;
    }
    if(empty($email)){
      $emailErrorMessage      = "This field is required";
      $validationErrorMessage = true;
    }
    if(empty($password)){
      $passwordErrorMessage   = "This field is required";
      $validationErrorMessage = true;
    }            

  // This method is used to when validation error message is true
  // Then this statement is executed
    
    if( $validationErrorMessage == false ){
      $rows = [ 
        'firstname' => $firstname,
        'lastname'  => $lastname,
        'username'  => $username,
        'email'     => $email,
        'password'  => md5($password)
      ];  
      $query =  "
        INSERT 
        INTO ".RECORD."
          (`firstname`, `lastname`, `username`,`email`,`password`) 
          VALUES 
          ( :firstname, :lastname , :username , :email , :password  )
        ";
      $insert = $pdo->prepare($query);
      $insert->execute( $rows );

      if($insert !== false){
        $message = "<p class='alert alert-success'>Successful registration!</p>";
      }else{
        echo "<p class='alert alert-danger'>registration Error!</p>";
        echo $pdo->error;
      }
    } // Closed validationErrorMessage
  }
}catch(PDOException $e){
    echo "your record is not insert please contact the developer";
    //echo $e->getMessage();
  }  
?>