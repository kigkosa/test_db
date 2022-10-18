<?php
require('condb.php');

if (isset($_POST['name_s'])){
    $name = $_POST['name_s'];
    $sql2 = "INSERT INTO user (name) VALUES (?)";
    $sm  = $conn->prepare($sql2);
    $sm->bind_param('s',$name);
    $sm->execute();    
}


header("Location: ./");

?>
