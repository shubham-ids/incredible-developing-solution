<?php
$message = "";
if(isset($_REQUEST['add'])){
  $rows = [	
	  'firstname' => $_POST['firstname'],
	  'lastname'  => $_POST['lastname'],
	  'username'  => $_POST['username'],
	  'email'     => $_POST['email'],
	  'password'  => md5($_POST['password'])
    ];
  $query =  "
    INSERT 
    INTO ".RECORD."
        (`firstname`, `lastname`, `username`,`email`,`password`) 
      VALUES 
        ( :firstname, :lastname , :username , :email , :password  )
    ";
    echo $query;
    $insert = $Mysqli->prepare($query);
    $insert->execute( $rows );

    if($insert !== false){
    	$message = "<p class='alert alert-success'>Successful registration!</p>";
    }else{
    	echo "<p class='alert alert-danger'>registration Error!</p>";
    	echo $Mysqli->error;
    }

} 
?>