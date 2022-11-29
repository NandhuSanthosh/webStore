<?php 
ob_start();
include './db.php';
$id=$_GET['id'];
$shopid=$_GET['shopid'];
$oid=$_GET['oid'];
$price=$_GET['price'];
$e=$_SESSION['User']['Username'];
$qv=  mysqli_query($con, "insert into cart(Itemid,User,Status,Quantity,Price) values('$id','$e','Pending','1','$price')");
echo '<script>alert("Successfully add Item to Cart...");
    </script>';
header("location:product_view.php?shopid=$shopid&oid=$oid");
?>
