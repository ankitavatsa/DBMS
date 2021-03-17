<?php 
$active='Account';
include("includes/header.php");

?>
    <div id="content"><!--content begins-->
        <div class="container"><!--container begins-->
            <div class="col-md-12"><!--col-md-12 begins-->
              <ul class="breadcrumb"><!--breadcrumb begins-->
                  <li>
                      <a href="index.php">Home</a>
                  </li>
                  <li>Register</li>
              </ul><!--breadcrumb ends-->
            </div><!--col-md-12 ends-->
            <div class="col-md-3"><!--col-md-3 begins-->
            <?php
             include 'connect.php';
              if(isset($_POST['register'])){
    
                $customer_name = mysqli_real_escape_string($con,$_POST['customer_name']);
                
                $customer_email = mysqli_real_escape_string($con,$_POST['customer_email']);
                
                $customer_pass = mysqli_real_escape_string($con,$_POST['customer_pass']);
                
                $customer_country = mysqli_real_escape_string($con,$_POST['customer_country']);
                
                $customer_city = mysqli_real_escape_string($con,$_POST['customer_city']);
                
                $customer_contact =mysqli_real_escape_string($con, $_POST['customer_contact']);
                
                $customer_address =mysqli_real_escape_string($con, $_POST['customer_address']);
                
               
                
                $insert_customer = "insert into ur(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address) values ('$customer_name','$customer_email','$customer_pass','$customer_country','$customer_city','$customer_contact','$customer_address')";
                
                $run_customer = mysqli_query($con,$insert_customer);
                
                if($run_customer){

                    ?>
            <script> 
            alert("insertion Successful");
            </script>
            <?php
             }else{
                 ?>
                 <script> 
            alert(" No Connection ");
            </script>
            <?php
             }
            
            }
            ?>
            </div><!--col-md-3 ends-->
            <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box" style="background-color: #f2f4f5;border-radius:5px;"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2 style="font-weight:bold;padding-top: 4%;padding-bottom: 1%;font-size:24px;"> Register A New Account</h2>
                           
                           
                       </center><!-- center Finish -->
                       
                       <form action="" method="post"><!-- form Begin -->
                           
                           <div class="form-group" style="padding-left: 2%;padding-right: 2%;padding-top: 3%;"><!-- form-group Begin -->
                               
                               <label style="font-weight:bold;">Your Name</label>
                               
                               <input type="text" class="form-control" name="customer_name"  value="" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group" style="padding-left: 2%;padding-right: 2%;"><!-- form-group Begin -->
                               
                               <label style="font-weight:bold;">Your Email</label>
                               
                               <input type="text" class="form-control" name="customer_email"  value="" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group" style="padding-left: 2%;padding-right: 2%;"><!-- form-group Begin -->
                               
                               <label style="font-weight:bold;">Your Password</label>
                               
                               <input type="password" class="form-control" name="customer_pass"  value="" required>
                               
                           </div><!-- form-group Finish -->

                           <div class="form-group" style="padding-left: 2%;padding-right: 2%;"><!-- form-group Begin -->
                               
                               <label style="font-weight:bold;">Your Country</label>
                               
                               <input type="text" class="form-control" name="customer_country"  value="" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group" style="padding-left: 2%;padding-right: 2%;"><!-- form-group Begin -->
                               
                               <label style="font-weight:bold;">Your City</label>
                               
                               <input type="text" class="form-control" name="customer_city"  value="" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group" style="padding-left: 2%;padding-right: 2%;"><!-- form-group Begin -->
                               
                               <label style="font-weight:bold;">Your Contact</label>
                               
                               <input type="text" class="form-control" name="customer_contact"  value="" required>
                               
                           </div><!-- form-group Finish -->

                           <div class="form-group" style="padding-left: 2%;padding-right: 2%;"><!-- form-group Begin -->
                               
                               <label style="font-weight:bold;">Your Address</label>
                               
                               <input type="text" class="form-control" name="customer_address"  value="" required>
                               
                           </div><!-- form-group Finish -->
                           
                           
                           
                           <div class="text-center" style="padding-top: 1%;padding-bottom: 2%;"><!-- text-center Begin -->
                               
                               <button type="submit" name="register"  value="register" class="btn btn-primary" style="font-size:18px;border: 0.5px solid black;background-color:#fff;">
                               
                               <i class="fa fa-user" aria-hidden="true"></i> Register
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
  <?php
    include("includes/footer.php");
  ?>
  <a id="scrollup" href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="js/main.js"></script>
   

</body>
</html>

