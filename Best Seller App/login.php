<?php
$servername = "localhost";
$username = "root";
$password = 1996;
$dbname = "db";
$_SESSION['state']="Log out";
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
    $row=mysqli_fetch_array($query);
"SELECT * FROM `register` WHERE `username` LIKE '$user' AND `password` LIKE '$pass'";
    if ($count>0)
    {
        session_start();
        $_SESSION['name'] = $user;
        $_SESSION['state']="Log Out";
        $_SESSION['sum']=0;
        $_SESSION['count']=0;
        header("location: home.php");
        }
    else
    {
        echo "<script type='text/javascript'>alert('Invalid credentials! Please try again!');window.location.href='index.html';</script>";
        }   
$sql = "TRUNCATE TABLE cart";
mysqli_query($conn, $sql) or die(mysqli_error());
    mysqli_close($con);
?>
