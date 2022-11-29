<?php
ob_start();
include '../db.php';
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $qr=mysqli_query($con,"select * from items where Id=$id");
    $r=mysqli_fetch_array($qr);
  }
?>
<!DOCTYPE HTML>

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
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Add Category<i class="fa fa-angle-right"></i>View Details</li>
            </ol>
<div>
       <form class="form-horizontal" method ="POST" enctype="multipart/form-data">
              <div class="form-group">
               <label for="Name" class="col-sm-2 control-label">category</label>
               <div class="col-sm-8">
                <select class="form-control1" name="sltitem" required="">
                  <option value="">Select category</option>
                  <?php
                  $qr=mysqli_query($con,"select * from category");
                  while($r1=mysqli_fetch_array($qr))
                  {
                    
                    
                    ?>
                    <option <?php if($r['Category']==$r1['Category']){?> selected <?php } ?>value="<?php echo $r1['Category']; ?>" ><?php echo $r1['Category']; ?></option>
                  <?php  } ?>
                </select>
                
              </div>
              
            </div>
             <div class="form-group">
               <label for="Name" class="col-sm-2 control-label">Shop</label>
               <div class="col-sm-8">
                <select class="form-control1" name="sltshop" required="">
                  <option value="">Select shop</option>
                  <?php
                  $qr1=mysqli_query($con,"select * from shop");
                  while($r11=mysqli_fetch_array($qr1))
                  {
                    
                    
                    ?>
                    <option <?php if($r['Shop']==$r11['Id']){?> selected <?php } ?>value="<?php echo $r11['Id']; ?>" ><?php echo $r11['Name']; ?></option>
                  <?php  } ?>
                </select>
                
              </div>
              
            </div>
            <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">Name</label>
             <div class="col-sm-8">
              <input type="text" class="form-control1" name="txtname" id="focusedinput" value="<?php echo $r['Name']; ?>" >
            </div>
            
          </div>
          <div class="form-group">
           <label for="Name" class="col-sm-2 control-label">Details</label>
           <div class="col-sm-8">
            <textarea class="form-control1" name="details" id="focusedinput" value="" ><?php echo $r['Details']; ?></textarea>
          </div>
          
        </div>
        <div class="form-group">
         <label for="Name" class="col-sm-2 control-label">Price</label>
         <div class="col-sm-8">
          <input type="text" class="form-control1" name="txtage" id="focusedinput" value="<?php echo $r['Price']; ?>" >
        </div>
        
      </div>
      <div class="form-group">
         <label for="Name" class="col-sm-2 control-label">Count</label>
         <div class="col-sm-8">
          <input type="text" class="form-control1" name="txtcount" id="focusedinput" value="<?php echo $r['Quantity']; ?>" >
        </div>
        
      </div>
    <div class="form-group">
         <label for="Name" class="col-sm-2 control-label">Image</label>
         <div class="col-sm-8">
             <img src="<?php echo $r['Image'];?>" width="100" height="100">
             <input type="file" class="form-control1" name="img" id="focusedinput" value="<?php echo $r['Phone']; ?>" >
        </div>
        
      </div>
    <input type="hidden" name="id" value="<?php echo $id?>">
      <input type="hidden" name="old" value="<?php echo $r['Image'];?>">
    <div class="panel-footer">
      <div class="row">
       <div class="col-sm-8 col-sm-offset-2">
        <input type="submit" class="btn-primary btn" name="s1" value="Update">
        <button class="btn-default btn">Reset</button>
      </div>
    </div>
  </div>
</form>
    <?php

if(isset($_POST['s1']))
{
  $id=$_POST['id'];
  $old=$_POST['old'];
   $sltitem=$_POST['sltitem'];
          $sltshop=$_POST['sltshop'];
        $txtname=$_POST['txtname'];
   $details=$_POST['details'];
          $txtage=$_POST['txtage'];
    $txtcount=$_POST['txtcount'];
$filename=$_FILES["img"]["name"];
$f=$_FILES["img"]["tmp_name"];
if($filename=='')
{
 $filepath=$old;   
}
 else {
    move_uploaded_file($f,"uploads/".$filename);
    $path="uploads/";
            $filepath=$path.$filename;
            unlink($old);
}


  $query="update items set Category='$sltitem',Shop='$sltshop',Name='$txtname',Details='$details',Price='$txtage',Quantity='$txtcount',Image='$filepath' where Id=$id";

  $result=mysqli_query($con,$query);
  
  if($result)
  {

    header("location:additem.php?e=1");
  }
}
?>
</div>





<div style="margin-left: 320px;">


    
    
    
    
    



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
	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				   
                        <?php
                        if($_SESSION['admin']['Usertype']=='field officer')
                        {
                            include './adminsidebar.php';  
                            
                       
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
