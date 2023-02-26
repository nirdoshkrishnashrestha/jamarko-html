<?php include("inc/header.php"); ?>
<?php include("inc/nav.php"); ?>
	
<section class="container-page">
	
<div class="container">
<h1><span><i class="fas fa-unlock-alt"></i></span><br>
Sign Up</h1>
  
<div class="content-page">
<div class="signup-page">

<form class="row g-4">

	<div class="col-12">
    <label class="form-label">Your Email:</label>
    <input type="email" class="form-control" id="">
  </div>
  <div class="col-md-6">
    <label class="form-label">Password:</label>
    <input type="password" class="form-control" id="">
  </div>
<div class="col-md-6">
    <label class="form-label">Confirm Password:</label>
    <input type="password" class="form-control" id="">
  </div>
  <div class="col-md-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
			I agree to <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">terms & conditions.</a>
      </label>
    </div>
	  
	  
	  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
					  <div class="modal-body">
						<center>
						<strong style="font-size: 22px;">Terms and Conditions:</strong>
						</center>
						  <hr class="m-1">
						<ol type="1">
						<li>After submitting this form you have permitted us to upload your article in website.</li>
						<li>Arts you submit should be created by you.</li>
						<li>After submitting this form you have permitted us to also share your articles in our social media accounts.(Credit will be given)</li>
						<li>After filling this form we will be able to mail you for any necessary details.</li>
						</ol>
				 </div>

					</div>
				  </div>
				</div>
	  
	  
  </div>
  <div class="col-md-6">

	 <a href="add-profile.php" class="btn btn-primary"><i class="fas fa-user-edit me-1"></i>Register</a>
  </div>
</form>	



    
</div>
</div>
</div>  

</section>	

<?php include("inc/footer.php"); ?>
