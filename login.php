<?php include("inc/header.php"); ?>
<?php include("inc/nav.php"); ?>
	
<section class="container-page">
	
<div class="container">
<h1><span><i class="fas fa-unlock-alt"></i></span><br>
Login</h1>
  
<div class="content-page">
<div class="login-page">

	  <form class="row g-4">
		  <div class="col-md-6">
			<label class="form-label">Email Address:</label>
			<input type="email" class="form-control" id="">
		  </div>

		  <div class="col-md-6">
			<label class="form-label">Password:</label>
			<input type="password" class="form-control" id="">
		  </div>

		  <div class="col-md-6">
			<div class="form-check">
			  <input class="form-check-input" type="checkbox" id="">
			  <label class="form-check-label" for="gridCheck">
				Remember me
			  </label>
			</div>

		  </div>

		  <div class="col-md-6">
			<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Forgot your password?</a>
			  
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
					  <div class="modal-body">

				<div class="row py-3 px-3">

				  <div class="col-md-10">
					<input type="email" class="form-control" id="" placeholder="Enter your Email ID:">
				  </div>

				  <div class="col-md-2">
					<button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Send</button>
				  </div>
				</div>
				 </div>

					</div>
				  </div>
				</div>			  
			  
			  
		  </div>

		  <div class="col-12">
			<button type="submit" class="btn btn-primary"><i class="fas fa-unlock-alt me-1"></i>Login</button>
		  </div>
		  
		  <div class="col-12">
			Don't have an account? <a href="signup.php">Sign up and get started!</a>
		  </div>
		  
		  
	</form>
	
</div>
</div>
</div>  

</section>	

<?php include("inc/footer.php"); ?>
