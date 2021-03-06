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
	    					<img src= <?php echo($row["image_1"]) ?> alt="Item Name">							
	    				</div>	    				
	    			</div>
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Product Summary & Options -->
	    			<div class="col-sm-6 product-details">
	    				<h4><?php echo($row["name"]) ?></h4>
	    				<!-- <div class="votes"><?php echo($row["sum_votes"]) ?></div> -->
						<h5>Brief explanation</h5>
	    				<p>
	    					<?php echo($row["brief"]) ?>
	    				</p>
						<h5>Full description</h5>
						<p>
	    					<?php echo($row["descrption"]) ?>
	    				</p>
						<table class="shop-item-selections">
							<!-- Vote Button -->
<!-- 							<tr>
								<td>&nbsp;</td>
								<td>
									<a href= <?php //include("sql/add_votes.php");?> class="btn btn"><i class="icon-shopping-cart icon-white"></i> Vote!</a>
								</td>
							</tr> -->
						</table>

	    			</div>
	    			<!-- End Idea Summary & Options -->  

	    		</div>

	    			    			<div class="col-sm-12">
	    				<div class="tabbable">
	    					<!-- Tabs -->
							<ul class="nav nav-tabs product-details-nav">
								<li class="active"><a href="#tab1" data-toggle="tab">Comments</a></li>
							</ul>
							<!-- Tab Content (Full Description) -->
							<div class="tab-content product-detail-info">
								<div class="tab-pane active" id="tab1">

	    									<div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1579229399015809";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
	    			<div class="fb-comments" data-width="800" data-numposts="5" data-colorscheme="light"></div>
	    			</div>
	    			</div>
						</div>
	    			</div>
			</div>
		</div>
	
	<!-- Footer -->
    >
<?php include("include/footer.php");?>

</body>

</html>