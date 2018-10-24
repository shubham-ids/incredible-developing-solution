<?php 
  include_once('db/connection.php');
  $message = "";
  try{
  // This method is used to delete the row in database using PDO 
    if( isset($_REQUEST['task']) && $_REQUEST['task'] == 'delete' ){
      $id = [
        'id' => $_REQUEST['id']
      ];
      $query       = "DELETE FROM `".RECORD."` WHERE id = :id ";
      $deleteQuery = $pdo->prepare($query);
      $result      = $deleteQuery->execute($id);
      if( $result !== false ){
        //header('Location: listing.php');
        $message = "<p class='alert alert-success'>Record is delete successfull</p>";
      }else{
        $message = "<p class='alert alert-danger'>Your record is not delete</p>";
      }
    }
  
  // This method is used to multiple record delete in databases    
    if( isset($_REQUEST['multiDelete']) && $_REQUEST['multiDelete'] == 'deleted' ){  
      foreach( $_REQUEST['users'] as $id ){
        $query       = "DELETE FROM `".RECORD."` WHERE id = :id ";
        $deleteQuery = $pdo->prepare($query);
        $results     = $deleteQuery->execute(['id' => $id]);
        if( $results !== false ){
          //header('Location: listing.php');
          $message = "<p class='alert alert-success'>Records are deleted successfull</p>";
        }else{
          $message = "<p class='alert alert-danger'>Email is already include!</p>"; 
        }        
      }     
    }
  
  // This method is used to search of the value
    if(isset($_REQUEST['searchBar'])){
      echo "<pre>";
        print_r($_REQUEST);
      echo "</pre>";  
    } 
 
  // Fetch the all data in database
    $query = "SELECT * FROM ".RECORD;
    $selectQuery = $pdo->prepare($query);
    $selectQuery->execute();
  }catch(PDOException $e){
    echo "Not display the record contact the developer";
    //echo $e->getMessage();
  }
?>