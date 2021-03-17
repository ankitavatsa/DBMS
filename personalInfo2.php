<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="font.css"> 
	<title>PersonalInfo Page</title> 
</head> 

<body> 
<?php
include 'connect.php';
if(isset($_POST['submit'])){
$FirstName =mysqli_real_escape_string($con,$_POST['FirstName']);
$LastName= mysqli_real_escape_string($con,$_POST['LastName']);
$Email= mysqli_real_escape_string($con,$_POST['Email']);
$Age= mysqli_real_escape_string($con,$_POST['Age']);




$insertquery = "insert into pinfo(FirstName,LastName,Email,Age) values('$FirstName','$LastName','$Email','$Age')";
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
alert(" insertion not sucessful ");
</script>
<?php
}
header('location:ContactDetail2.php');
}


?>
<form action="" method="post"> 
		
		<div class="login-box"> 
			<div class="card">
				
			<center><h1>PersonalInfo</h1></center> 
			
			
			<div class="textbox"> 
				<i class="fa fa-user" aria-hidden="true"></i> 
				<input type="text" placeholder="FirstName"
						name="FirstName" value="" required> 
			</div> 
			
				<div class="textbox"> 
				<i class="fa fa-user" aria-hidden="true"></i> 
				<input type="text" placeholder="LastName"
						name="LastName" value="" required> 
			</div> 
			<div class="textbox"> 
				<i class="fa fa-envelope" aria-hidden="true"></i> 
				<input type="text" placeholder="Email"
						name="Email" value="" required> 
			</div> 
			<div class="textbox"> 
				<i class="fa fa-calendar" aria-hidden="true"></i> 
				<input type="number" placeholder="Age"
						name="Age" value="" required> 
			</div> 
			<input class="button" type="submit"
			name="submit" value="Submit"> 
			
			
				</div> 	
				
		</div> 
	</form> 
</body> 

</html> 
