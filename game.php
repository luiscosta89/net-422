<!DOCTYPE html>
<html>

<?php include("include/header.php");?>
<body>
    
<!-- Header -->

<?php include("include/logo.php");?>

<?php include("php/game_info.php");?>

    <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Game Details</h1>
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
	    					<img src= <?php echo($row["image"]) ?> alt="Item Name">							
	    				</div>	    				
	    			</div>
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Product Summary & Options -->
	    			<div class="col-sm-6 product-details">
	    				<h4><?php echo($row["name"]) ?></h4>
	    				<h5>Type</h5>
	    				<p>
	    					<?php echo($row["type"]) ?>
	    				</p>
						<h5>Launch Date</h5>
						<p>
	    					<?php echo($row["launch_date"]) ?>
	    				</p>
						<table class="shop-item-selections">
							<!-- Vote Button -->
							<tr>
								<td>&nbsp;</td>
								<td>
									<a href=<?php include("sql/add_votes.php");?> class="btn btn"><i class="icon-shopping-cart icon-white"></i> Go to list of ideas!</a>
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