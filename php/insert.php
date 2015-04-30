<?php

include("../sql/connect.php");   
 


     
//attempt insert query execution
$sql = "INSERT INTO ideas (name, brief, descrption, category, image_1, image_2, image_3) VALUES ('".$_POST[ideaName]."', '".$_POST[brief]."', '".$_POST[description]."', '".$_POST[category]."', '".$_POST[img1]."', '".$_POST[img2]."', '".$_POST[img3]."')";

$query = 'SELECT id FROM ideas ORDER BY id DESC LIMIT 1';
$result = $conn->query($query);
$row = $result->fetch_assoc(); 

$sql2 = "INSERT INTO ideasgames (game_id, ideas_id) VALUES ('".$_POST[games]."', '".$row[id]."')";
if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)){
    echo "Records added successfully.";
     header( 'Location: ../index.php' ) ;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



 $conn->close();

 ?> 