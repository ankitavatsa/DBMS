
<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="font.css"> 
	<title>Create account Page</title> 
</head> 

<body> 
<?php
include 'connect.php';

if(isset($_POST['submit'])){
$UserName= mysqli_real_escape_string($con,$_POST['UserName']);
$Email=mysqli_real_escape_string($con,$_POST['Email']);
$Password=mysqli_real_escape_string($con,$_POST['Password']);
$ContactNo=mysqli_real_escape_string($con,$_POST['ContactNo']);

$pass=password_hash($Password,PASSWORD_BCRYPT);
$Emailquery= "select * from signup where Email='$Email' ";
$query= mysqli_query($con,$Emailquery);
$Emailcount=mysqli_num_rows($query);
if($Emailcount>0){
	echo"Email already exists";
}else{
	$insertquery = "insert into signup(UserName, Email, Password, ContactNo) values('$UserName','$Email','$pass','$ContactNo')";
	$iquery = mysqli_query($con,$insertquery);

	if($iquery){

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
 header('location:login2.php');
}

}




?>
	<form action="" method="post"> 
		
		<div class="login-box"> 
			<div class="card">
				
			<h1>Sign up</h1> 
			
			<div class="textbox"> 
			
				<i class="fa fa-user" aria-hidden="true"></i> 
				<input type="text" placeholder="UserName"
						name="UserName" value="" required> 
			</div> 
			<div class="textbox"> 
				<i class="fa fa-envelope" aria-hidden="true"></i> 
				<input type="text" placeholder="Email"
						name="Email" value="" required> 
			</div> 
			
				<div class="textbox"> 
				<i class="fa fa-lock" aria-hidden="true"></i> 
				<input type="password" placeholder="Password"
						name="Password" value="" required> 
			</div> 
			<div class="textbox"> 
				<i class="fa fa-mobile" aria-hidden="true"></i> 
				<input type="number" placeholder="ContactNo"
						name="ContactNo" value="" required> 
			</div> 
			<input class="button" type="submit"
			name="submit" value="Submit"> 
			<p><i>Already a user?</i><a href="login2.php"><b>Log in</b></a></p>	
			
				</div> 	
				
		</div> 
	</form> 
</body> 

</html> 
