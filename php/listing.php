<?php
  include_once('phpCode/list.php'); 
  include_once('header.php'); 
?>
<form method="get">
  <div class="container">
    <div class="row">  
      <h1>Student Records</h1>
      <div class="searchOutput">
        <?php echo $searchMessage; ?>
      </div>
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
          <div id="searchField">
            <div class="input-group col-xs-6 text-right">
              <input 
                type="text" 
                class="form-control" 
                placeholder="Search.." 
                name="searchBar"
                value="<?php echo isset($_REQUEST['searchBar'])?$_REQUEST['searchBar']:'' ?>"
                id="txtSearch"/>
              <div class="input-group-btn">
                <button class="btn btn-primary" type="submit" name="search">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </div>
            </div>
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
                <a href="register.php" class="btn btn-sm btn-primary btn-create" name="register">Create News Item</a>
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
                  <th><input type="checkbox" class="selectBox" id="checkAll"><i class="countChecked"></i></th>        
                  <th class="hidden-xs">Serial number</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Username</th>
                  <th>Email</th>
                </tr> 
              </thead>
              <tbody>
                <?php
                  $i     = $limitPosition;
                  $start = 1;
                  foreach( $selectQuery as $row ){
                ?>
                <tr>    
                  <td align="center">
                    <a 
                      class          = "btn btn-default"
                      data-toggle    = "tooltip"
                      data-placement = "left"
                      title          = "Edit"                       
                      href           = "update.php?task=update&id=<?php echo $row['id']; ?>">
                      <em class="fa fa-pencil"></em>
                    </a>
                    <a 
                      class          = "btn btn-danger deleteAjax" 
                      data-toggle    = "tooltip"
                      id             = "<?php echo $row['id']; ?>"
                      data-placement = "right"
                      title          = "Delete">
                      <em class="fa fa-trash"></em>
                    </a>
                  </td>
                  <td>
                    <input 
                      type  = "checkbox" 
                      name  = "users[]" 
                      class = "checkItem"
                      id    = "<?php echo $row['id']; ?>"
                      value = "<?php echo $row['id']; ?>">
                  </td>
                  <td class="hidden-xs"> <?php echo $i+$start; ?>                </td>
                  <td class="hidden-xs"> <?php echo $row['firstname']; ?> </td>
                  <td class="hidden-xs"> <?php echo $row['lastname']; ?>  </td>
                  <td class="hidden-xs"> <?php echo $row['username']; ?>  </td>
                  <td class="hidden-xs"> <?php echo $row['email']; ?>     </td> 
                 </tr>
                <?php $i++; } ?>
              </tbody>
            </table>
        
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col col-xs-4">Page 1 of <?php echo $record_perpage; ?>
              </div>
              <div class="col col-xs-8 pagination-wrap">
                <ul class="pagination hidden-xs pull-right">
                  <?php
                    for($j=1; $j <= $total_numberPages; $j++){ 
                      $className  = ($j == $currentPage)? 'active' : '';
                      $linkOnload = ($j == $currentPage)? '#' : '';
                  ?>
                      <li class="<?php echo $className; ?>">
                        <a href="?searchBar=<?php echo $_REQUEST['searchBar']; ?>&search=&multiDelete=&page=<?php echo $j.$linkOnload; ?>"><?php echo $j; ?></a>
                      </li>
                   <?php
                    }
                  ?>
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