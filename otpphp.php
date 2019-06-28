<?php
$otp=$_POST['otp'];
$con=mysqli_connect("localhost","root","","mydb");
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
if ($otp==$result) {
	$del="Truncate table sec";
	mysqli_query($con,$del);
	$sql="insert into sec(username) values('$uname')";
	mysqli_query($con,$sql);
	header('location:final.php');
	}
else{
	$del="Truncate table sec";
	mysqli_query($con,$del);
	echo '<script language="javascript">';
	echo 'alert("Enter the Correct Details")';
	echo '</script>';
	echo '<script language="javascript">';
	echo 'window.location.href="front.php"';
	echo '</script>';
}
?>