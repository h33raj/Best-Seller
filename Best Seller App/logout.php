<?php
session_start();
?>
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
$sql = "TRUNCATE TABLE cart";
mysqli_query($conn, $sql) or die(mysqli_error());
$_SESSION['name']="Guest";
$_SESSION['state']=" ";
$_SESSION['sum']=0;
$_SESSION['count']=0;
header('Location: index.php');
?>
