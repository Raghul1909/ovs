<?php
$username=$_POST['username'];
$password=$_POST['password'];
if ($username=="admin" && $password=="admin") {
	header('location:result.php');
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