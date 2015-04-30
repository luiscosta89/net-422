<?php

include("sql/connect.php");

// Retrieve game info
$sqlquery = 'SELECT * FROM ideas WHERE id='.$_GET['id'].'';

$result = $conn->query($sqlquery);
$row = $result->fetch_assoc(); 

$conn->close();
?> 