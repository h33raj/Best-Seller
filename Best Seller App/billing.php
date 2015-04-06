<?php
session_start();
?>
<?php
if($_SESSION['name']!="Guest"){    	
}   
else{
	echo "<script type='text/javascript'>alert('Log in first!');</script>";
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
	<script>
	function buy(){
		alert("Your purchase was successful!");
	}
	function empty(){
		alert("Your shopping cart is empty!");
	}
	function login(){
		alert("Please log In to shopping cart!");
	}
	</script>
	<style>
    table, td, th {
         border: 1px solid black;
    }

    td {
        padding: 15px;
    }
</style>
</head>
<body>
	<!-- Header -->
	<div id="header" class="shell">
		<div id="logo"><h1><a href="home.php">BestSeller</a></h1></div>
		<!-- Navigation -->
		<div id="navigation">
			<ul>
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="home.php">Products</a></li>
				
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
		<!-- End Login-details -->
	</div>
	<!-- End Header -->
	<!-- Main -->
	<div id="main" class="shell">
		<!-- Content -->
		<div id="content">
			<!-- Products -->
			<h3><b>Pay Bill</b></h3>
<?php
$servername = "localhost";
$username = "root";
$password = 1996;
$dbname = "db";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<div class="product">';
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border='1'>";
    echo "<tr> <th>Name</th> <th>Price</th> </tr>";
    while($row = $result->fetch_assoc()) {
		echo "<tr><td>"; 
	    echo $row['name'];
	    echo "</td><td>"; 
	    echo "&#x20B9; " .$row['price'];
	    echo "</td></tr>";   
    }
    echo "<tr><td>";
    echo "<b>Total Amount</b>";
    echo "</td><td>";
    echo "&#x20B9; " .$_SESSION['sum'];
    echo "</td></tr>";
    echo "</table>";
    echo "</div>";
    }
    else {
    echo "<center>"."Please buy something!"."</center>"."<br>"."<br>";
    }
    
$conn->close();
?>
<br>
<?php 
if(($_SESSION['sum']!=0) && ($_SESSION['name']!="Guest")){
 echo '<form action="reset.php" onclick="buy()" style="text-align: center">';
    echo '<input type="image" src="css/images/buy_button.jpg" alt="Submit" height="170" width="170">';
  echo "</form>";
}
else if($_SESSION['name']=="Guest"){
	echo '<form action="index.php" onclick="login()" style="text-align: center">';
    echo '<input type="image" src="css/images/login.jpg" alt="Submit" height="170" width="170">';
  echo "</form>";
}
else{
	echo '<form action="home.php" onclick="empty()" style="text-align: center">';
    echo '<input type="image" src="css/images/empty.jpeg" alt="Submit" height="170" width="170">';
  echo "</form>";
}
?>
<br><br>
<a href="home.php"><h4>Want to buy more !!</h4></a>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<!-- End Products -->
			</div>
			<div class="cl">&nbsp;</div>
			<!-- Best-sellers -->
			
			<!-- End Best-sellers -->
		</div>
		<!-- End Content -->
		<div class="cl">&nbsp;</div>
	</div>
</body>
</html>
