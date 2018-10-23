<?php 
  include_once('db/connection.php');
  $message = "";
  try{
    
    // This method is used to get the Id is blank then page jump to listing page 
    if( ! $_REQUEST['id'] ){
      header('location: listing.php');
      echo "Your request is blank";
      return;
    }

    $id = [ 'id' => $_REQUEST['id']];
    if(isset($_REQUEST['edit'])){
      $firstname = $_POST['firstname'];
      $lastname  = $_POST['lastname'];
      $username  = $_POST['username'];
      $email     = $_POST['email'];     
  
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

    // This method is used to when validation error message is false
    // Then this statement is executed 
    // Else this method is display the error  
      if( $validationErrorMessage == false ){    
        $rows = [
          'id'        => $_REQUEST['id'], 
          'firstname' => $firstname,
          'lastname'  => $lastname,
          'username'  => $username,
          'email'     => $email
        ];

      // Update query
        $query =" 
          UPDATE 
            `".RECORD."` 
            SET
             `firstname` = :firstname,
             `lastname`  = :lastname,
             `username`  = :username, 
             `email`     = :email
            WHERE 
             `id` = :id
            ";    
        $updateQuery = $pdo->prepare($query);
        $response = $updateQuery->execute($rows);
        
      // var_dump($response);
      // This method is used to dispay the success and not success message
      // when response are not equal of false then success message are display
      // else not success message are display

        if( $response !== false ){
          $message = "<p class='alert alert-success'>Record update successfull !</p>";
        }else{
          $message = "<p class='alert alert-danger'>Your Record is not updated !</p>";
        }
      } // Closed the breases is validation error message are true
    }

  // This method is used to fatch the data in databade using Id
    $query = "SELECT * FROM ".RECORD." WHERE id = :id";
    $selectQuery = $pdo->prepare($query);
    $selectQuery->execute($id );
    $row = $selectQuery->fetch();
  }catch (PDOException $e){
    echo "Your record is not updated please contact the developer";
    echo $e->getMessage();
  }
?>