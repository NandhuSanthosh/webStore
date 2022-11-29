<?php
ob_start();
include '../db.php';
        if(isset($_GET['id']))
        {
            $iid=$_GET['id'];
            $email=$_GET['email'];
            $qr1="delete from shop where Id='$iid'";
            $qr2=mysqli_query($con,$qr1);
             $qry="delete from login where Username='$email'";
            $qryy=mysqli_query($con,$qry);
            if($qr2)
            {
            header("location:addshop.php?d=1");
        }
        else 
        {
        	echo '<script>alert("Can not delete... officers exist!!!");</script>';
        }
        }
ob_flush();
?>
