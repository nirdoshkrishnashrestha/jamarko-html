<?php include("inc/header.php"); ?>
<?php include("inc/nav.php"); ?>
	
<section class="container-page">
	
<div class="container">
<h1><span><i class="fas fa-user"></i></span><br>
Add Profile</h1>
  
<div class="content-page">
<div class="signup-page">

<form class="row g-4">
<h5>Personal Info:</h5>
  <div class="col-md-6">
    <label class="form-label">First Name:</label>
    <input type="text" class="form-control" id="">
  </div>
<div class="col-md-6">
    <label class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="">
  </div>
	
<div class="col-md-6">
    <label class="form-label">Address:</label>
    <input type="text" class="form-control" id="">
</div>
	
<div class="col-md-6">
    <label class="form-label">Phone / Mobile:</label>
    <input type="text" class="form-control" id="">
</div>

	
<div class="col-md-6">
    <label class="form-label">Birth Date:</label>
    <input type="date" class="form-control" id="">
</div>

	
<div class="col-md-6">
    <label class="form-label">Gender:</label>
	
<div>
	
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>
	
</div>
</div>
	
<div class="col-12">
	<label class="form-label">Description:</label>
	<textarea class="form-control" id="" rows="5"></textarea>
</div>
<div class="line2"></div>

<h5>Social Info:</h5>	
<div class="col-md-6">
    <label class="form-label">Facebook:</label>
    <input type="text" class="form-control" placeholder="www.facebook.com/id" id="">
</div>
	
<div class="col-md-6">
    <label class="form-label">Twitter:</label>
    <input type="text" class="form-control" placeholder="www.twitter.com/id" id="">
</div>
	
<div class="col-md-6">
    <label class="form-label">Instagram:</label>
    <input type="text" class="form-control" placeholder="www.instagram.com/id" id="">
</div>

<div class="col-md-6">
    <label class="form-label">YouTube Channel:</label>
    <input type="text" class="form-control" placeholder="www.youtube.com/channel" id="">
</div>
	
<div class="col-md-6">
    <label class="form-label">Website:</label>
    <input type="text" class="form-control" placeholder="www.yourdomain.com" id="">
</div>

	
  <div class="col-12">
<!--
-------------Nirdosh Jee, Please open this button when your programming-------------------
<button type="submit" class="btn btn-primary"><i class="fas fa-user-edit me-1"></i>Register</button>-->
	  
	  
<!--	  this button is temporary-->
	 <a href="dashboard.php" class="btn btn-primary"><i class="fas fa-paper-plane me-1"></i>Submit</a>
  </div>	

</form>	



    
</div>
</div>
</div>  

</section>	

<?php include("inc/footer.php"); ?>
