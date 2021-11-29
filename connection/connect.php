<?php
$serverName = "DESKTOP-R0ETL6G";
$user = "pluem";
$pass = "1234";


$connectionInfo = array( "Database"=>"Job_Application1", "UID"=>$user, "PWD"=>$pass);
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if( $conn ) {
      echo "GOOD!!"; 
}else{
     echo "BAD!!"; 
     die( print_r( sqlsrv_errors(), true)); 
     }


?>