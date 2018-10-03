<?php 
 define('HOST','localhost');
 define('USERNAME','root');
 define('PASSWORD','');
 define('DB','ids');
 define('RECORDS','records');

 $mysqli = new mysqli(HOST,USERNAME,PASSWORD,DB);
 
 if($mysqli){
 	//echo "Connection is successfull";
 }else{
 	echo $mysqli->connect_error();
 }
?>