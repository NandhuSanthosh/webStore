<?php 
ob_start();
include './db.php';
$id=$_GET['id'];
 $qh=  mysqli_query($con, "select *from items where Id='$id'"); 
 $r1=  mysqli_fetch_array($qh);
 $price=$r1['Price'];
?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Web Store Portal</title>
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
      <!--checkout-->
      <link rel="stylesheet" type="text/css" href="css/checkout.css">
      <!--//checkout-->
      <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
     <script type="text/javascript">
            
           function multiply()
{
   
   var textValue1 = document.getElementById('txt1').value;
   var textValue2 = document.getElementById('txt2').value;

   document.getElementById('txt3').value = textValue1 * textValue2;

}
        </script>
   </head>
   <body>
      <?php 
include './includes/header.php';
    ?>
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.php">Home</a>
                  <span>/ /</span>
               </li>
               <li>Payment</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!-- top Products -->
      <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="ads-grid_shop">
               <div class="shop_inner_inf">
                  <div class="privacy about">
                     <h3>Pay<span>ment</span></h3>
                     <!--/tabs-->
                     <div class="responsive_tabs">
                        <div id="horizontalTab">
                           <ul class="resp-tabs-list">
                            
                              <li>Online Payment</li>
                           
                           </ul>
                           <div class="resp-tabs-container">
                              <!--/tab_one-->
                            
                              <!--//tab_one-->
                              <div class="tab2">
                                 <div class="pay_info">
                                    <form action="" method="post" class="creditly-card-form agileinfo_form">
                                       <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                          <div class="credit-card-wrapper">
                                             <div class="first-row form-group">
                                                <div class="controls">
                                                   <label class="control-label">Name on Card</label>
                                                   <input class="billing-address-name form-control" type="text" name="name" required="" placeholder="E.g : John Smith">
                                                </div>
                                                    <div class="controls">
                                                   <label class="control-label">Price</label>
                                                   <input id="txt1" class="billing-address-name form-control" type="text" name="pric" value="<?php echo $price;?>" readonly="">
                                                </div>
                                                  <div class="controls">
                                                   <label class="control-label">Quantity</label>
                                                   <input class="billing-address-name form-control" type="number" name="tquantity" value="" id="txt2"  onkeyup="multiply();">
                                                </div>
                                                  <div class="controls">
                                                   <label class="control-label">Amount</label>
                                                   <input class="billing-address-name form-control" type="number" name="tamount" value="" id="txt3" readonly="">
                                                </div>
                                                <div class="w3_agileits_card_number_grids">
                                                   <div class="w3_agileits_card_number_grid_left">
                                                      <div class="controls">
                                                         <label class="control-label">Card Number</label>
                                                         <input class="number credit-card-number form-control"  type="text" name="num"   placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                      </div>
                                                   </div>
                                                   <div class="w3_agileits_card_number_grid_right">
                                                      <div class="controls">
                                                         <label class="control-label">CVV</label>
                                                         <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                      </div>
                                                   </div>
                                                   <div class="clear"> </div>
                                                </div>
                                                <div class="controls">
                                                   <label class="control-label">Expiration Date</label>
                                                   <input class="expiration-month-and-year form-control" type="text" name="exp" placeholder="MM / YY">
                                                </div>
                                             </div>
                                              <input type="hidden" name="hid" value="<?php echo $p;?>"/>
                                              <input type="submit" name="s1" value="Make A Payment"/>
<!--                                              <button type="submit" name="sub" class="submit"><span>Make a payment </span></button>-->
                                          </div>
                                       </section>
                                    </form>
                                     <?php 
                                     if(isset($_POST['s1']))
                                     {
                                         $hid=$_POST['hid'];
                                         $cardnam=$_POST['name'];
                                         $tquantity=$_POST['tquantity'];
                                          $tamount=$_POST['tamount'];
                                         $cardnam=$_POST['name'];
                                          $number=$_POST['num'];
                                           $security=$_POST['security-code'];
                                           $exp=$_POST['exp'];
                                        $qpp=  mysqli_query($con,"insert into payment(Uid,Price,Quatity,Total,cardname,Cardno,Cvv,Expirydate)values('$e','$price','$tquantity','$tamount','$cardnam','$number','$security','$exp')");  
                            
                                       echo '<script>alert("Payment transferred successfully...");
                                           window.location.href="items.php";</script>';
                                     }
                                     ?>
                                 </div>
                              </div>
                            

                           </div>
                        </div>
                     </div>
                     <!--//tabs-->
                  </div>
               </div>
               <!-- //payment -->
               <div class="clearfix"></div>
            </div>
         </div>
      </section>
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
      <!--// cart-js -->
      <!-- easy-responsive-tabs -->
      <script src="js/easy-responsive-tabs.js"></script>
      <script>
         $(document).ready(function () {
         	$('#horizontalTab').easyResponsiveTabs({
         		type: 'default', //Types: default, vertical, accordion           
         		width: 'auto', //auto or any width like 600px
         		fit: true, // 100% fit in a container
         		closed: 'accordion', // Start closed if in accordion view
         		activate: function (event) { // Callback function if tab is switched
         			var $tab = $(this);
         			var $info = $('#tabInfo');
         			var $name = $('span', $info);
         			$name.text($tab.text());
         			$info.show();
         		}
         	});
         	$('#verticalTab').easyResponsiveTabs({
         		type: 'vertical',
         		width: 'auto',
         		fit: true
         	});
         });
      </script>
      <!-- credit-card -->
      <script src="js/creditly.js"></script>
      <link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />
      <script>
         $(function () {
         	var creditly = Creditly.initialize(
         		'.creditly-wrapper .expiration-month-and-year',
         		'.creditly-wrapper .credit-card-number',
         		'.creditly-wrapper .security-code',
         		'.creditly-wrapper .card-type');
         
         	$(".creditly-card-form .submit").click(function (e) {
         		e.preventDefault();
         		var output = creditly.validate();
         		if (output) {
         			// Your validated credit card output
         			console.log(output);
         		}
         	});
         });
      </script>
      <!-- //credit-card -->
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