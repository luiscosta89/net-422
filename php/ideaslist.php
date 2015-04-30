<?php

 include("sql/connect.php");

$query = "SELECT * FROM ideas";


 $result =$conn->query($query); //you can also use here or die(mysql_error());

  if($result){
         while($row= $result->fetch_assoc()) {
  
   
    echo"<div class='row'>";
    echo"<div class='col-sm-12'>";
    echo"<div class='portfolio-item'>";
    echo"<ol class='breadcrumb bread-primary '>"; 

    echo"<li><a href='idea.php?id=".$row['id']."'>".$row['name'] ."</a></li>"; 

    echo"</ol>"; 
    echo"</div>";
    echo"</div>";
    echo"</div>"; 

 	} 
 }


$conn->close();

?>