<?php

 include("sql/connect.php");

$query = "SELECT * FROM ideas";


 $result =$conn->query($query); //you can also use here or die(mysql_error());

if($result)
{
     while($row= $result->fetch_assoc()) 
     {

        $query2 = 'SELECT * FROM ideasgames WHERE  '.$row["id"].' = ideas_id';
        $result2 =$conn->query($query2);

        echo"<div class='row'>";
        echo"<div class='col-sm-12'>";
        echo"<div class='portfolio-item'>";
            while($row2= $result2->fetch_assoc()) 
            {
                 $query3 = 'SELECT * FROM games WHERE '.$row2["game_id"].' = id';
                $result3 =$conn->query($query3);
                while($row3= $result3->fetch_assoc()) 
                {
                

                echo"<ol class='breadcrumb bread-primary '>";
                echo"<div class='testimonial col-md-2 col-sm-4'>";
                echo"<div class='author-photo'>"; 
                echo"<img src=".$row3['image'] ."  >";
                echo"</div>";
                echo"</div>";
                echo"<li><a href='idea.php?id=".$row['id']."'>".$row['name'] ."</a></li>"; 
                echo"<li>".$row['brief'] ."</li>";


               
                echo"<li>".$row3['name'] ."</li>";
                }
            }
        echo"</ol>"; 



        echo"</div>";
        echo"</div>";
        echo"</div>"; 

     } 
}


$conn->close();

?>