<?php
require('condb.php');

if (isset($_POST['name_s'])){
    $name = $_POST['name_s'];
    $sql2 = "INSERT INTO user (name) VALUES (?)";
    $sm  = $conn->prepare($sql2);
    $sm->bind_param('s',$name);
    $sm->execute();    
}



$sql = "SELECT * FROM user";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    printf("<br>%s %s",$row['id'],$row["name"]);
}
$result -> free_result();
$conn->close();
?>

<form action="/test_db" method="post">
    <input type="text" name="name_s">
    <input type="submit" value="บันทึก">
</form>