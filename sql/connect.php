<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "games_data";
$servername2 = "50.62.209.37:3306";
$username2 = "atilla";
$password2 = "atilla12345";

// Create connection
$conn = new mysqli($servername2, $username2, $password2, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
else
{
	$connected = 1;
}

?>  
