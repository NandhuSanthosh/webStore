<?php
ob_start();
include '../db.php';
        if(isset($_GET['id']))
        {
            $iid=$_GET['id'];
            $qr1="delete from payment where Id='$iid'";
            $qr2=mysqli_query($con,$qr1);
            header("location:payment.php");
        }
ob_flush();
?>
