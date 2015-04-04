<?php
$servername = "localhost";
$username = "root";
$password = 1996;
$dbname = "db";
$user=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($user!="" && $email!="" && $message!=""){
$sql = "INSERT INTO Feedback(name,email,message)
VALUES ('$user', '$email','$message')";
echo "<script type='text/javascript'>alert('Your Feedback have been submitted.');window.location.href='home.php';</script>";
if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
	echo "<script type='text/javascript'>alert('Fill out the details!');window.location.href='feedback.html';</script>";
}
$conn->close();
?>
