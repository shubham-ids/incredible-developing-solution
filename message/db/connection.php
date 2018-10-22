<?php
  define('HOST','localhost');
  define('USERNAME','root');
  define('PASSWORD','');
  define('IDS','ids');
  define('ADMIN','admin');
  define('SMS','sms');
  $Mysqli = new mysqli(HOST,USERNAME,PASSWORD,IDS);
  if($Mysqli){
    //echo "connection is successfull";
  }else{
    echo $mysqli->connect_error();
  }
?>