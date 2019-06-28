<?php  
$sql="SELECT username from sec";
$uname=mysqli_query($con,$sql);
$uname=mysqli_fetch_assoc($uname);
$uname=$uname['username'];
$sql="SELECT otp from mytable where id='$uname'"; 
$result=mysqli_query($con,$sql);
$result=mysqli_fetch_assoc($result);
$result=$result['otp'];
$random=$result;
$random=$random+$uname;
$random=substr($random, -5);
$sql="UPDATE mytable SET otp=$random WHERE id=$uname";
mysqli_query($con,$sql);
	$con=mysqli_connect("localhost","root","","mydb");
	$del="Truncate table sec";
	mysqli_query($con,$del);
	header("location:front.php");
?>