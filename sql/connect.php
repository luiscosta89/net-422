<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "games_data";
$username2 = "atilla";
$password2 = "atilla12345"

// Create connection
$conn = new mysqli($servername, $username2, $password2, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
else
{
	echo "Success!";
}

$conn->close();
?>  

</body>
</html>