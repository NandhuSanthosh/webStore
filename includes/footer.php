

      <!--//subscribe-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2022 Web Store. All Rights Reserved | Design by <a href="#" >Web Store</a>
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="" method="post">
                        <div class="fields-grid">
                       
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                            <button name="sub" type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                      <?php 
                      if(isset($_POST['sub']))
                      {
                       
                           $Email=$_POST['Email'];
                            $password=$_POST['password'];
                            //echo "select *from login where Username='$Email' and Password='$password' and Usertype='User'";
                            $qc=  mysqli_query($con,"select *from login where Username='$Email' and Password='$password' and Usertype='User' ");
                           
                            $r1=  mysqli_fetch_array($qc);
                         $n= mysqli_num_rows($qc);
                            if($n>=1)
                            {
                                echo 'hai';
                                $_SESSION['User']=$r1;
                                header("location:index.php");
                            }
                            else
                            {
                                echo '<script>alert("After verification you can enter into website...")</script>';
                            }
                      }
                      ?>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>