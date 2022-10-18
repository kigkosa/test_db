<?php
require('condb.php');

// แสดงข้อมูล
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    printf("<br>%s %s",$row['id'],$row["name"]);
}


?>
<!-- ฟรอมกรอกข้อมูล -->
<form action="./addUser.php" method="post">
    <input type="text" name="name_s">
    <input type="submit" value="บันทึก">
</form>