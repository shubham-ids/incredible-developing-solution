<?php include_once('php-code/messagePhpCode.php'); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Incredibe Developing Solution</title>
     <meta charset="UTF-8" />
     <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <link href="../css/custom-message.css" rel="stylesheet" id="bootstrap-css">
     <script src="../includes/jquery.min.js"></script>
     <script src="../includes/bootstrap.min.js"></script>
  </head>
  <body>
  <!------ Include the above in your HEAD tag ---------->
  <form method="post">
    <div class="container">
      <div class="row">
          <div class="col-md-5">
              <div class="panel panel-primary">
                  <div class="panel-heading" id="accordion">
                    <i class="glyphicon glyphicon-envelope"></i>
                    <h1 class="headline">Messenger</h1>
                    <div class="outputMessage">
                      <?php
                        if( isset($usernameRequiredMessage) == true ){
                          echo $usernameRequiredMessage;
                        }
                        echo $Message;
                      ?>
                    </div>
                    <div class="input-group col-md-11">
                      <input id="inputField" type="text" class="form-control input-sm" name="username" placeholder="Enter Username" />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat" name="register">Send</button>
                        </span>
                      </div>
                      <div class="btn-group pull-right" id="pullIcon">
                        <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a>
                      </div>                      
                  </div>
              <div class="panel-collapse collapse" id="collapseOne">
                  <div class="panel-body">
                      <ul class="chat">
                        <?php
                          $query       = "SELECT * FROM ".ADMIN;
                          $selectQuery = $Mysqli->query($query);
                          while( $row = $selectQuery->fetch_assoc() ){
                        ?>
                          <li class="left clearfix">
                            <span class="chat-img pull-left">
                              <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font"><?php echo $row['username']; ?></strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span><?php echo $row['uploadTime']; ?></small>
                                </div>
                                
                                  <?php
                                    $query       = "SELECT * FROM ".SMS;
                                    $selectQuery = $Mysqli->query($query);
                                    while( $rows = $selectQuery->fetch_assoc() ){
                                  ?>                                
                                  <p><?php echo $rows['messages']; ?></p>
                              <?php } ?>
                            </div>
                          </li>
                          <?php } ?>
                          <li class="right clearfix"><span class="chat-img pull-right">
                              <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                          </span>
                              <div class="chat-body clearfix">
                                  <div class="header">
                                      <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                      <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                  </div>
                                  <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                      dolor, quis ullamcorper ligula sodales.
                                  </p>
                              </div>
                          </li>
                      </ul>
                  </div>
                  <div class="panel-footer">
                      <div class="input-group">
                          <input id="btn-input" name="messages" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                          <span class="input-group-btn">
                              <button class="btn btn-warning btn-sm" id="btn-chat" name="addSms">
                                  Send</button>
                          </span>
                      </div>
                  </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </form> 
    <script src="../includes/custom-message.js"></script>
  </body>
</html>