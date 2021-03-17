

<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="mood.css"> 
    <title>Mood</title> 
</head> 

<body> 
<?php
include 'connect.php';
if(isset($_POST['submit'])){
   
    $Name =mysqli_real_escape_string($con,$_POST['Name']);
    $Email =mysqli_real_escape_string($con,$_POST['Email']);
    $mood =mysqli_real_escape_string($con,$_POST['mood']);
    $insertquery="insert into mood(Name,Email,mood) values('$Name','$Email','$mood')";
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
            <div class="card" style="margin-left:2%;width: 110%;margin-bottom:40%">
                
            <center><h1>What's Your Mood?</h1> </center>
           
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
                
               
                <select name="mood" style="float:right;margin-right:32%">
                <option>SELECT</option>
                <option value="happy">Happy <span style='font-size:100px;'>&#128513;</span></option>
                <option value="angry">Angry <span style='font-size:100px;'>&#128544;</span></option>
                <option value="crying">Crying <span style='font-size:100px;'>&#128546;</span></option>
                <option value="sleepy">Sleepy <span style='font-size:100px;'>&#128554;</span></option>
                <option value="tired">Tired <span style='font-size:100px;'>&#128555;</span></option>
                <option value="dizzy">Dizzy <span style='font-size:100px;'>&#128565;</span></option>
                <option value="evil">Evil <span style='font-size:100px;'>&#128520;</span></option>
                <option value="confused">Confused <span style='font-size:100px;'>&#128533;</span></option>
                <option value="disappointed">Disappointed <span style='font-size:100px;'>&#128542;</span></option>
                <option value="inlove">In Love <span style='font-size:100px;'>&#128525;</span></option>
                </select>
            </div> 
          
           
            <input class="button" type="submit"
            name="submit" value="Submit"> 
            
            
                </div>  
                
        </div> 
    </form> 
</body> 

</html>