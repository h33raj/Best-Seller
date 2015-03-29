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
$query=mysqli_query($conn,"SELECT * FROM register WHERE username='$user' && password='$pass'");
// Mysql_num_row is counting table row
$count=mysqli_num_rows($query);
    if ($count<=0)
    {
if($user!="" && $pass!=""){
$sql = "INSERT INTO register(username,password)
VALUES ('$user', '$pass')";
$_SESSION["name"] = $user;
$_SESSION['state']="Log Out";
$_SESSION['sum']=0;
$_SESSION['count']=0;
}
if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  
header('Location: home.php');    
}
else
{
}

$conn->close();
?>
