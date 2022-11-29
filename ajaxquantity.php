<?php 
ob_start();
include './db.php';
$id=$_POST['id'];
$q=$_POST['q'];

$e=$_SESSION['User']['Username'];
$qv=  mysqli_query($con, "update  cart set Quantity='$q' where Id='$id'");
echo '<script>alert("Successfully add Quantity to Cart...");
    </script>';
header("location:aaa.php");
?>
