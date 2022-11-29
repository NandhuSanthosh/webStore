<?php 
ob_start();
include './db.php';

?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Web Store portal</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <script defer src="js/activePage.js"></script>

      <script>
      function showitems(val)
      {
          
           $("#items").load('ajaxitems.php?q='+encodeURI(val));
      }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--price range-->
      <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
      <!--//price range-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body>
      <!--headder-->
   <?php 
include './includes/header.php';
    ?>
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.php">Home</a>
                  <span>/ /</span>
               </li>
               <li>Complaint</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--show Now-->  
      <!--show Now-->  
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Send Complaint</h3>
            <div class="row">
               
               <div class="col-lg-12">
                   <center>
                  <div class="">
                      
                        <form class="form-contact " action="" method="POST" id="" novalidate="novalidate" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <select name="shopname" class="form-control">
                                            <option>
                                                Select Shop
                                            </option>
                                            <?php 
                                            $qbn=  mysqli_query($con, "select *from shop");
                                            while ($r33=  mysqli_fetch_array($qbn))
                                            {
                                            ?>
                                            <option value="<?php echo $r33['Id'];?>"><?php echo $r33['Name'];?></option> 
                                            <?php 
                                            }
                                            ?>
                                        </select>   
                                    </div>
                                </div>  
                                <div class="col-12">
                                    <div class="form-group">
                                     <textarea class="form-control" name="complaint" id="name"    placeholder="Enter your Complaint" required=""></textarea>   
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                     <input class="form-control" name="image" id="name" type="file"   required="">   
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="button boxed-btn" name="submit" value="SEND">
                            </div>
                           
                        </form>
                      <?php

                    if(isset($_POST['submit']))
                    {
                        $uid=$_SESSION['User']['Username'];
                         $shopname=$_POST['shopname']; 
                        $complaint=$_POST['complaint']; 
                        $image=$_FILES['image']['name'];
                        $timage=$_FILES['image']['tmp_name'];
                        $path="admin/uploads/".$image;
                        $path1="uploads/".$image;
                        move_uploaded_file($timage,$path);
                        $qr1=mysqli_query($con,"insert into complaint(Shop,User_id,Complaint,Image) values('$shopname','$uid','$complaint','$path1')");
                       

                        if($qr1)
                        {
                          echo '<script>alert("Complaint Registered Successfully!!");</script>';
                        }
                        
                    }
                    ?>
                  </div>
                       </center>
               </div>
            </div>
         </div>
      </section>
      <!-- //show Now-->
      <!--subscribe-address-->
    
      <!--//subscribe-address-->
     <?php 
    include './includes/footer.php';
      ?>
      <!-- //Modal 1-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
       <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
		<!-- price range (top products) -->
		<script src="js/jquery-ui.js"></script>
		<script>
			//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [50, 6000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			}); //]]>
		</script>
		<!-- //price range (top products) -->

      <!-- start-smoth-scrolling -->
       <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working--> 
   </body>
</html>
