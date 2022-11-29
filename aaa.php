 <?php 
ob_start();
include './db.php';
if(isset($_SESSION['User']))
{
    $e=$_SESSION['User']['Username'];
    $qn=  mysqli_query($con,"select *from registration where Email='$e'");
    $rn=  mysqli_fetch_array($qn);
}
$qb=  mysqli_query($con,"select *from cart where User='$e' and Status='Pending'");

$num=  mysqli_num_rows($qb);

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
      <!--checkout-->
      <link rel="stylesheet" type="text/css" href="css/checkout.css">
      <!--//checkout-->
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
//  function oneplus()
//{
//   var c4 = document.getElementById('c4').value;
//   var c1 = document.getElementById('c1').value;
//   var c2 = document.getElementById('c2').value;
//c3=c1 * c2;
//  $.ajax({
//    type:'post',
//        url:'ajaxquantity.php',// put your real file name 
//        data:{q: c3, id: c4},
//        success:function(msg){
//           
//        }
//        
// });
//   document.getElementById('c2').value = c1 * c2;
//
//}
     
   
   </script>
   </head>
   <body>
      <!--headder-->
    <?php 
include './includes/header.php';
    ?>
         <!--//headder-->
         <!-- banner -->
         <div class="inner_page-banner one-img" style="background: url(images/sh6.jpg) ;">
         </div>
         <!-- short -->
         <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="index.php">Home</a>
                     <span>/ /</span>
                  </li>
                  <li>Checkout</li>
               </ul>
            </div>
         </div>
         <!-- //short-->
         <!--Checkout-->  
         <!-- //banner -->
         <!-- top Products -->
         <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
               <div class="shop_inner_inf">
                  <div class="privacy about">
                     <h3>Chec<span>kout</span></h3>
                     <div class="checkout-right">
                        <h4>Your shopping cart contains: <span><?php echo $num;?> Products</span></h4>
                        <?php 
                        if($num>=1)
                        {
                        ?>
                        <table class="timetable_sub">
                           <thead>
                              <tr>
                                 <th>SL No.</th>
                                 <th>Product</th>
                                <th>Quantity</th>
                                 <th>Product Name</th>
                                 <th>Price</th>
                                 <th>Remove</th>
                              </tr>
                           </thead>
                           <tbody>
                             <?php
                             $i=1;
                             $sum=0;
                             
                                 while($r9=  mysqli_fetch_array($qb))
                                 {
                                     $iid=$r9['Itemid'];
                                     $qsd=  mysqli_query($con,"select *from items where Id='$iid'");
while($r19=  mysqli_fetch_array($qsd))
{
    
    $sum=$sum+$r19['Price'];
 

                                 ?>
                             
                              <tr class="rem1">
                                 <td class="invert"><?php echo $i;?></td>
                                 <td class="invert-image"><a href="#"><img src="fieldofficer/<?php echo $r19['Image'];?>" alt=" " class="img-responsive"></a></td>
                                 <td class="invert">
                                    <div class="quantity">
                                        <form id="ffs" method="post" action="">
                                         
                                       <div class="quantity-select">
                                            <input type="hidden" name="cc4" id="cc4" value="<?php echo $r9['Id'];?>" />
                                            <input type="hidden" id="pprice" name="pprice"  value="<?php echo $r19['Price'];?>" />
                                           <span><input type="text" style="width: 25px;" id="c1" name="c1"  value="1"/></span>
                                           <input type="submit" name="sd" value="add" class="btn btn-dark" />
                                            </div>
                                        </form>
                                     <?php 
                                     if(isset($_POST['sd']))
                                     {
                                        $c1=$_POST['c1'];
                                        $cc4=$_POST['cc4'];
                                        $pprice=$_POST['pprice'];
                                        $qv=  mysqli_query($con, "update  cart set Quantity='$c1',Price='$pprice' where Id='$cc4'");
echo '<script>alert("Successfully add Quantity to Cart...");
   window.location.href="aaa.php"; </script>';
                                     }
                                     ?>
                                        
                                    </div>
                                 </td>
                                 
                                 <td class="invert"><?php echo $r19['Name'];?></td>
                                 
                                 <td class="invert">
                                     <input type="hidden" name="c4" id="c4" value="<?php echo $r9['Id'];?>" />
                                     <input type="text" id="c2" name="c2"  value="<?php echo $r19['Price'];?>" style="    border: none;" readonly=""/>
                                     </td>
                                 <td class="invert">
                                    <div class="rem">
                                        <a href="del_cart.php?id=<?php echo $r9['Id'];?>">  <div class="close1"> </div></a>
                                    </div>
                                 </td>
                              </tr>
                            
                             
                             
  <?php 
 $qbn=  mysqli_query($con, "SELECT sum( `Quantity`*`Price` )AS Total
FROM cart");
 $r77=  mysqli_fetch_array($qbn);
 $sum2=$r77['0'];
}
                                $i++;
                                }
                                 ?>
                               
                           </tbody>
                        </table>
                   
                        <table>
                            <tr>
                                   <td>
                                      
                                Total </td><td> <span>$ <?php echo $sum2;?>/-</span></td>
                                   
                           </td>
                              </tr>
                        </table>
                             <?php 
                        }
 else {
                            echo 'No Poduct Found...!';
 }
                        ?>
                     </div>
                     <div class="checkout-left">
                        <div class="col-md-4 checkout-left-basket">
                           <h4>Items In basket</h4>
                           <ul>
                               <?php 
                               $qbo=  mysqli_query($con,"select *from cart where User='$e' and Status='Pending'");
                              
                                 while($r90=  mysqli_fetch_array($qbo))
                                 {
                                     $iid=$r90['Itemid'];
                                     $qsdd=  mysqli_query($con,"select *from items where Id='$iid'");
while($r190=  mysqli_fetch_array($qsdd))
{
    
    
                               ?>
                              <li><?php echo $r190['Name'];?>(<?php echo $r90['Quantity'];?>) <i>-</i> <span>$ <?php echo $r190['Price'];?> /-</span></li>
                                <?php 
}
                                $i++;
                                }
                                 ?>
                              <li>Total <i>-</i> <span>$ <?php echo $sum2;?>/-</span></li>
                           </ul>
                        </div>
                        <div class="col-md-8 address_form">
                           <h4>Add a new Details</h4>
                           <form action="" method="post" class="creditly-card-form agileinfo_form">
                              <section class="creditly-wrapper wrapper">
                                 <div class="information-wrapper">
                                    <div class="first-row form-group">
                                       <div class="controls">
                                          <label class="control-label">Full name: </label>
                                          <input class="billing-address-name form-control" type="text" name="name" value="<?php echo $rn['Name'];?>">
                                       </div>
                                       <div class="card_number_grids">
                                          <div class="card_number_grid_left">
                                             <div class="controls">
                                                <label class="control-label">Price:</label>
                                                <input class="form-control" id="txt1" type="text" name="pric" value="<?php echo $sum2;?>" readonly="">
                                             </div>
                                          </div>
                                        
                                          
                                            <div class="card_number_grid_right">
                                             <div class="controls">
                                                <label class="control-label">Card Number: </label>
                                                <input class="form-control" type="text" name="num" value=""  >
                                             </div>
                                          </div>
                                            <div class="card_number_grid_right">
                                             <div class="controls">
                                                <label class="control-label">CVV: </label>
                                                <input  class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" value="" placeholder="&#149;&#149;&#149;" >
                                             </div>
                                          </div>
                                          <div class="clear"> </div>
                                       </div>
                                     <div class="controls">
                                                   <label class="control-label">Expiration Date</label>
                                                   <input class="expiration-month-and-year form-control" type="text" name="exp" placeholder="MM / YY">
                                                </div>
                                      
                                    </div>
                                      <div class="checkout-right-basket">
                              <input type="hidden" name="hid" value="<?php echo $p;?>"/>
                                              <input type="submit" name="s1" value="Make A Payment"/>
                                 </div>
                          </div>
                              </section>
                           </form>
                            <?php 
                                     if(isset($_POST['s1']))
                                     {
                                         $hid=$_POST['hid'];
                                         $cardnam=$_POST['name'];
                                        
                                         $cardnam=$_POST['name'];
                                          $number=$_POST['num'];
                                           $security=$_POST['security-code'];
                                           $exp=$_POST['exp'];
                                        $qpp=  mysqli_query($con,"insert into payment(Uid,Price,Quatity,Total,cardname,Cardno,Cvv,Expirydate)values('$e','$sum2','nil','nil','$cardnam','$number','$security','$exp')");  
                            
                                       echo '<script>alert("Payment transferred successfully...");
                                           window.location.href="items.php";</script>';
                                     }
                                     ?>
                          
                        </div>
                        <div class="clearfix"> </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
               <!-- //top products -->
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
      <!--quantity-->
      <script>
         $('.value-plus').on('click', function () {
         	var divUpd = $(this).parent().find('.value'),
         		newVal = parseInt(divUpd.text(), 10) + 1;
         	divUpd.text(newVal);
         });
         
         $('.value-minus').on('click', function () {
         	var divUpd = $(this).parent().find('.value'),
         		newVal = parseInt(divUpd.text(), 10) - 1;
         	if (newVal >= 1) divUpd.text(newVal);
         });
      </script>
      <!--quantity-->
      <!--closed-->
      <script>
         $(document).ready(function (c) {
         	$('.close1').on('click', function (c) {
         		$('.rem1').fadeOut('slow', function (c) {
         			$('.rem1').remove();
         		});
         	});
         });
      </script>
      <script>
         $(document).ready(function (c) {
         	$('.close2').on('click', function (c) {
         		$('.rem2').fadeOut('slow', function (c) {
         			$('.rem2').remove();
         		});
         	});
         });
      </script>
      <script>
         $(document).ready(function (c) {
         	$('.close3').on('click', function (c) {
         		$('.rem3').fadeOut('slow', function (c) {
         			$('.rem3').remove();
         		});
         	});
         });
      </script>
      <!--//closed-->
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
