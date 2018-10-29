<?php 
  include_once('db/connection.php');
  $message = "";
  $searchMessage = "";
  try{
  // Select databse query 
    $sql = "SELECT * FROM ".RECORD;

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
      $message =  "<p class='alert alert-danger'>Please select the delete of row</p>";   
    }
  
  // This method is used to delete the row in database using PDO 
    if( isset($_REQUEST['task']) && $_REQUEST['task'] == 'delete' ){
      $id = [
        'id' => $_REQUEST['id']
      ];
      $query       = "DELETE FROM `".RECORD."` WHERE id = :id ";
      $deleteQuery = $pdo->prepare($query);
      $result      = $deleteQuery->execute($id);
      if( $result == false ){
        //header('Location: listing.php');
        //$message = "<p class='alert alert-success'>Record is delete successfull</p>";
        $message = "<p class='alert alert-danger'>Your record is not delete</p>";
      }
    }    
  
  // This method is used not set of page 
  // Then this is used to page value 1
    (!isset($_REQUEST['page']) ) ? $_REQUEST['page'] = 1 : '';
  
  // This method is used to empty of the page and then return the current page 1
  // Else page value in user define in interger     
    (empty($_REQUEST['page']) ) ? $currentPage = 1 :  $currentPage = intval( $_REQUEST['page'] );

  // This method is used to page number less then of 0 or equal to 0
  // Then autometic page of value in 1  
    ($_REQUEST['page'] <= 0) ? $currentPage = 1 : $currentPage;

    $page           = $currentPage -1 ;
    $record_perpage = 3;
    $limitPosition  = $page * $record_perpage;

    (!isset($_REQUEST['searchBar'])) ? $_REQUEST['searchBar'] = "" : $_REQUEST['searchBar'] ;   
    
  // This method is used to search of the value in table
    if(isset($_REQUEST['search'])){
      $searchUser = "%".$_REQUEST['searchBar']."%"; 
      $searchRow = [
        'firstname' => $searchUser,
        'lastname'  => $searchUser,
        'username'  => $searchUser
    ];
      $query = "
      SELECT 
      SQL_CALC_FOUND_ROWS
      *
      FROM 
        `".RECORD."`
       WHERE
          `firstname` LIKE :firstname
        OR 
          `lastname` LIKE :lastname 
        OR 
          `username` LIKE :username
         
          limit $limitPosition , $record_perpage       
        ";

      $selectQuery = $pdo->prepare($query);
      $selectQuery->execute( $searchRow );
      
      $statement = $pdo->query('SELECT FOUND_ROWS()');
      $response = $statement->fetchColumn();
      $total_numberPages  = ceil( $response / $record_perpage );
    }else{       

    // Pagination of query
      $query = "
        SELECT
        SQL_CALC_FOUND_ROWS 
        * 
        FROM 
          `".RECORD."` 
          limit $limitPosition , $record_perpage
      "; 
      $selectQuery  = $pdo->prepare($query);
    // Convert the string to integer number
      $selectQuery->bindValue(':limitPosition', $limitPosition, PDO::PARAM_INT);
      $selectQuery->bindValue(':record_perpage', $record_perpage, PDO::PARAM_INT);      
      $selectQuery->execute();
      
    // This method is used to count the row
    // And giving the integer number  
      $statement = $pdo->query('SELECT FOUND_ROWS()');
      $response = $statement->fetchColumn();
      //$rowCount       = $selectQuery->rowCount();  
      $total_numberPages  = ceil( $response / $record_perpage );
    } 

    if($currentPage > $total_numberPages) {

      parse_str($_SERVER['QUERY_STRING'], $queryArray);

      echo '<pre>';
      echo $_SERVER['QUERY_STRING'];
      print_r($queryArray);
      echo '</pre>';

      $queryArray['page'] = $total_numberPages;

      #$queryString =  http_build_query($queryArray);;


      #header("Location: ?".$queryString);
;    }





  // This method is used to display the pagination in 
  }catch(PDOException $e){
    echo "Not display the record contact the developer";
    //echo $e->getMessage();
  }
?>