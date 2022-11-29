<?php
ob_start();
include '../db.php';

?>
<!DOCTYPE HTML>

<html>
<head>
<title>Stock-Clearance Portal/ Admin</title>
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
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Fish Seed <i class="fa fa-angle-right"></i>View Details</li>
            </ol>
<div>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
                 <tr>
                <td>Category</td>
                <td><select name="sltitem">
                        <option>Choose</option>
                        <?php 
                        $qs=  mysqli_query($con,"select *from category order by Id desc");
                        while ($r1=  mysqli_fetch_array($qs))
                        {
                        ?>
                        <option value="<?php echo $r1['Category'];?>"><?php echo $r1['Category'];?></option>
                        <?php 
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="txtname" value="" /></td>
            </tr>
            
            <tr>
                <td>Price</td>
                <td><input type="text" name="txtage" value="" /></td>
            </tr>
           
            <tr>
                <td>Image</td>
                <td><input type="file" name="imgs"  /></td>
            </tr>
             <tr>
                
                 <td><input type="submit" name="sub" class="btn-primary" value="SAVE" /></td>
            </tr>
        </table>
        
    </form>
    <?php 
    if(isset($_POST['sub']))
    {
         $sltitem=$_POST['sltitem'];
        $txtname=$_POST['txtname'];
  
          $txtage=$_POST['txtage'];
    
        $filename = $_FILES['imgs']['name'];
       
        $f = $_FILES['imgs']['tmp_name'];
$path="uploads/";
       
       
 $filepath=$path.$filename;
        $q=  mysqli_query($con,"insert into items(Category,Name,Price,Image,Type,Email) values('$sltitem','$txtname','$txtage','$filepath','admin','NA')");
       move_uploaded_file($f,$filepath);
        echo "<script>alert('Successfully saved your details...');</script>"; 
        
    }
    ?>
</div>





<div style="margin-left: 320px;">


<div class="w3l-table-info" style="margin-left: -320px; overflow-x: auto;">
					  <h2>View Registered Items</h2>
                                          
                                          <table id="table">
						<thead>
						  <tr>
							<th>Id</th>
                                                        <th>Category</th>
							<th>Name</th>
                                                    

							<th>Price</th>
                                                      
                                                         <th>Image</th>
                                                        <th>Actions</th>
                                                       
                                                        
						  </tr>
						</thead>
						<tbody>
						  <?php
                                                  $qr="select  * from items order by Id desc";
                                                  $qrr=  mysqli_query($con,$qr);
                                                  $i=1;
                                                  while($r=mysqli_fetch_array($qrr))
                                                  {
                                                  ?>
                                                    <tr>
                                                          <form name="f1" method="post" action="">
                                                        <td><?php echo $i;?></td>
                                            <td><?php echo $r['Category'];?></td>
                                                        <td><?php echo $r['Name'];?></td>
                                                        <td><?php echo $r['Price'];?></td>

                                                        <td><img src="<?php echo $r['Image'];?>" width="60" height="60"/></td>
                                                                                                   
                                                        <td><a href="deladditem.php?id=<?php echo $r['Id'];?>"><input type="button" name="btn" value="delete" onclick="alert('are you sure want to delete??')"> </a></td>
                             
                            </td>
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
