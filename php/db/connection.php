<?php
  define('HOST','localhost');
  define('USERNAME','root');
  define('PASSWORD','root');
  define('SDNT','sdnt');
  define('RECORD','records');
  // Database connectivity
  $dsn = 'mysql:dbname='.SDNT.';host=127.0.0.1'; # Data Source Name
  try{
    $Mysqli = new PDO($dsn,USERNAME,PASSWORD);
  	//echo "connection is successfull";
    //$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Display the error in mysqli database
  }catch (PDOException $e){
    echo 'Connection failed: ' . $e->getMessage();
  }
  # Move to cofig file
  ini_set('display_startup_errors', 1);
  ini_set('display_errors', 1);
  error_reporting(-1);  
?>