<?php
require('condb.php');

// เพิ่มข้อมูล
if (isset($_POST['name_s'])){
    $name = $_POST['name_s'];
    $sql2 = "INSERT INTO user (name) VALUES (?)";
    $sm  = $conn->prepare($sql2);
    $sm->bind_param('s',$name);
    $sm->execute();    
}

// ส่งไปกลับไปหน้า ./
header("Location: ./");

?>
