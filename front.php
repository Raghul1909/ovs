<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);

body{
	height: 100%;
	font-family: Source Sans Pro;
	color: white;
}
body{
	padding-top:20px; 
	background: #50a3a2;
	height:657px;
background: -webkit-linear-gradient(top left, #50b3c6 0%, #53e3a6 100%);
background: -moz-linear-gradient(top right, #50a3c2 0%, #53e3a6 100%);
background: -o-linear-gradient(top left, #50a3a2 0%, #53e3a6 100%);
background: linear-gradient(bottom right, #50a3a2 0%, #53e3a6 100%);
}
.wrapper{
	padding-top:20px; 
}
.inside{
	width: 35%;
	height: 400px;
	opacity: 0.2;
	background: white;
}
.in{
	right: 40.5%;
	bottom: 25%;
	position: absolute;
}
img{
	background-color: white;
	border-radius: 360px;
	border: none;
	bottom: 69%;
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
	width: 250px;
	background-color: white;
	border-radius: 5px;
}
nav {
  padding-bottom: 40px;
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
  padding: 18px;
  font-family: "Open Sans";
  text-transform:uppercase;
  color: rgba(0, 35, 22, 0.5);
  font-size: 24px;
  text-decoration: none;
 
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
 	     	Online Voting System
      </li>
    </ul>
  </nav>
<div class="wrapper">
<div class="container">
	<center>	
		<img src="pro.png">
	<div class="inside">
	</div>
	<div class="in">	
		<CENTER>
		<table>
		<tr>
		<center><h1>Welcome</h1></center>
		<br>
		</tr>
		<tr>
		<form class="form" action="connect.php">
			<button type="submit" id="login-button" name="reg">Register</button>
		</form>
			<br>
			<br>
			<form class="myform" action="login.php">
			<button type="submit" id="login-button" name="user">User Login</button>
		</form>
		<br>
			<br>
			<form class="myform" action="adminlogin.php">
			<button type="submit" id="login-button" name="Admin">Admin Login</button>
		</form>
		</tr>
		</table>
		</CENTER>
	</div>
</div>
</div>
</body>

</html>