<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>

nav .site-logo img{
width: 10%;
float: left;
height: 50px;
}

nav .btn-group{
margin: 0 0 0 auto;
width: 90%;
height: 50px;
text-align: right;
background-color: black;
/*background: linear-gradient(45deg,black 25%, red 50%, black 75%);
color: rgb(200,200,200);*/
}



.btn-group .button {
	background-color: black;
	border: none;
	color: rgb(200,200,200);
	background:black;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	transition: all 0.5s;
	cursor: pointer;
	float: right;
}
.btn-group .button span{
cursor: pointer;
display: inline-block;
position: relative;
color: white;
transition: 0.5s;

}

.btn-group .button span:after{
content: '\00bb';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.btn-group .button:hover span {
padding-right: 25px;
}

.btn-group .button:hover span:after {
opacity: 1;
right: 0;
}

footer{
  text-align: center;
  background: rgb(50,50,50);
  color: rgb(240,240,240);
  padding-bottom: 5px;
	margin-top:15%;
  padding-top: 5px;
}
footer ul{
  width:230px;
  display: inline-block;
  list-style-type: none;

}
footer ul li{
  float: left;
  padding: 10px;
}
footer ul li#facebook{
  cursor: pointer;
  padding-top: 20px;
  width: 7%;
  position: relative;
  background: url("assets/images/fb.png");
  background-size: cover;
  background-repeat: no-repeat;
  top:5px;
}
footer ul li#insta{
  cursor: pointer;
  padding-top: 20px;
  width: 7%;
  position: relative;
  background: url("assets/images/insta.png");
  background-size: cover;
  background-repeat: no-repeat;
  top:5px;
}
footer ul li#yt{
  cursor: pointer;
  padding-top: 20px;
  width:7%;
  position: relative;
  background: url("assets/images/yt.png");
  background-size: cover;
  background-repeat: no-repeat;
  top:5px;
}
footer ul li#twit{
  cursor: pointer;
  padding-top: 20px;
  width:7%;
  position: relative;
  background: url("assets/images/tw.png");
  background-size: cover;
  background-repeat: no-repeat;
  top:5px;
}
footer p{
  text-align: center;
}

</style>
<body>
	<nav>

	      <span class="site-logo">
	      <a href="master.php"><img src="assets/images/logo.png" alt="w.o.d"></a>
	      </span>
	  <div class="btn-group">
	    <!-- <a href="C:\Users\Sree Hari K\Desktop\class notes\DANCE WEBSITE\abt\abtus.html"></a> -->
	    <button class="button" id="contct"><a href="contact.html"><span>Contact</span></button></a>
	    <button class="button" id="abt"><a href="abt/abtus.html"><span>About Us</span></button></a>
	    <button class="button" id="sgnin"><a href="register.php"><span>Sign-Up</span></a></button>
	    <button class="button" id="sgnup"><span>Sign-In</span></button>

	  </div>
	    </nav>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user" style="color:white; background-color:black;">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	<footer>
		<ul>
			<a href="https://www.facebook.com/worldofdancephilippines/" target="_blank"><li id="facebook"></li></a>
			<li>|</li>
			<a href="https://www.instagram.com/worldofdance/?hl=en" target="_blank"><li id="insta"></li></a>
			<li>|</li>
			<a href="https://www.youtube.com/user/WORLDOFDANCETOUR" target="_blank"><li id="yt"></li></a>
			<li>|</li>
			<a href="https://twitter.com/nbcworldofdance?lang=en" target="_blank"><li id="twit"></li></a>
		</ul>
		<br>
		<p>© 2017 World Of Dance | All Rights Reserved</p>
	</footer>

</body>
</html>
