<!DOCTYPE html>
<html>
<head>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);

body{
	background: #50a3a2;
	background: -webkit-linear-gradient(top left, #50b3c6 0%, #53e3a6 100%);
	background: -moz-linear-gradient(top right, #50a3c2 0%, #53e3a6 100%);
	background: -o-linear-gradient(top left, #50a3a2 0%, #53e3a6 100%);
	background: linear-gradient(bottom right, #50a3a2 0%, #53e3a6 100%);
	height: 630px;
	font-family: Source Sans Pro;
	color: white;
}
.wrapper{
	padding: 100px;
}
.inside{
	width: 30%;
	height: 270px;
	opacity: 0.2;
	background: white;
}
.in{
	right: 41%;
	bottom: 40%;
	position: absolute;
}
img{
	background-color: white;
	border-radius: 360px;
	border: none;
	bottom: 64%;
	box-shadow: none;
	right: 46%;
	position: absolute;
	width: 85px;
}
button{
	color: #51c7af;
	font-weight: 100%;
	font-size: 20px;
	outline: 0;
	background-color: white;
	border: 0;
	padding: 10px 15px;
	border-radius: 3px;
	width: 200px;
	background-color: white;
	border-radius: 5px;
}
.bub img{
	border-radius: 360px;
	opacity: 0.2;
	position: absolute;
	right:1px;
	bottom: 2px;
}
input{
	display: block;
	appearance: none;
	outline: 0;
	border: none;
	border: 1px solid fade(white, 40%);
	background-color: fade(white, 20%);
	width: 200px;
	border-radius: 3px;
	padding: 10px 15px;
	display: block;
	text-align: center;
	font-size: 18px;
	transition-duration: 0.25s;
	font-weight: 300;
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
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
  background: rgba(255, 255, 255, 0.1);
  color: rgba(0, 35, 122, 0.7);
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
<?php
$otp=null;
?>
<nav>
    <ul>
      <li>
        <a href="logoutphp.php">Home</a>
      </li>
      <li>
        <a href="About.php">About</a>
      </li>
      <li>
        <a href="Contact.php">Contact</a>
      </li>
      <li>
        <a href="logoutphp.php">Logout</a>
      </li>
    </ul>
  </nav>
<div class="wrapper">
<div class="container">
	<center>	
		<img src="pro.png">
	<div class="inside">
		
	</div>
	</center>
	<div class="in">
	<center>
		<form method="POST" action="otpphp.php">
			<input type="number" name="otp" id="otp" placeholder="OTP">
			<br>
			<button type="Submit">Submit</button>
		</form>
		</center>
	</div>
</div>
</div>
</body>
</html>