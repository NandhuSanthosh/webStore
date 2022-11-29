<?php 
ob_start();
include './db.php';
$category=$_POST['category'];
$items=$_POST['items'];
$itm=  implode(',', $items);
$qd=  mysqli_query($con, "insert into order_items(Category,Items) values('$category','$itm')");
$qlo=  mysqli_query($con, "select max(Id) from order_items");
$r5=  mysqli_fetch_array($qlo);
$oid=$r5['0'];
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
               <li>Shop Now</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--show Now-->  
      <!--show Now-->  
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Earn It as Own</h3>
            <div class="row">
               
               <div class="left-ads-display col-lg-12">
                  <div class="row">
                      <?php 
                      foreach ($items as $icons)
                        {

    $qrf=  mysqli_query($con, "select distinct Shop from items where Name='$icons'");
                        }
                       while ($r2=  mysqli_fetch_array($qrf))
                      {
                       $shopid=$r2['Shop'];
                       $qc=mysqli_query($con, "select *from items where Shop='$shopid' GROUP BY Shop");
                       while($r4=  mysqli_fetch_array($qc))
                       {
                       $qk=  mysqli_query($con, "select *from shop where Id='$shopid'");
                       $rt1=mysqli_fetch_array($qk);
                    
                          $district=$rt1['District'];
                      $qdist=  mysqli_query($con, "select *from district where Id='$district'");
                  $rtt1=  mysqli_fetch_array($qdist);
                      ?>
                     <div class="col-lg-3 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                                  <img src="admin/<?php echo $rt1['Image'];?>" class="img-thumbnail img-fluid" alt="">
                                 <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                       <a href="single.php?id=<?php echo $r4['Id'];?>" class="link-product-add-cart">Quick View</a>
                                    </div>
                                 </div>
                                 <span class="product-new-top">New</span>
                              </div>
                              <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
                                          <h4>
                                             <a href=""> <?php echo $rt1['Name'];?></a>
                                          </h4>
                                          <div class="grid-price mt-2">
                                              
                                             <span class="money "><?php echo $rtt1['District'];?></span>
                                          </div>
                                         
                                            <div class="grid-price mt-2">
                                           <span class="money "><?php echo $rt1['Name'];?></span><br/>
                                           <span class="money "><?php echo $rt1['Address'];?></span>
                                          </div>
                                             
                                            <div class="grid-price mt-2">
                                           <span class="money "><?php echo $rt1['Phone'];?></span>
                                          </div>
                                             <div class="grid-price mt-2">
                                           <span class="money "><?php echo $rt1['Email'];?></span>
                                          </div>
                                              <div class="grid-price mt-2">
                                                  <a href="product_view.php?shopid=<?php echo $shopid;?>&oid=<?php echo $oid;?>" class="btn btn-info" >GO TO CART</a>
                                          </div>
                                       </div>
                                      
                                    </div>
                                  
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                      <?php 
                      
                      }
                      }
                      
                      ?>
               
                  </div>
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
