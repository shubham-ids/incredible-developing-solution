<?php
  define('HOST','localhost');
  define('USERNAME','root');
  define('PASSWORD','root');
  define('IDS','ids');
  define('RECORD','record');
  // Database connectivity
  $Mysqli = new mysqli(HOST,USERNAME,PASSWORD,IDS);
  if( $Mysqli ){
  	echo "connection is successfull";
  }else{
  	 echo $mysqli->connect_error(); // Display the error in database not connectivity
  }
?>