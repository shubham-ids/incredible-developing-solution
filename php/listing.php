<?php 
  include_once('header.php');
  $message = "";
  //This method is used to delete the row in database using PDO 
  if( isset($_REQUEST['task']) && $_REQUEST['task'] == 'delete' ){
    $row = [
      'id' => $_REQUEST['id']
    ];
    $query = "DELETE FROM '".RECORD."' WHERE id=:id";
    echo $query;
    $deleteQuery = $Mysqli->prepare($query);
    $deleteQuery->execute($row);
    if( $deleteQuery !== false ){
      $message = "<p class='alert alert-success'>Record deleted successfull</p>";
    }else{
      $message = "<p class='alert alert-danger'>Record is not deleted</p>";
    }
  }
  $query = "SELECT * FROM ".RECORD;
  $selectQuery = $Mysqli->prepare($query);
  $selectQuery->execute();
?>
<form method="post">
  <div class="container">
    <div class="row">  
      <h1>Student record</h1>
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <div class="row">
              <div class="col col-xs-12">
                <h1 class="panel-title"><?php echo $message; ?></h1>
              </div>
             <!-- <div class="col col-xs-6 text-right">
                <button type="button" class="btn btn-sm btn-primary btn-create" name="register">Create New</button>
              </div> -->
            </div>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
              <thead>
                <tr>
                  <th><em class="fa fa-cog"></em></th>
                  <th class="hidden-xs">ID</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Username</th>
                  <th>Email</th>
                </tr> 
              </thead>
              <tbody>
                <?php foreach( $selectQuery as $row ){?>
                <tr>     
                  <td align="center">
                    <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                    <a class="btn btn-danger" href="?task=delete&id=<?php echo $row['id']; ?>"><em class="fa fa-trash"></em></a>
                  </td>
                  <td class="hidden-xs"> <?php echo $row['id']; ?> </td>
                  <td class="hidden-xs"> <?php echo $row['firstname']; ?> </td>
                  <td class="hidden-xs"> <?php echo $row['lastname']; ?> </td>
                  <td class="hidden-xs"> <?php echo $row['username']; ?> </td>
                  <td class="hidden-xs"> <?php echo $row['email']; ?> </td> 
                 </tr>
                <?php } ?>
              </tbody>
            </table>
        
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col col-xs-4">Page 1 of 5
              </div>
              <div class="col col-xs-8">
                <ul class="pagination hidden-xs pull-right">
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                </ul>
                <ul class="pagination visible-xs pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">»</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<?php include_once('footer.php'); ?>