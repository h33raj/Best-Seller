<?php
// Start the session
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = 1996;
$dbname = "db";
$user=$_GET["price"];
$pass=$_GET["name"];
$_SESSION['sum']+=$user;
$_SESSION['count']+=1;
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO cart(name,price)
VALUES ('$pass','$user')";
if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  
header('Location: home.php');    

$conn->close();
?>
