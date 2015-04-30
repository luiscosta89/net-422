<!DOCTYPE html>
<html>

<?php include("include/header.php");?>
<body>
    
<!-- Header -->

<?php include("include/logo.php");?>


<div class="section">
    <div class="container">
       
        <div class="row">

            <div class="col-sm-12">
                <div class="row">
<script>
function MyFunction()
{
    FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
   window.location="new_idea.php";

  } else if (response.status === 'not_authorized') {
        alert("You need to login first");
  } else {
    // the user isn't logged in to Facebook.
  }
 });
    
}
</script>
                <ul><a href="#" class="btn btn" onclick="MyFunction();"><i class="icon-shopping-cart icon-white"></i> Create Idea</a></ul>

                <ul></ul>
                </div>   
             </div>

       

        <?php include("php/ideaslist.php");?>

 </div>


    </div>

</div>

    </section>

    <!-- Footer -->
<?php include("include/footer.php");?>

</body>

</html>
