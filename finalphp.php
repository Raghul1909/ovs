<?php
$op1=$_POST['1'];
$con=mysqli_connect("localhost","root","","mydb");
$sql="SELECT username from sec";
$uname=mysqli_query($con,$sql);
$uname=mysqli_fetch_assoc($uname);
$uname=$uname['username'];
if($uname!=0)
{
$chk="SELECT id from tab WHERE id=$uname";
$c=mysqli_query($con,$chk);
$c=mysqli_fetch_assoc($c);
$c=$c['username'];
$qry="insert into tab(id,vote) values('$uname','$op1')";
$qry=mysqli_query($con,$qry);
}
if (($c!=$uname)){
if($qry)
{
	$chk="SELECT email from mytable WHERE username=$uname";
	$chk=mysqli_query($con,$sql);
	$chk=mysqli_fetch_assoc($chk);
	$chk=$chk['email'];
	mail($chk,"Online Voting System","Your Vote Is Registered");
	$del="Truncate table sec";
	mysqli_query($con,$del);
	$sql="UPDATE mytable SET status='YES' WHERE id=$uname";
	mysqli_query($con,$sql);
	header("location:end.php");
}
}
else{
	$del="Truncate table sec";
	mysqli_query($con,$del);
	echo '<script language="javascript">';
	echo 'alert("You are Already Registered")';
	echo '</script>';
	echo '<script language="javascript">';
	echo 'window.location.href="front.php"';
	echo '</script>';	
}
?>
