

<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
	<link rel="stylesheet" href="font.css"> 
	<title>NextPrediction Page</title> 
</head> 

<body> 
<?php
include 'connect.php';




if(isset($_POST['submit'])){
$PeriodStartDate =mysqli_real_escape_string($con,$_POST['PeriodStartDate']);
$CycleLength= mysqli_real_escape_string($con,$_POST['CycleLength']);


$predictquery= "select * from cinfo where PeriodStartDate='$PeriodStartDate' ";
$CycleQuery="select * from cinfo where CycleLength='$CycleLength' ";

$query= mysqli_query($con,$predictquery);
$q= mysqli_query($con,$CycleQuery);
$pcount=mysqli_num_rows($query);
$Ccount= mysqli_num_rows($q);
if(($pcount==0)and($Ccount==0)){
	echo"Info is not appropriate..";
}else{
$insertquery = "insert into nextprediction(PeriodStartDate,CycleLength) values('$PeriodStartDate','$CycleLength')";
$iquery = mysqli_query($con,$insertquery);
header('location:calculator.php');
if($iquery){

	?>
<script> 
alert("insertion Successful");
</script>
<?php
}else{
 ?>
 <script> 
alert(" insertion not successful ");
</script>
<?php
}

}
}

?>
<form action="" method="post"> 
		
		<div class="login-box"> 
			<div class="card">
				
			<center><h1>NextPrediction</h1></center> 
			
			
			<div class="textbox"> 
				<i class="fa fa-user" aria-hidden="true"></i> 
				<input type="text" placeholder="PeriodStartDate"
						onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="PeriodStartDate" value="" required> 
						
			</div> 
			
				<div class="textbox"> 
				<i class="fa fa-id-card-o" aria-hidden="true"></i> 
				<input type="number" placeholder="CycleLength"
						name="CycleLength" value="" required> 
			</div> 
			
			<input class="button" type="submit"
			name="submit" value="Submit"> 
			
			
				</div> 	
				
		</div> 
	</form> 
</body> 

</html> 
