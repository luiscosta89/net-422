<!DOCTYPE html>
<html>

<?php include("include/header.php");?>
<body>
    
<!-- Header -->

<?php include("include/logo.php");?>


    <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
				<div id="errorSpace"> </div>
					<div class="col-md-12">						
						<h1>New Idea</h1>
						<td>&nbsp;</td>
							<form action="php/insert.php" name="game" method="post" onSubmit="return validate();">
							<font color="orange">
							Name: <input type="text" name="ideaName" size="30"><br>

<?php

include("sql/connect.php"); // Database connection using PDO
//$sql="SELECT name,id FROM student";
$sql="SELECT name,id FROM games order by name";
/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */
echo "<select name=games value=''>Game Name</option>"; // list box select command
foreach ($conn->query($sql) as $row){//Array or records stored in $row
echo "<option value=".$row[id].">".$row[name]."</option>"; 
/* Option values are added by looping through the array */ 
}
echo "</select>";// Closing of list box
?>
							<br>



							Brief explanation: <input type="text" name="brief" size="60"><br>							
							Full description: <textarea name="description" cols="50" rows="5"></textarea><br>
							Category: <input type="text" name="category"><br>
							Image 1 Link: <input type="text" name="img1" size="50"><br>
							Image 2 Link: <input type="text" name="img2" size="50"><br>
							Image 3 Link: <input type="text" name="img3" size="50"><br>
							<br />
							<input type="submit" value="Click to Submit" />							
							</font>
							</form>
	    			</div>
	    			<!-- End Idea Summary & Options -->  			
	    		</div>
			</div>
		</div>
		
	<script>

//The method to validate form inputs
function validate()
{
   // Validate name
   name = document.game.ideaName.value;   
   if (name == "")
      {
      displayError("You should provide a name!");
      return false;  //there is an error
      }   
	  
	// Validate brief
   name = document.game.brief.value;   
   if (name == "")
      {
      displayError("You should provide a brief explanation!");
      return false;  //there is an error
      }

	// Validate description
   name = document.game.description.value;   
   if (name == "")
      {
      displayError("You should provide a full description!");
      return false;  //there is an error
      }
	  
	// Validate category
   name = document.game.category.value;   
   if (name == "")
      {
      displayError("You should provide a category!");
      return false;  //there is an error
      }
	  
	// Validate image links
   test1 = document.game.img1.value;
   test2 = document.game.img2.value;
   test3 = document.game.img3.value;
   if (test1 == "" && test2 == "" && test3 == "")
      {
      displayError("You should provide at least one image link!");
      return false;  //there is an error
      }
	
}

//If there is an error - display it on the same page
//The error string is passed through s
function displayError(s)
{
  document.getElementById("errorSpace").innerHTML="<h5 style=\"color:red\">" + s + "</h5>";
}


</script>

</script>
	
	<!-- Footer -->
    >
<?php include("include/footer.php");?>

</body>

</html>