<?php
require('condb.php');
// ลบข้อมูล
if (isset($_GET['user_id'])){
    $count=$conn->prepare("DELETE FROM user WHERE id=?");
    $count->bind_param("s",$_GET['user_id']);
    $count->execute();
}
header("Location: ./");
?>