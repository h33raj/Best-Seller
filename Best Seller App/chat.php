<?php
// Start the session
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = 1996;
$dbname = "db";
$user=$_SESSION['name'];
$message=$_POST["message"];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO chat(message,user)
VALUES ('$message','$user')";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  
header('Location: chitchat.php');    

$conn->close();
?>
