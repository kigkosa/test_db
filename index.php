<?php
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "db_test";
 $conn= new mysqli($hostName,$userName,$password,$dbName);
 if(!$conn){
    echo "not connected";
 }

$name = "book123";
$sql2 = "INSERT INTO user (name) VALUES (?)";
$sm  = $conn->prepare($sql2);
$sm->bind_param('s',$name);
$sm->execute();



$sql = "SELECT * FROM user";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    printf("<br>%s %s",$row['id'],$row["name"]);
}


?>