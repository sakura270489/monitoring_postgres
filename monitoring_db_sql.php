<?php
// $page = $_SERVER['PHP_SELF'];
// $sec = "2";

// session_start();

$servername = "172.18.0.85";
// $database = "u266072517_name";
$username = "root";
$password = "adminkpde2007";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
 
	
?>

lalalala
