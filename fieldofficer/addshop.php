
<!DOCTYPE HTML>
<?php
ob_start();
include '../db.php';

?>
<html>
<head>
<title>Web store/ Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Add Shop<i class="fa fa-angle-right"></i>View Details</li>
            </ol>
<div>
    <form class="form-horizontal" method ="POST" enctype="multipart/form-data">
                                                        <div class="form-group">
									<label for="Name" class="col-sm-2 control-label">District</label>
									<div class="col-sm-8">
										<select class="form-control1" name="district" required="">
                                                                                    <option value="">Select District</option>
                                                                                    <?php
                                                                                    $qr=mysqli_query($con,"select * from district");
                                                                                    while($r=mysqli_fetch_array($qr))
                                                                                    {
                                                                                        
                                                                                    
                                                                                    ?>
                                                                                    <option value="<?php echo $r['Id']; ?>"><?php echo $r['District']; ?></option>
                                                                                    <?php  } ?>
                                                                                </select>
                        
									</div>
									
								</div>
							<div class="form-group">
									<label for="Name" class="col-sm-2 control-label">Shop Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="station" id="focusedinput" value="" required="">
									</div>
									
								</div>
								<div class="form-group">
									<label for="Name" class="col-sm-2 control-label">Address</label>
									<div class="col-sm-8">
										<textarea class="form-control1" name="address" id="focusedinput" value="" required=""></textarea>
									</div>
									
								</div>
                                                              <div class="form-group">
									<label for="Name" class="col-sm-2 control-label">Phone Number</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="phone" id="focusedinput" value="" required="">
									</div>
									
								</div>
                                                   
                                                           <div class="form-group">
									<label for="Name" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="email" id="focusedinput" value="" required="">
									</div>
									
								</div>
                                                         <div class="form-group">
									<label for="Name" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="password" id="focusedinput" value="" required="">
									</div>
									
								</div>
         <div class="form-group">
									<label for="Name" class="col-sm-2 control-label">Photo</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="imgs" required="" />
									</div>
									
								</div>
          						<div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<input type="submit" class="btn-primary btn" name="s1" value="Add">
				<button class="btn-default btn">Reset</button>
			</div>
		</div>
	 </div>
							</form>
    <?php

if(isset($_POST['s1']))
{
$district=$_POST['district'];
$address=$_POST['address'];
$station=$_POST['station'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$filename = $_FILES['imgs']['name'];
       
        $f = $_FILES['imgs']['tmp_name'];
$path="shop/";
       
       
 $filepath=$path.$filename;
 $query="insert into shop(District,Name,Address,Phone,Email,Password,Image)values('$district','$station','$address','$phone','$email','$password','$filepath')";

 $result=mysqli_query($con,$query);
 $qm=mysqli_query($con,"insert into login(Username,Password,Usertype) values('$email','$password','shop')");
  move_uploaded_file($f,$filepath);
 if($result)
 {
    header("location:addshop.php?s=1");
 }

}
?>
</div>





<div style="margin-left: 320px;">


<div class="w3l-table-info" style="margin-left: -320px; overflow-x: auto;">
					  <h2>View shop</h2>
                                          
                                        <table id="table">
						<thead>
						  <tr>
							<th>Id</th>
							<th>District</th>
							<th>Name</th>
							<th>Address</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Image</th>
                                                        <th>Actions</th>
                                                        <th></th>
                                                        
						  </tr>
						</thead>
						<tbody>
						  <?php
                                                 
                                                  $qr="select * from shop";
                                                  
                                                  
                                                  $qrr=  mysqli_query($con,$qr);
                                                  $i=1;
                                                  while($r=mysqli_fetch_array($qrr))
                                                  {
                                                      $did=$r['District'];
                                                      $qr1=  mysqli_query($con, "select * from district where Id=$did");
                                                      $r1=mysqli_fetch_array($qr1);
                                                  ?>
                                                    <tr>
                                                          <form name="f1" method="post" action="">
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $r1['District'];?></td>
                                                         <td><?php echo $r['Name'];?></td>
                                                         <td><?php echo $r['Address']; ?></td> 
                                                           <td><?php echo $r['Email'];?></td>
                                                           <td><?php echo $r['Phone'];?></td>
                                                           <td><img src="<?php echo $r['Image'];?>" width="60" height="60"/></td>
                                                           <td><a href="edit_shop.php?id=<?php echo $r['Id'];?>">Edit</a></td>
                                                           <td><a href="del_shop.php?id=<?php echo $r['Id'];?>&email=<?php echo $r['Email'];?>"><input type="button" name="btn" value="delete" onclick="alert('are you sure want to delete??')"> </a></td>
                             
                            
                                                          </form>  
                                                    </tr>
                                                    <?php
                                                 
                                                  $i++;
                                                   }
                                                    ?>
						
               
                                           </tbody>  
                                                
					  </table>
    </div>
    
    
    
    
    
    



<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
</br>
<div class="copyrights" style="margin-left: -320px;">
	 <p>© 2019 Infotech . All Rights Reserved | Design by  <a href="#" target="_blank">kodsinfotech</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				   
                        <?php
                        if($_SESSION['admin']['Usertype']=='admin')
                        {
                            include './adminsidebar.php';  
                            
                       
                        }
 else {
                            include './employeesideba.php';                      
 }
                        ?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
<?php
                             ob_flush();


?>
