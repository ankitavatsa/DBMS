

<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="font.css"> 
	<title>Gynaecologist Page</title> 
</head> 

<body> 
<?php
include 'connect.php';
if(isset($_POST['submit'])){
	$Name =mysqli_real_escape_string($con,$_POST['Name']);
	$GynaeId= mysqli_real_escape_string($con,$_POST['GynaeId']);
	$GynaeContact= mysqli_real_escape_string($con,$_POST['GynaeContact']);
	$insertquery="insert into gynaecologist(Name,GynaeId,GynaeContact) values('$Name','$GynaeId','$GynaeContact')";
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
 header('location:CycleInfo2.php');
}



	?>
<form action="" method="post"> 
		
		<div class="login-box"> 
			<div class="card">
				
			<center><h1>Gynaecologist Page</h1></center> 
			
			
			<div class="textbox"> 
				<i class="fa fa-user" aria-hidden="true"></i> 
				<label>Name</label>
				<select name="Name">
				<option>--select--</option>
				<option value="sharma">sharma</option>
				<option value="singh">singh</option>
				<option value="roy">roy</option>
				<option value="vatsa">vatsa</option>
				</select>
			</div> 
			
			<div class="textbox"> 
				<i class="fa fa-user" aria-hidden="true"></i> 
				<label>GynaeId</label>
				<select name="GynaeId">
				<option>--select--</option>
				<option value="1001">1001</option>
				<option value="1002">1002</option>
				<option value="1003">1003</option>
				<option value="1004">1004</option>
				</select>
			</div> 
           
			<div class="textbox"> 
				<i class="fa fa-id-card-o" aria-hidden="true"></i> 
				<label>Contact</label>
				<select name="GynaeContact">
				<option>--select--</option>
				<option value="98756466">98756466</option>
				<option value="86464664">86464664</option>
				<option value="87954043">87954043</option>
				<option value="87954043">87954043</option>
				</select>
			</div> 
           
			<input class="button" type="submit"
			name="submit" value="Submit"> 
			
			
				</div> 	
				
		</div> 
	</form> 
</body> 

</html> 
