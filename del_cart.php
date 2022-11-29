<?php 
ob_start();
include './db.php';
$id=$_GET['id'];

$qv=  mysqli_query($con, "delete from cart where Id='$id'");
echo '<script>alert("Successfully delete Items...");
    window.location.href="aaa.php";</script>';

?>