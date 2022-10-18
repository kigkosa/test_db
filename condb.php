<?php 
// เชือมดาต้าเบส
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "db_test";
 $conn= new mysqli($hostName,$userName,$password,$dbName);
 if(!$conn){
    echo "not connected";
 }

?>