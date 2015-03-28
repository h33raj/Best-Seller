<?php
// Start the session
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = 1996;
$dbname = "db";
$user=$_POST["login"];
$pass=$_POST["password"];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($user!="" && $pass=""){
$sql = "INSERT INTO register(username,password)
VALUES ('$user', '$pass')";
$_SESSION["name"] = $user;
}
if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  
header('Location: home.php');    

$conn->close();
?>
