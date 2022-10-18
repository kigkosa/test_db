<?php
require('condb.php');


$sql = "SELECT * FROM user";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    printf("<br>%s %s",$row['id'],$row["name"]);
}


?>

<form action="./addUser.php" method="post">
    <input type="text" name="name_s">
    <input type="submit" value="บันทึก">
</form>