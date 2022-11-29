<?php
include '../db.php';
ob_start();

if(isset($_GET['id']))
    {
    
    $iid=$_GET['id'];
$status=$_GET['s'];

if($status=='Inactive')
{

    $qy12="update testimony set Status='Active' where Id='$iid' and Status='$status'";
    $qyy12=mysqli_query($con,$qy12);
   header("location:viewtestimony.php?id='$iid'");
}
elseif ($status=='Active')
{
  $qy="update testimony set Status='Inactive' where Id='$iid' and Status='$status'";
    $qyy=mysqli_query($con,$qy);
   header("location:viewtestimony.php?id='$iid'");  
}
    }
  
ob_flush();
?>
