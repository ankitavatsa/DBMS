<?php

require('connection.inc.php');
require('functions.inc.php');
$msg='';
if(isset($_POST['submit'])){
    $username=get_safe_value($con,$_POST['username']);
    $password=get_safe_value($con,$_POST['password']);
    $sql="select * from loginto where username='$username' and password='$password'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count>0){
$SESSION['ADMIN_LOGIN']='yes';
$SESSION['ADMIN_USERNAME']=$username;

header('location:signup.php');
die();
    }else{
       $msg="please enter correct login details";
    }
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="loginto.css"> 
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body class="bg-dark">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
               <div class="login-form mt-150">
                  <form method="post">
                  <div class="login-box"> 
			<div class="card">
         <center><h1>Admin Login</h1></center> 
                     <div class="form-group">
                        
                        <input type="text" name="username" class="form-control" placeholder="username" required>
                     </div>
                     
                     <div class="form-group">
                        
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                     </div>
                    
                     <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Login</button>
					</form>
               <div class="field_error"><?php echo $msg?></div>
               </div>
            </div>
         </div>
      </div>
     
   </body>
</html>