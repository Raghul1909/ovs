<?php
$username=$_POST['username'];
$password=$_POST['password'];

$con=mysqli_connect("localhost","root","","mydb");

$sql="SELECT password from mytable where id='$username'"; 
$result=mysqli_query($con,$sql);
$result=mysqli_fetch_assoc($result);
$sql="SELECT status from mytable where id='$username'"; 
$sta=mysqli_query($con,$sql);
$sta=mysqli_fetch_assoc($sta);
$sta=$sta['status'];
if($password==$result['password'] && $sta=="NO")
{
	if(!($username==null && $password==null))
	{
	$sql="insert into sec(username,password) values('$username','$password')";
	mysqli_query($con,$sql);
	}
	$sql="SELECT email from mytable where id='$username'";
	$mail=mysqli_query($con,$sql);
	$mail=mysqli_fetch_assoc($mail);
	$mail=$mail['email'];
	$sql="SELECT otp from mytable where id='$username'";
	$random=mysqli_query($con,$sql);
	$random=mysqli_fetch_assoc($random);
	$random=$random['otp'];
	$get=mail("$mail","ONE TIME PASSWORD","$random");	
	if($get)
	{	
		header('location:otp.php');
	}
}
elseif ($sta=="YES") {
	echo '<script language="javascript">';
	echo 'alert("Your Vote is Already Registered")';
	echo '</script>';
	echo '<script language="javascript">';
	echo 'window.location.href="front.php"';
	echo '</script>';	
}
else{
	echo '<script language="javascript">';
	echo 'alert("Enter the Correct Details")';
	echo '</script>';
	echo '<script language="javascript">';
	echo 'window.location.href="front.php"';
	echo '</script>';
}
?>