<?php
  include_once('phpCode/list.php'); 
  include_once('header.php'); 
?>
<form method="post">
  <div class="container">
    <div class="row">  
      <h1>Student record</h1>
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <div class="col col-xs-12 text-center">
              <input type ="text" Placeholder="Search.." id="FieldSearch" name="searchBar">
            </div> 
            <div class="row">
              <div class="col col-xs-12">
                <h1 class="panel-title"><?php echo $message; ?></h1>
              </div>
              <div class="col col-xs-6 text-left">
                <div class="input-group col col-xs-9">
                  <select class="custom-select" id="inputGroupSelect04" name="multiDelete">
                    <option value="">Choose...</option>
                    <option value="deleted">Deleted</option>
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-sm btn-primary btn-create" id="actionButton" name="action">Action</button>
                  </div>
                </div>
              </div> 
              <div class="col col-xs-6 text-right">
                <a href="register.php" class="btn btn-sm btn-primary btn-create" name="register">Create News</a>
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
                  <th><input type="checkbox" class="selectBox" id="checkAll"></th>        
                  <th class="hidden-xs">Serial number</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Username</th>
                  <th>Email</th>
                </tr> 
              </thead>
              <tbody>
                <?php
                  $i = 0; 
                  foreach( $selectQuery as $row ){
                    $i++;  
                ?>
                <tr>    
                  <td align="center">
                    <a class="btn btn-default" href="update.php?task=update&id=<?php echo $row['id']; ?>"><em class="fa fa-pencil"></em></a>
                    <a class="btn btn-danger" href="?task=delete&id=<?php echo $row['id']; ?>"><em class="fa fa-trash"></em></a>
                  </td>
                  <td> <input type="checkbox" name="users[]" class="checkItem" value="<?php echo $row['id']; ?>"></td>
                  <td class="hidden-xs"> <?php echo $i; ?>                </td>
                  <td class="hidden-xs"> <?php echo $row['firstname']; ?> </td>
                  <td class="hidden-xs"> <?php echo $row['lastname']; ?>  </td>
                  <td class="hidden-xs"> <?php echo $row['username']; ?>  </td>
                  <td class="hidden-xs"> <?php echo $row['email']; ?>     </td> 
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
<script src="includes/custom.js " ></script>
<?php include_once('footer.php'); ?>