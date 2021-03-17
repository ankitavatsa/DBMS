

<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="mood.css"> 
    <title>Symptom</title> 
</head> 

<body> 
<?php
include 'connect.php';
if(isset($_POST['submit'])){
   
    $Name =mysqli_real_escape_string($con,$_POST['Name']);
    $Email =mysqli_real_escape_string($con,$_POST['Email']);
    $symptoms =mysqli_real_escape_string($con,$_POST['symptoms']);
    $insertquery="insert into symptoms(Name,Email,symptoms) values('$Name','$Email','$symptoms')";
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
 header('location:frontend.php');
}



    ?>
<form action="" method="post"> 
        
        <div class="login-box"> 
            <div class="card"  style="margin-left:2%;width: 110%;margin-bottom:40%">
                
            <center><h1>Symptom</h1> </center>
            
            <div class="textbox"> 
			
				<i class="fa fa-user" aria-hidden="true"></i> 
				<input type="text" placeholder="Name"
						name="Name" value="" required> 
			</div> 
            <div class="textbox"> 
				<i class="fa fa-envelope" aria-hidden="true"></i> 
				<input type="text" placeholder="Email"
						name="Email" value="" required> 
			</div> 
            <div class="textbox"> 
                <select name="symptoms"  style="float:right;margin-right:32%">
               <option> SELECT </option>
                <option value="headache">Headache <span style='font-size:100px;'>&#128134;</span></option>
                <option value="shoulderache">Shoulder ache <span style='font-size:100px;'>&#128170;</span></option>
                <option value="nausea">Nausea <span style='font-size:100px;'>&#129314;</span></option>
                <option value="acidity">Acidity <span style='font-size:100px;'>&#128293;</span></option>
                <option value="diarrhea">Diarrhea <span style='font-size:100px;'>&#128701;</span></option>
                <option value="cough">Cough <span style='font-size:100px;'>&#129319;</span></option>
                <option value="backpain">Back pain <span style='font-size:100px;'>&#128716;</span></option>
                <option value="itchiness">Itchiness <span style='font-size:100px;'>&#128028;</span></option>
                <option value="heavyflow">Heavy flow <span style='font-size:100px;'>&#128166;</span></option>
                <option value="tenderbreats">Tender Breasts <span style='font-size:100px;'>&#128308;</span></option>
               
                </select>
            </div> 
          
           
            <input class="button" type="submit"
            name="submit" value="Submit"> 
            
            
                </div>  
                
        </div> 
    </form> 
</body> 

</html>