<?php

include("../sql/connect.php");   
 
 echo ($_POST[ideaName]);
// attempt insert query execution
$sql = "INSERT INTO ideas (name, brief, descrption, category, image_1, image_2, image_3) VALUES ('".$_POST[ideaName]."', '".$_POST[brief]."', '".$_POST[description]."', '".$_POST[category]."', '".$_POST[img1]."', '".$_POST[img2]."', '".$_POST[img3]."')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
     header( 'Location: ../index.php' ) ;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

 $conn->close();

 ?> 