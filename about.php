<?php 
ob_start();
include './db.php';
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Web Store</title>
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
      <div class="inner_page-banner one-img" style="background: url(images/sh5.webp) no-repeat center;">
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
               <li>About</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--About -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">About Us</h3>
            <div class="about-innergrid-agile text-center">
               <h4>Welcome To Our Store</h4>
               <p class="mb-3"> It helps to keep customers on the site longer during their product research. If they can find the information they need then they don’t have to search Google or head to rival sites
               </p>
               <div class=" img-toy-w3l-top" style="background: url(images/sh4.jpg)no-repeat center;">
               </div>
            </div>
            <div class="about-sub-inner text-center mt-lg-4 mt-3">
               <h4>A faster and better
                  best to shop
               </h4>
               <div class="row">
                  <div class="col-lg-4 col-md-4 abut-gride">
                     <span class="fas fa-truck"></span>
                     <h5>Shipping</h5>
                     <p class="mt-3"> We Provide better and fast reaching of product world wide
                     </p>
                  </div>
                  <div class="col-lg-4 col-md-4 abut-gride">
                     <span class="fas fa-phone-volume"></span>  
                     <h5>Support</h5>
                     <p class="mt-3">We Provide better support for all of our customers 24*7
                     </p>
                  </div>
                  <div class="col-lg-4 col-md-4 abut-gride">
                     <span class="fas fa-undo"></span>
                     <h5> Return</h5>
                     <p class="mt-3"> Any disqualification make returning of products.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <!--//Customers Review -->
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
      <script defer src="js/activePage.js"></script>

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