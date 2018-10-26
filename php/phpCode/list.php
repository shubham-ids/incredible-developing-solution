<?php 
  include_once('db/connection.php');
  $message = "";
  $searchMessage = "";
  try{
  // Select databse query 
    $sql = "SELECT * FROM ".RECORD;
    $startPage     = 0; 
    $recordPerPage = 5;

  // This method is used to delete the row in database using PDO 
    if( isset($_REQUEST['task']) && $_REQUEST['task'] == 'delete' ){
      $id = [
        'id' => $_REQUEST['id']
      ];
      $query       = "DELETE FROM `".RECORD."` WHERE id = :id ";
      echo $query;
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

    if(isset($_REQUEST['search'])){
      $searchUser = "%".$_POST['searchBar']."%"; 
      $searchRow = [
        'firstname' => $searchUser,
        'lastname'  => $searchUser,
        'username'  => $searchUser
    ];
      $query = $sql." WHERE
          `firstname` LIKE :firstname
        OR 
           `lastname` LIKE :lastname 
        OR 
           `username` LIKE :username      
        ";
      $selectQuery = $pdo->prepare($query);
      $selectQuery->execute( $searchRow );
    }else{
      
    // This method is used to display the pagination in     
      $query        = $sql; 
      $selectQuery  = $pdo->prepare($query);
      $selectQuery->execute();
    } 

  }catch(PDOException $e){
    echo "Not display the record contact the developer";
    //echo $e->getMessage();
  }
?>