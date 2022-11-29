<?php 
ob_start();
include './db.php';
if(isset($_SESSION['User']))
{
    $e=$_SESSION['User']['Username'];
}
$id=$_GET['id'];
$amt=$_GET['price'];
$ema=$_GET['e'];
//echo "select *from items where Id='$id' order by Id desc";
                     // $qv2=  mysql_query("select *from items where Id='$id' order by Id desc");
                   //  $r22=  mysql_fetch_array($qv2);

 $qvx=  mysqli_query($con,"insert into addtocart(Pid,Email,Price,Status)values('$id','$ema','$amt','Incart')");
                                echo '<script>alert("successfully add to cart your item...!");</script>';
                                echo '<script>window.location="shop.php";</script>';                           

                                ?>