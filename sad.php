<?php


// database connection
$server = "localhost";
$user = "root";
$password = "";
$db="reddays";

$con = mysqli_connect($server,$user,$password,$db);
$sad= mysqli_real_escape_string($con,$_POST['sad']);
$happy= mysqli_real_escape_string($con,$_POST['happy']);
$veryhappy= mysqli_real_escape_string($con,$_POST['veryhappy']);
$insertquery="insert into rateus(sad,happy,veryhappy) values('sad','--------','--------')";
$iquery = mysqli_query($con,$insertquery);

header('location:frontend.php');
?>
