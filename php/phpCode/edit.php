<?php 
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
      $rows = [ 
        'id'        => $_REQUEST['id'],
        'firstname' => $_POST['firstname'],
        'lastname'  => $_POST['lastname'],
        'username'  => $_POST['username'],
        'email'     => $_POST['email']
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
       
      $updateQuery = $Mysqli->prepare($query);
      $response = $updateQuery->execute($rows);
      
      // var_dump($response);
 
      if( $response !== false ){
        $message = "<p class='alert alert-success'>Record update successfull !</p>";
      }else{
        $message = "<p class='alert alert-danger'>Your Record is not updated !</p>";
      }
    }

    // Fatch the data in databade using Id
    $query = "SELECT * FROM ".RECORD." WHERE id = :id";
    $selectQuery = $Mysqli->prepare($query);
    $selectQuery->execute($id );
    $row = $selectQuery->fetch();
  }catch (PDOException $e){
    echo "Your record is not updated please contact the developer";
    //echo $e->getMessage();
  }
?>