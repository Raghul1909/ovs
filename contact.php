<style type="text/css">
body {

  background: #50a3a2;
  background: -webkit-linear-gradient(top left, #50b3c6 0%, #53e3a6 100%);
  background: -moz-linear-gradient(top right, #50a3c2 0%, #53e3a6 100%);
  background: -o-linear-gradient(top left, #50a3a2 0%, #53e3a6 100%);
  background: linear-gradient(bottom right, #50a3a2 0%, #53e3a6 100%);
  height: 500px;
  font-family: Source Sans Pro;
  color: white;
}
.container {
  max-width:600px;
  margin:0 auto;
  text-align:center;
  -webkit-border-radius:6px;
  -moz-border-radius:6px;
  border-radius:6px;
  background-color:#FAFAFA;
}
.head {

  font-family: sans-serif;
  -webkit-border-radius:6px 6px 0px 0px;
  -moz-border-radius:6px 6px 0px 0px;
  border-radius:6px 6px 0px 0px;
  background-color:#2ABCA7;
  color:white;
}
p {
  text-align:center;
  padding:18px 0 18px 0;
  font-size: 1.4em;
}
input {
  margin-bottom:10px;
}
textarea {
  height:100px;
  margin-bottom:10px;
}
input:first-of-type
{
  margin-top:35px;
}
input, textarea {
  font-size: 1em;
  padding: 15px 10px 10px;
  font-family: 'Source Sans Pro',arial,sans-serif;
  border: 1px solid #cecece;
  background: #d7d7d7;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 80%;
  max-width: 600px;
}
button {
  margin-top:15px;
  margin-bottom:25px;
  background-color:#2ABCA7;
  padding: 12px 45px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #2ABCA7;
  -webkit-transition: .5s;
  transition: .5s;
  display: inline-block;
  cursor: pointer;
  width:30%;
  color:#fff;
}
button:hover, .button:hover {
  background:#19a08c;
}
label.error {
    font-family:'Source Sans Pro',arial,sans-serif;
    font-size:1em;
    display:block;
    padding-top:10px;
    padding-bottom:10px;
    background-color:#d89c9c;
    width: 80%;
    margin:auto;
    color: #FAFAFA;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border-radius:6px;
}
/* media queries */
@media (max-width: 700px) {
  label.error {
    width: 90%;
  }
  input, textarea {
    width: 90%;
  }
  button {
    width:90%;
  }
  body {
  padding-top:100px;
  }  
}
.message {
    font-family:'Source Sans Pro',arial,sans-serif;
    font-size:1.1em;
    display:none;
    padding-top:10px;
    padding-bottom:10px;
    background-color:#2ABCA7;
    width: 80%;
    margin:auto;
    color: #FAFAFA;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border-radius:6px;
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
<nav>
    <ul>
      <li>
        <a href="Logoutphp.php">Home</a>
      </li>
      <li>
        <a href="About.php">About</a>
      </li>
      <li>
        <a href="Logoutphp.php">Logout</a>
      </li>
    </ul>
  </nav>
  <body>
<form id="contact" method="POST">
  <div class="container">
    <div class="head">
      <p>Contact Us</p>
    </div>
    <input type="text" name="name" id="name" placeholder="Name" value="" /><br />
    <input  type="email" name="email" id="email" placeholder="Email"/><br />
    <textarea type="text" name="message" id="message" placeholder="Message"></textarea><br />
    <div class="message">Message Sent</div>
    <button id="submit" type="submit">
      Send!
    </button>
  </div>
</form>
</body>
<?php 
if (isset($_POST['email'])) {
$email=$_POST['email'];
$msg=$_POST['message'];
if($msg!="")
{
$get=mail("rithiragul2020@gmail.com","FeedBack","$msg"); 
  if($get)
  { 
    mail("$email", "Online Voting System", "Thanks for Your FeedBack");
    echo '<script language="javascript">';
    echo 'alert("Thanks For Your FeedBack")';
    echo "</script>";
  }
}
}
?>