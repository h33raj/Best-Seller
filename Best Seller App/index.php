<?php
session_start();
if($_SESSION['name']!="Guest"){
	header("location: home.php");
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Login - Best Seller</title>
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<!--[if IE 6]>
		<script type="text/javascript" src="js/png-fix.js"></script>
	<![endif]-->
	<script type="text/javascript" src="js/functions.js"></script>
      <link rel="stylesheet" href="css/style1.css">
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
      <script>
      function validateForm() {
    var x = document.forms["flogin"]["login"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    var x = document.forms["flogin"]["password"].value;
    if (x == null || x == "") {
        alert("Password must be filled out");
        return false;
    }
}
</script>
      </head>
      <body>
      <!-- Header -->
      <div id="header" class="shell">
	<div id="logo"><h1><a href="index.php">BestSeller</a></h1></div>
	<!-- Navigation -->
	<div id="navigation">
	  <ul>
	    <li><a href="index.php" class="active">Home</a></li>
	    <li><a href="home.php" class="active">Products</a></li>
	    <li><a href="feedback.html"class="active">Feedback</a></li>
	  </ul>
	</div>
	<!-- End Navigation -->
	<div class="cl">&nbsp;</div>
	<!-- Login-details -->
	<div id="login-details">
	  <p>Welcome, <a href="#" id="user">Guest</a></p><p><a href="#" class="cart" ><img src="css/images/cart-icon.png" alt="" /></a>Shopping Cart (0) <a href="#" class="sum">&#x20B9;&nbsp;0</a></p>
	</div>
	<!-- End Login-details -->
      </div>
      <section class="container">
	<div class="login">
	  <h1>Login to Web App</h1>
	  <form method="post" action="login.php" onsubmit="return validateForm()" name="flogin">
	    <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
	      <p><input type="password" name="password" value="" placeholder="Password"></p>
		<p class="remember_me">
		  <label>
		    <input type="checkbox" name="remember_me" id="remember_me">
		      Remember me on this computer
		    </label>
		  </p>
		  <p class="submit"><input type="submit" name="commit" value="Login"></p>
		  </form>
		</div>
		
		<div class="login-help">
		  <p><a href="register.php"><strong>Are you a new user?</h3></strong></a></p>
		</div>
	      </section>
	    </body>
	  </html>
	  
