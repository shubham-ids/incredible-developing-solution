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
<<<<<<< HEAD
    echo $mysqli->connect_error();
=======
  	 echo $mysqli->connect_error(); // Display the error in database not connectivity
>>>>>>> bbcf0e3b1975416179bc364a9a12843f094b81e4
  }
?>