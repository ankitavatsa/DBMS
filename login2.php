<?php
session_start();
?>

<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="login2.css"> 
	<title>login page</title> 
</head> 
<body>
<?php
include 'connect.php';
if(isset($_POST['submit'])){
$Email =mysqli_real_escape_string($con,$_POST['Email']);
$Password = mysqli_real_escape_string($con,$_POST['Password']);

$Email_search = "select * from signup where Email='$Email' ";
$query = mysqli_query($con,$Email_search);

$Email_count = mysqli_num_rows($query);

if($Email_count){
	$Email_pass = mysqli_fetch_assoc($query);
	$db_pass = $Email_pass['Password'];

	
	$pass_decode = Password_verify($Password,$db_pass);
	if($pass_decode){
echo "login successful";
header('location:personalInfo2.php');
?>
<script>
locatiom.replace("home.php");
</script>
<?php
	}else{
	echo "Password Incorrect";
	}
}else{
	echo "Invalid Email";
}

}

?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post"> 
		
		<div class="login-box"> 
			<div class="card">
				
			<center><h1>Login</h1></center>
			
			
			<div class="textbox"> 
				<i class="fa fa-envelope" aria-hidden="true"></i> 
				<input type="text" placeholder="Email"
						name="Email" value="" required> 
			</div> 
			
				<div class="textbox"> 
				<i class="fa fa-lock" aria-hidden="true"></i> 
				<input type="Password" placeholder="Password"
						name="Password" value="" required> 
			</div> 
			
			<input class="button" type="submit"
			name="submit" value="Submit"> 
			<p><i>dont have account?</i><a href="signup2.php"><b>Signup</b></a></p>	
			
				</div> 	
				
		</div> 
	</form> 
</body> 

</html> 
