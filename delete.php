<?php


// database connection
$server = "localhost";
$user = "root";
$password = "";
$db="reddays";

$con = mysqli_connect($server,$user,$password,$db);
 $sql="delete  from gynaecologist where GynaeId='$_GET[GynaeId]'";
 if(mysqli_query($con,$sql))
 header("refresh:0.2; url=Gynaecologist.php");
 else
 echo"Not deleted";
?>
