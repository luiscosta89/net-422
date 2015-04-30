<!DOCTYPE html>
<html>

<?php include("include/header.php");?>
<body>
    
<!-- Header -->

<?php include("include/logo.php");?>

<?php 
include("php/idea_info.php");

?>

    <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Idea Details</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<!-- Idea Image -->
	    			<div class="col-sm-6">
	    				<div class="product-image-large">
	    					<img src= <?php //echo($row["image_1"]) ?> alt="Item Name">							
	    				</div>	    				
	    			</div>
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Product Summary & Options -->
	    			<div class="col-sm-6 product-details">
	    				<h4><?php echo($row["name"]) ?></h4>
	    				<div class="votes"><?php echo($row["sum_votes"]) ?></div>
						<h5>Brief explanation</h5>
	    				<p>
	    					<?php echo($row["brief"]) ?>
	    				</p>
						<h5>Full description</h5>
						<p>
	    					<?php echo($row["description"]) ?>
	    				</p>
						<table class="shop-item-selections">
							<!-- Vote Button -->
							<tr>
								<td>&nbsp;</td>
								<td>
									<a href= <?php //include("sql/add_votes.php");?> class="btn btn"><i class="icon-shopping-cart icon-white"></i> Vote!</a>
								</td>
							</tr>
						</table>
	    			</div>
	    			<!-- End Idea Summary & Options -->  			
	    		</div>
			</div>
		</div>
	
	<!-- Footer -->
    >
<?php include("include/footer.php");?>

</body>

</html>