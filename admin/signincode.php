
<?php
ob_start();
include '../db.php';

 $username=$_REQUEST['txtname'];  
$password=$_REQUEST['txtpassword'];
//echo "select * from login where Username='$username' && Password='$password'";
$sel_ad=mysqli_query($con,"select * from login where Username='$username' && Password='$password'");
 $num=  mysqli_num_rows($sel_ad);
$row_ad=  mysqli_fetch_array($sel_ad);
//if($username==$row_ad['Username'] && $password==$row_ad['Passsword'])
//{
 if($num>=1)
{   
if($row_ad['Usertype']=='admin')
{
    $_SESSION['admin']=$row_ad;
   header("location:home.php");
}
elseif ($row_ad['Usertype']=='field officer') {
$_SESSION['admin']=$row_ad;
   header("location:../fieldofficer/home.php");
}

}
 

else{
echo 'After Verification U can Enter..!'; 
}



ob_flush();
?>