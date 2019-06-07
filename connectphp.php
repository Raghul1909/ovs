<?php

$id=$_POST['id'];
$name=$_POST['name'];
$date=$_POST['date'];
$city=$_POST['city'];
$email=$_POST['email'];
$password=$_POST['password'];
$otp= (($id+$id)/2)*3;
$otp=substr($otp,-5);

$date=date("Y-m-d",strtotime($date));
$date=str_replace('-','', $date);

$con=mysqli_connect("localhost","root","","mydb");

if((strlen($id)==7)&&(!is_null($name))&&(!is_null($city))&&(!is_null($email))&&(!is_null($password)))
{

	$querry="insert into mytable(id,name,dob,city,email,password,otp) values ('$id','$name','$date','$city','$email','$password','$otp')";	
$query=mysqli_query($con,$querry);
}
if($querry){
	header('location:front.php');
}
else
{
	return false;
}
?>