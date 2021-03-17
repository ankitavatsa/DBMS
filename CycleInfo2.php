
<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="cycleinfo2.css"> 
	<title>CyclelInfo Page</title> 
</head> 

<body> 

<?php
include 'connect.php';
if(isset($_POST['submit'])){
$Name =mysqli_real_escape_string($con,$_POST['Name']);

$PeriodStartDate= mysqli_real_escape_string($con,$_POST['PeriodStartDate']);
$PeriodEndDate= mysqli_real_escape_string($con,$_POST['PeriodEndDate']);
$CycleLength= mysqli_real_escape_string($con,$_POST['CycleLength']);
$PeriodLength= mysqli_real_escape_string($con,$_POST['PeriodLength']);
$GynaeId = mysqli_real_escape_string($con,$_POST['GynaeId']);

$Gquery= "select * from gynaecologist where GynaeId='$GynaeId' ";
$query= mysqli_query($con,$Gquery);
$Gcount=mysqli_num_rows($query);
if($Gcount==0){
	echo"GynaeId does not exists";
}else{
$insertquery = "insert into cinfo(Name,PeriodStartDate,PeriodEndDate,CycleLength,PeriodLength,GynaeId) values('$Name','$PeriodStartDate','$PeriodEndDate','$CycleLength','$PeriodLength','$GynaeId')";
$iquery = mysqli_query($con,$insertquery);
header('location:NextPrediction2.php');
if($iquery){

	?>
<script> 
alert("insertion Successful");

</script>
<?php
}else{
 ?>
 <script> 
alert(" insertion not sucessful..");
</script>
<?php
}
}
}


?>
<form action="" method="post"> 
		
		<div class="login-box"> 
			<div class="card">
				
			<center><h1>CycleInfo</h1></center> 
			
			
			<div class="textbox"> 
				<i class="fa fa-user" aria-hidden="true"></i> 
				<input type="text" placeholder="Name"
						name="Name" value="" required> 
			</div> 
			
			
            <div class="textbox"> 
				<i class="fa fa-tint" aria-hidden="true"></i> 
				<input type="text" placeholder="PeriodStartDate"
				onfocus="(this.type='date')" onblur="(this.type='text')" id="date"name="PeriodStartDate" value="" required> 
			</div> 
            <div class="textbox"> 
				<i class="fa fa-bath" aria-hidden="true"></i> 
				<input type="text" placeholder="PeriodEndDate"
						onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="PeriodEndDate" value="" required> 
			</div> 
            <div class="textbox"> 
				<i class="fa fa-clock-o" aria-hidden="true"></i> 
				<input type="number" placeholder="CycleLength"
						name="CycleLength" value="" required> 
			</div> 
            <div class="textbox"> 
				<i class="fa fa-tachometer" aria-hidden="true"></i> 
				<input type="number" placeholder="PeriodLength"
						name="PeriodLength" value="" required> 
			</div> 
            <div class="textbox"> 
				<i class="fa fa-card-o" aria-hidden="true"></i> 
				<input type="varchar"placeholder="GynaeId"
						name="GynaeId" value="" required> 
			</div> 
			<input class="button" type="submit"
			name="submit" value="Submit"> 
			
			
				</div> 	
				
		</div> 
	</form> 
</body> 

</html> 
