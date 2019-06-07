<!DOCTYPE html>
<html>
<head>
	<title>connect</title>
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
	padding-top: 50px;
}
.inside{
	width: 35%;
	height: 500px;
	opacity: 0.2;
	background: white;
}
.in{
	right: 42%;
	bottom:30px;
	position: absolute;
	align-items: inherit;
}
img{
	background-color: white;
	border-radius: 360px;
	border: none;
	bottom:73%;
	box-shadow: none;
	right: 47%;
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
  font-size: 18px;
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
		null;
	};
</script>
<body onload="myfun()">
	  <nav>
    <ul>
      <li>
        <a href="front.php">Home</a>
      </li>
      <li>
        <a href="About.php">About</a>
      </li>
      <li>
        <a href="Contact.php">Contact</a>
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
		<form name="myForm" method="POST" action="connectphp.php">
		  <input name="id" type="text" value="" placeholder="ID">
		  <br>
		  <input name="name" type="text" id="password" value="" placeholder="Name">
		  <br>
		  <input placeholder="Date" class="textbox-n" type="text" onfocus="(this.type='date')"  name="date" >
		  <br>
		  <input name="city" placeholder="City" type="text" id="city">
		  <br>
		  <input type="email" name="email" id="email" placeholder="Email">
		  <br>
		  <input type="password" name="password" id="password" placeholder="password">
		<br>
		<br>
  		<button type="submit" onclick="javascript:history.go(-1)">Register</button>
 		</form>
 	</tr>
	</table>
	</CENTER>
	</div>
	</div>
	</div>
	</body>
	</html>