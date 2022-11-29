<?php 
ob_start();
include './db.php';
if(isset($_SESSION['User']))
{
    $e=$_SESSION['User']['Username'];
    $qvd=  mysqli_query($con,"select *from registration where Email='$e'");
                                 $r2d=  mysqli_fetch_array($qvd);
}
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Stock-Clearance portal</title>
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
               <li>Testimony</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--//banner -->
      <!--Typography-->
      <section class="inner-pages py-5">
         <div class="container py-xl-5 py-sm-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Testimony</h3>
            <!-- forms -->
            <section class="typo-section py-4 border-top border-bottom">
               <h3 class="typo-main-heading mb-lg-4 mb-3 pr-3 pb-1">Testimony</h3>
             
               <!-- form1 -->
               <form method="post" name="f1" action="" enctype="multipart/form-data">
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="ema" class="form-control" id="inputEmail4" value="<?php echo $e;?>">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="inputPassword4">Name</label>
                        <input type="text" class="form-control" name="nam" id="inputPassword4" value="<?php echo $r2d['Name'];?>">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputAddress">Message</label>
                     <input type="text" name="msg" class="form-control" id="inputAddress" >
                  </div>
                  <div class="form-group">
                     <label for="inputAddress">upload Image</label>
                     <input type="file" name="img" class="form-control" >
                  </div>
                 
                  <div class="form-group">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                        Check me out
                        </label>
                     </div>
                  </div>
                   <button type="submit" name="b1" class="btn btn-primary">Submit</button>
               </form>
               <?php 
               if(isset($_POST['b1']))
               {
                 $ema=$_POST['ema'];
                 $nam=$_POST['nam'];
                 $msg=$_POST['msg'];
                 $filename=$_FILES['img']['name'];
                 $f=$_FILES['img']['tmp_name'];
                 $path="testimony/";
                 $filepath=$path.$filename;
                 $qvb=  mysqli_query($con,"insert into testimony(Name,Email,Msg,Image,Status)values('$nam','$ema','$msg','$filepath','Inactive')");
                 move_uploaded_file($f,"images/". $filepath);
                 echo '<script>alert("Testimony add success fully...");</script>';
               }
               ?>
               <!--// form1 -->
               <!-- form2 -->
             
               <!--// form2 -->
            </section>
            <!--// forms -->
          
    
            <!--// Pagination -->
            
            <!--// Cards -->
         </div>
      </section>
      <!--//typography -->
      <!--subscribe-address-->
    
      <!--//subscribe-address-->
 
      <!--//subscribe-->
      <!-- footer -->
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
      <!-- //bootstrap working-->      <!-- //OnScroll-Number-Increase-JavaScript -->
   </body>
</html>
