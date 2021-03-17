<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="font.css"> 
	<title>ContactDetail Page</title> 
</head> 

<body> 
<?php
include 'connect.php';
if(isset($_POST['submit'])){
$CountryName =mysqli_real_escape_string($con,$_POST['CountryName']);
$StateName= mysqli_real_escape_string($con,$_POST['StateName']);
$CityName= mysqli_real_escape_string($con,$_POST['CityName']);
$ContactNo= mysqli_real_escape_string($con,$_POST['ContactNo']);
$PinCode= mysqli_real_escape_string($con,$_POST['PinCode']);

$ContactNo_search = "select ContactNo from signup where ContactNo='$ContactNo' ";
$query = mysqli_query($con,$ContactNo_search);
$ContactNo_count = mysqli_num_rows($query);
if($ContactNo_count==0){
	echo"Contact does not exists";
}else{
$insertquery = "insert into contactdetail(CountryName,StateName,CityName,ContactNo,PinCode) values('$CountryName','$StateName','$CityName','$ContactNo','$PinCode')";
$iquery = mysqli_query($con,$insertquery);
header('location:Gynaecologist2.php');
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
}
}

?>
<form action="" method="post"> 
		
		<div class="login-box"> 
			<div class="card">
				
			<center><h1>ContactDetail </h1> </center>
			
			
			<div class="textbox"> 
				<i class="fa fa-flag" aria-hidden="true"></i> 
				<input type="text" placeholder="CountryName"
						name="CountryName" value="" required> 
			</div> 
			
				<div class="textbox"> 
				<i class="fa fa-home" aria-hidden="true"></i> 
				<input type="text" placeholder="StateName"
						name="StateName" value="" required> 
			</div> 
            <div class="textbox"> 
				<i class="fa fa-home" aria-hidden="true"></i> 
				<input type="text" placeholder="CityName"
						name="CityName" value="" required> 
			</div> 
            
			<div class="textbox"> 
				<i class="fa fa-mobile" aria-hidden="true"></i> 
				<input type="number" placeholder="ContactNo"
						name="ContactNo" value="" required> 
			</div> 
            <div class="textbox"> 
				<i class="fa fa-calendar" aria-hidden="true"></i> 
				<input type="number" placeholder="PinCode"
						name="PinCode" value="" required> 
			</div> 
			<input class="button" type="submit"
			name="submit" value="Submit"> 
			
			
				</div> 	
				
		</div> 
	</form> 
</body> 

</html> 
