<?php
session_start();
if($_SESSION['name']==""){
	$_SESSION['name']="Guest";
	$_SESSION['sum']=0;
}
?>
<html>
<head>
	<title>Best Seller</title>

	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<!--[if IE 6]>
		<script type="text/javascript" src="js/png-fix.js"></script>
	<![endif]-->
        <script type="text/javascript" src="js/buy.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	 <script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 3000);
          }

          var images = [], x = -1;
          images[0] = "/css/images/image01.jpeg";
          images[1] = "/css/images/image2.jpeg";
          images[2] = "/css/images/image5.png";
          images[3] = "/css/images/sale.jpg";
          images[4]= "/css/images/image8.jpg";
          images[5]="/css/images/books.png";
          function pageScroll() {
    	window.scrollBy(0,50); // horizontal and vertical scroll increments
    	scrolldelay = setTimeout('pageScroll()',100); // scrolls every 100 milliseconds
}
      </script>
</head>
<body onload = "startTimer()" onload="pageScroll">
	<!-- Header -->
	<div id="header" class="shell">
		<div id="logo"><h1><a href="index.php">BestSeller</a></h1></div>
		<!-- Navigation -->
		<div id="navigation">
			<ul>
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="chitchat.php">Global Chat</a></li>
				<li><a href="feedback.html">Feedback</a></li>
				<li><a href="billing.php">Billing</a></li>
				<li><a href="reset.php">Reset</a></li>
				<li><a href="logout.php"><strong><?php echo $_SESSION["state"];?></strong></a></li>
		
			</ul>
		</div>
		<!-- End Navigation -->
		<div class="cl">&nbsp;</div>
		<!-- Login-details -->
		<div id="login-details">
		<p><strong>Welcome ,</stong><a href="index.php" id="user"><strong><?php echo $_SESSION["name"];?></strong></a></p><p><a href="billing.php" class="cart" ><img src="css/images/cart-icon.png" alt="Want to bill it?" /></a>Shopping Cart (<?php echo $_SESSION["count"];?>) <a href="#" onload="disp()" class="sum">&#x20B9;&nbsp;<?php echo $_SESSION["sum"];?></a></p>
		</div>
		<center><img id="img" src="/css/images/sale.jpg" height="175" width="500" alt="Smiley face" border="5">
		</center>
		<!-- End Login-details -->
	</div>
	
	<!-- End Header -->
	<!-- Main -->
	<div id="main" class="shell">
		
		<!-- Content -->
		<div id="content">
			<!-- Products -->
			<div class="products">
				<h3>Featured Products</h3>
				<ul>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image01.jpeg" alt="" />
									<span class="book-name">Moto E</span>
									<span class="author">by Motorola</span>
									<span class="description">- 1 GB RAM<br />1.2 GHz Dual-Core Snapdragon<br />-5 MP Rear Camera</span>
								</span>
							</a>
							<a  href="click.php?price=6999&name=Moto E" class="buy-btn"><span class="price"><span class="low">&nbsp;&nbsp;</span>@&nbsp;&#x20B9;&nbsp;6999<span class="high"></span>/-&nbsp;&nbsp;</span></span></span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image2.jpeg" alt="" />
									<span class="book-name">Fontopia / In-Ear Headphones</span>
									<span class="author">by Sony</span>
									<span class="description">- Feel the Bass Boost<br />- Play it loud<br />- comfortable earbuds</span>
								</span>
							</a>
							<a href="click.php?price=2000&name=Sony Fontopia" class="buy-btn"><span class="price"><span class="low"></span>@&nbsp;&#x20B9;&nbsp;2000<span class="high"></span>/-&nbsp;&nbsp;</span></span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image3.jpg" alt="" />
									<span class="book-name">Power Bank</span>
									<span class="author">by Lenovo</span>
									<span class="description">-High-quality metal<br />-Portable Power<br />-Lithium Polymer Battery</span>
								</span>
							</a>
							<a href="click.php?price=2499&name=Lenovo Power Bank" class="buy-btn"><span class="price"><span class="low"></span>@&nbsp;&#x20B9;&nbsp;2499<span class="high"></span>/-&nbsp;&nbsp;</span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image4.jpg" alt="" />
									<span class="book-name">China and India : Great Power Rivals </span>
									<span class="author">by Mohan Malik</span>
									<span class="description">Trade and cultural links<br>Pages:484</span>
								</span>
							</a>
							<a href="click.php?price=1699&name=China and India : Great Power Rivals" class="buy-btn"><span class="price"><span class="low"></span>@&nbsp;&nbsp;&#x20B9;&nbsp;&nbsp;169<span class="high"></span>/-&nbsp;&nbsp;&nbsp;</span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image5.png" alt="" />
									<span class="book-name">Yoga</span>
									<span class="author">by Lenovo</span>
									<span class="description">Thin and light 11.6<br />1 Tb hard disk<br />i7 processor</span>
								</span>
							</a>
							<a href="click.php?price=59000&name=Yoga 2" class="buy-btn"><span class="price"><span class="low"></span>@&nbsp;&#x20B9;&nbsp;59000<span class="high"></span>/-&nbsp;&nbsp;</span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image6.jpg" alt="" />
									<span class="book-name">Tab 3 (8.0)</span>
									<span class="author">by Samsung</span>
									<span class="description">Android OS, v4.2.2 (Jelly Bean)<br />Dual-core 1.5 GHz<br />5 MP, 2560 x 1920 pixels</span>
								</span>
							</a>
							<a href="click.php?price=14999&name=Tab 3(8.0)" class="buy-btn"><span class="price"><span class="low"></span>@&nbsp;&#x20B9;&nbsp;14999<span class="high"></span>/-&nbsp;&nbsp;</span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image7.png" alt="" />
									<span class="book-name">I Pad</span>
									<span class="author">by Apple</span>
									<span class="description">Metal design<br />Ios 7<br />crystal Display</span>
								</span>
							</a>
							<a href="click.php?price=39000&name=I Pad" class="buy-btn"><span class="price"><span class="low"></span>@&nbsp;&#x20B9;&nbsp;39000<span class="high"></span>/-&nbsp;&nbsp;</span></a>
						</div>
					</li>
					<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="css/images/image8.jpg" alt="" />
									<span class="book-name">X-Box 360</span>
									<span class="author">by Microsoft</span>
									<span class="description">Wireless controller<br />500 GB Console<br />5 Free games</span>
								</span>
							</a>
							<a href="click.php?price=19999&name=Xbox 360" class="buy-btn"><span class="price"><span class="low"></span>@&nbsp;&#x20B9;&nbsp;19000<span class="high"></span>/-&nbsp;&nbsp;</span></a>
						</div>
					</li>
				</ul>
			<!-- End Products -->
			</div>
			<div class="cl">&nbsp;</div>
			<!-- Best-sellers -->
			
			<!-- End Best-sellers -->
		</div>
		<!-- End Content -->
		<div class="cl">&nbsp;</div>
		 <br/>		         <br/>
             <p align="center"><a href="http://foss.amrita.ac.in">Amrita FOSS</a>  		             
             <br/>		             <br/>
-            &copy; 2009-2015 Free and Open Source Software club, Amritapuri</p>
	</div>
	
</body>
</html>
