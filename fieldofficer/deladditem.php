<?php
ob_start();
include '../db.php';
        if(isset($_GET['id']))
        {
            $iid=$_GET['id'];
            $qr1="delete from items where Id='$iid'";
            $qr2=mysqli_query($con,$qr1);
            header("location:additem.php");
        }
ob_flush();
?>
