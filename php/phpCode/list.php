<?php 
  $message = "";
  //This method is used to delete the row in database using PDO 
  try{

    if( isset($_REQUEST['task']) && $_REQUEST['task'] == 'delete' ){
      $id = [
        'id' => $_REQUEST['id']
      ];
      $query = "DELETE FROM `".RECORD."` WHERE id = :id ";
      $deleteQuery = $Mysqli->prepare($query);
      $deleteQuery->execute($id);
      if( $deleteQuery !== false ){
        //header('Location: listing.php');
        $message = "<p class='alert alert-success'>Record deleted successfull</p>";
      }else{
        $message = "<p class='alert alert-danger'>Record is not deleted</p>";
      }
    }
    //fetch the all data in database
    $query = "SELECT * FROM ".RECORD;
    $selectQuery = $Mysqli->prepare($query);
    $selectQuery->execute();
  }catch(PDOException $e){
    echo "Not display the record contact the developer";
    //echo $e->getMessage();
  }
?>