<?php

include("sql/connect.php");

// Retrieve game info
$sqlquery = 'SELECT * FROM games WHERE id=1';

$result = $conn->query($sqlquery);
$row = $result->fetch_assoc(); 

$conn->close();
?> 