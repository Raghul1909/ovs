<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);

body{
	background: #50a3a2;
	background: -webkit-linear-gradient(top left, #50b3c6 0%, #53e3a6 100%);
	background: -moz-linear-gradient(top right, #50a3c2 0%, #53e3a6 100%);
	background: -o-linear-gradient(top left, #50a3a2 0%, #53e3a6 100%);
	background: linear-gradient(bottom right, #50a3a2 0%, #53e3a6 100%);
	height: 655px;
}
.wrapper{

	font-family: Source Sans Pro;
	color: white;
	padding-top:110px; 
}
.inside{
	height: 360px;
	opacity: 0.2;
	background: white;
}
.in{
	right: -5px;
	width: 1200px;
	color: #51c7af;
	bottom: 30px;
	position: absolute;
}
img{
	background-color: white;
	border-radius: 360px;
	border: none;
	bottom: 66%;
	box-shadow: none;
	right: 46%;
	position: absolute;
	width: 85px;
}
button{
		padding: 10px;
		color: #51c7af;
		font-weight: 100%;
		font-size: 20px;
		border: 5px #51c7af;
		background-color: white;
		border-radius: 5px;
}
.form2 input{
		appearance: none;
		border: none;
		border: 1px solid fade(white, 40%);
		background-color: fade(white, 20%);
		width: 190px;
		border-radius: 3px;
		padding: 10px 15px;
		text-align: center;
		font-size: 18px;
		transition-duration: 0.25s;
		font-weight: 300;
}
.form1 input{
		height: 50px; 
		appearance: none;
		border: none;
		width: 200px;
		border: 1px solid fade(white, 40%);
		background-color: fade(white, 20%);
		border-radius: 3px;
		padding: 10px 15px;
		text-align: center;
		font-size: 18px;
		transition-duration: 0.25s;
		font-weight: 300;
}
button{
	position: absolute;
	left: 200px;
	height: 70px;
	width: 70px;
	border-radius: 360px;
}
nav {
  max-width: 960px;
  margin: 0 auto;
}

nav ul {
  text-align: center;
  background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 25%, rgba(255, 255, 255, 0.2) 75%, rgba(255, 255, 255, 0) 100%);
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
}

nav ul li {
  display: inline-block;
}
nav ul li a {
  padding: 18px;
  font-family: "Open Sans";
  text-transform:uppercase;
  color: rgba(0, 35, 22, 0.5);
  font-size: 18px;
  text-decoration: none;
  display: block;
}

nav ul li a:hover {	
  text-decoration:none;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
  background: rgba(255, 255, 255, 0.1);
  color: rgba(0, 35, 122, 0.7);
}
label{
	width: 250px;
	padding: 30px;
	font-size: 17px;
	color: white;
}
</style>
</head>

<script type="text/javascript">
	function preventback(){
		window.history.forward();
	}
	setTimeout("preventback()",0);
	window.onunload=function()
	{
		null
	};
</script>
<body>
	<nav>
    <ul>
      <li>
        <a href="Logoutphp.php">Home</a>
      </li>
      <li>
        <a href="About.php">About</a>
      </li>
      <li>
        <a href="contact.php">Contact</a>
      </li>
      <li>
        <a href="Logoutphp.php">Logout</a>
      </li>
    </ul>
  </nav>
	<?php
	$con=mysqli_connect("localhost","root","","mydb");
	$op1=mysqli_query($con,"SELECT COUNT(id) FROM tab WHERE vote=1");
	$op1=mysqli_fetch_assoc($op1);
	$op1=$op1['COUNT(id)'];
	$op2="SELECT COUNT(id) FROM tab WHERE vote=2";
	$op2=mysqli_query($con,"SELECT COUNT(id) FROM tab WHERE vote=2");
	$op2=mysqli_fetch_assoc($op2);
	$op2=$op2['COUNT(id)'];
	$op3="SELECT COUNT(id) FROM tab WHERE vote=3";	
	$op3=mysqli_query($con,"SELECT COUNT(id) FROM tab WHERE vote=3");
	$op3=mysqli_fetch_assoc($op3);
	$op3=$op3['COUNT(id)'];
	$nrv="SELECT COUNT(id) FROM mytable";
	$nrv=mysqli_query($con,$nrv);
	$nrv=mysqli_fetch_assoc($nrv);
	$nrv=$nrv['COUNT(id)'];

	$nvp="SELECT COUNT(id) FROM tab";
	$nvp=mysqli_query($con,$nvp);
	$nvp=mysqli_fetch_assoc($nvp);
	$nvp=$nvp['COUNT(id)'];
	if($op1>$op2){
		if($op1>$op3)
		{
			$res="A";
		}
		else
		{
			$res="C";
		}
	}
	else if($op2>$op3)
	{
		$res="B";
	}
	else{
		$res="C";
	}
	if($op1==$op2){
		$res="A AND B";
	}
	if($op2==$op3){
		$res="B AND C";
	}
	if($op3==$op1){
		$res="B AND A";
	}
	
	?>
<div class="wrapper">
<div class="container">
		<img src="pro.png">
	<div class="inside">

	</div>
	<div class="container">
	<div class="col-sm-12" style="width: 1200px;" >
	<center>	
	<div class="in">
	<div class="col-sm-6" style="width: 500px;">
		<form  class="form2" method="POST">
			<label>No. of voters</label>
			<input type="text" name="nrv" value="<?php echo @$nrv; ?>">
			<br>
			<label>No. of voted peoples</label>
			<input type="text" name="nvp" value="<?php echo @$nvp; ?>">
			<br>
			<label>Leading Candidate</label>
			<input type="text" name="lead" value="<?php echo @$res; ?>">
			<br>
		</form>
	</div>
	<div class="col-sm-6" style="width: 700px;">
		<br>
		<form class="form1" method="POST">
		<button id="1" name="1" style="bottom: 170px;">A</button><input type="text" name="i1" value="<?php echo @$op1; ?>">
		<br>
		<br>
		<br>
		<button id="1" name="1" style="bottom: 80px;">B</button><input type="text" name="i2" value="<?php echo @$op2; ?>">
		<br>
		<br>
		<br>
		<button id="1" name="1" style="bottom: -10px;">C</button><input type="text" name="i3" value="<?php echo @$op3; ?>">
		</form>
	</div>
	</div>
	</center>
	</div>
	</div>
</div>
</div>
</body>
</html>