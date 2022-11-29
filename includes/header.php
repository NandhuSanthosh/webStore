<?php 
if(isset($_SESSION['User']))
{
                                 $e=$_SESSION['User']['Username'];
                                 $qv=  mysqli_query($con,"select *from registration where Email='$e'");
                                 $r2=  mysqli_fetch_array($qv);
}
                                 ?> 
<div class="header-bar">
            <div class="info-top-grid">
               <div class="info-contact-agile">
                  <ul>
                     <li>
                        <span class="fas fa-phone-volume"></span>
                        <p>+(0468)2327788</p>
                     </li>
                     <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="mailto:info@example.com">info@webstore.com</a></p>
                     </li>
                     <li>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-8 col-md-3 logo-head">
                     <h1><a class="navbar-brand" href="index.php">Web Store</a></h1>
                  </div>
                 
                  <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                        <ul>
                           <li>
                              <span class="far fa-heart"></span>
                           </li>
                            <?php 
                     if(isset($_SESSION['User']))
                        {
                                  ?>
                           <li>
                               <a href="logout.php"> <span class="far fa-lock"></span></a>
                           </li>
                           <?php 
                        }
 else {
     ?>
         <li>
                              <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                           </li>                    
                           <?php 
 }
                           ?>
                            <?php 
                     if(isset($_SESSION['User']))
                        {
                                  ?>
                           <li class="toyscart toyscart2 cart cart box_1">
                             
                                   
                               
                               
                                 <a href="aaa.php">  <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down"></span>
                                     </button></a>
                           
                           </li>
                            <?php 
                        }
                              ?>
                             <li>
                               <?php  
                               if(isset($_SESSION['User']))
{
                               ?>  
                              <p>Hai, <?php echo $r2['Name'];?></p>
                              <?php 
}
                              ?>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="about.php" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="service.php" class="nav-link">Service</a>
                     </li>
                    
                        <?php  
                               if(isset($_SESSION['User']))
{
                               ?>  
                       <li class="nav-item">
                          <a href="items.php" class="nav-link">Items</a>
                     </li>
                      <li class="nav-item">
                          <a target="_blank" href="aaa.php" class="nav-link">My Cart</a>
                     </li>
                       <li class="nav-item">
                           <a href="complaint.php" class="nav-link">Complaint</a>
                     </li>
                       <li class="nav-item">
                           <a href="resetpaswd.php" class="nav-link">Reset Password</a>
                     </li>
                     <?php 
}
else
{
                     ?>

                     <li class="nav-item">
                        <a href="reg.php" class="nav-link">Registration</a>
                     </li>
                    
                            <?php
}
                     if(isset($_SESSION['User']))
                        {
                                  ?>
                           <li>
                               <a href="logout.php" class="nav-link"> Logout</a>
                           </li>
                           <?php 
                        }
                        else
                        {
                            ?>
                           <li class="nav-item">
                         <button type="button" data-toggle="modal"  data-target="#exampleModal"> Login</button>
                     </li> 
                           <?php 
                        }
                           ?>
                  </ul>
               </div>
            </nav>
         </div>