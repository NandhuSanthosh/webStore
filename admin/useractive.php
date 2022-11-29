<?php
include '../db.php';
ob_start();

if(isset($_GET['id']))
    {
    
    $iid=$_GET['id'];
$status=$_GET['s'];

if($status=='Inactive')
{

    $qy12="update registration set Status='Active' where Id='$iid' and Status='$status'";
    $qyy12=mysqli_query($con,$qy12);
    $qkk=  mysqli_query($con, "select *from registration  where Id='$iid'");
    $r1=  mysqli_fetch_array($qkk);
    $email=$r1['Email'];
     $q2="update login set Status='Active' where Username='$email'";
    $q12=mysqli_query($con,$q2);
   header("location:viewuswer.php?id='$iid'");
}
elseif ($status=='Active')
{
  $qy="update registration set Status='Inactive' where Id='$iid' and Status='$status'";
    $qyy=mysqli_query($con,$qy);
    $qkk=  mysqli_query($con, "select *from registration  where Id='$iid'");
    $r1=  mysqli_fetch_array($qkk);
    $email=$r1['Email'];
     $q2="update login set Status='Inactive' where Username='$email'";
    $q12=mysqli_query($con,$q2);
   header("location:viewuswer.php?id='$iid'");  
}
    }
  
ob_flush();
?>
