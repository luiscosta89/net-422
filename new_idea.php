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
							<form action="php/insert.php" name="game" method="post">
							<font color="orange">
							Name: <input type="text" name="ideaName" size="30"><br>							
							Brief explanation: <input type="text" name="brief" size="60"><br>							
							Full description: <textarea name="description" cols="50" rows="5"></textarea><br>
							Category: <input type="category" name="date"><br>
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
   name = document.game.type.value;   
   if (name == "")
      {
      displayError("You should provide a full description!");
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

</script>
	
	<!-- Footer -->
    >
<?php include("include/footer.php");?>

</body>

</html>