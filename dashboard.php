<?php include("inc/header.php"); ?>
<?php include("inc/nav.php"); ?>
	
<section class="container-page">
	
<div class="container">
<h1><span><i class="fas fa-user"></i></span><br>
Dash Board</h1>
<div class="dashboard-setting">	
	
<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-personal-tab" data-bs-toggle="pill" data-bs-target="#pills-personal" type="button" role="tab" aria-controls="pills-personal" aria-selected="true">Personal Info</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-social-tab" data-bs-toggle="pill" data-bs-target="#pills-social" type="button" role="tab" aria-controls="pills-social" aria-selected="false">Social Info</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-photos-tab" data-bs-toggle="pill" data-bs-target="#pills-photos" type="button" role="tab" aria-controls="pills-photos" aria-selected="false">Photos</button>
  </li>
	<li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-videos-tab" data-bs-toggle="pill" data-bs-target="#pills-videos" type="button" role="tab" aria-controls="pills-videos" aria-selected="false">Videos</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab" tabindex="0">
<div class="creators-profile">
<div class="dashboard-page">

<form class="row g-4">
	
  <div class="col-12">
	<div class="dashboard-profile-pic">
		<img src="images/profile-pic/3.jpg" alt=""/>
	</div>
	  <div class="text-center">
		  <small>Upload or Change Profile Picture</small><br>
	  	<input type="file" name="upload" id="upload" class="form-control" style="display:none"></input>
    	<button class="btn btn-dark btn-sm" id="browse">Click Here</button>
	</div>
  </div>
  <div class="col-md-6">
    <label class="form-label">First Name:</label>
    <input type="text" class="form-control" id="" value="Manisha">
  </div>
<div class="col-md-6">
    <label class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="" value="Shrestha">
  </div>
	
<div class="col-md-6">
    <label class="form-label">Address:</label>
    <input type="text" class="form-control" id="" value="Sorakhutte-35, Kathmandu">
</div>
	
<div class="col-md-6">
    <label class="form-label">Phone / Mobile:</label>
    <input type="text" class="form-control" id="" value="9860099249">
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
	<textarea class="form-control" id="" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</textarea>
</div>

	
  <div class="col-12">
<!--
-------------Nirdosh Jee, Please open this button when your programming-------------------
<button type="submit" class="btn btn-primary"><i class="fas fa-user-edit me-1"></i>Register</button>-->
	  
	  
<!--	  this button is temporary-->
	 <a href="dashboard.php" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane me-1"></i>Update</a>
  </div>
</form>
	

</div>
</div>
</div>
<div class="tab-pane fade" id="pills-social" role="tabpanel" aria-labelledby="pills-social-tab" tabindex="0">
<div class="creators-profile">
<div class="dashboard-page">
<form class="row g-4">	
<div class="col-md-6">
    <label class="form-label">Facebook:</label>
    <input type="text" class="form-control" value="www.facebook.com/id" id="">
</div>
	
<div class="col-md-6">
    <label class="form-label">Twitter:</label>
    <input type="text" class="form-control" value="www.twitter.com/id" id="">
</div>
	
<div class="col-md-6">
    <label class="form-label">Instagram:</label>
    <input type="text" class="form-control" value="www.instagram.com/id" id="">
</div>

<div class="col-md-6">
    <label class="form-label">YouTube Channel:</label>
    <input type="text" class="form-control" value="www.youtube.com/channel" id="">
</div>
	
<div class="col-md-6">
    <label class="form-label">Website:</label>
    <input type="text" class="form-control" value="www.yourdomain.com" id="">
</div>
	
<div class="col-12">
<!--
-------------Nirdosh Jee, Please open this button when your programming-------------------
<button type="submit" class="btn btn-primary"><i class="fas fa-user-edit me-1"></i>Register</button>-->
	  
	  
<!--	  this button is temporary-->
	 <a href="dashboard.php" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane me-1"></i>Update</a>
  </div>
</form>
</div>
</div>
</div>	
<div class="tab-pane fade" id="pills-photos" role="tabpanel" aria-labelledby="pills-photos-tab" tabindex="0">
<div class="creators-profile">
<div class="dashboard-page">
<form class="row g-4">
<div class="col-12">
<div class="upload__box">
  <div class="upload__btn-box">
	  <label class="form-label">Upload Photos / Arts <small>(max file size 1000kb)</small>:</label>
	  <input type="file" class="form-control upload__inputfile" id="" multiple>

  </div>
  <div class="upload__img-wrap"></div>
</div>
</div>
<div class="col-12">
<!--
-------------Nirdosh Jee, Please open this button when your programming-------------------
<button type="submit" class="btn btn-primary"><i class="fas fa-user-edit me-1"></i>Register</button>-->
	  
	  
<!--	  this button is temporary-->
	 <a href="dashboard.php" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane me-1"></i>Update</a>
</div>	

</form>	
</div>
</div>
</div>
	
<div class="tab-pane fade" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab" tabindex="0">
<div class="creators-profile">
<div class="dashboard-page">
<form class="row g-4">
	
<div class="col-12">
<div class="upload__box">
  <div class="upload__btn-box">
	  <label class="form-label">Upload Video / Arts <small>(max file size 1000kb)</small>:</label>
	  <input type="file" class="form-control upload__inputfile" id="">
  </div>
  <div class="upload__img-wrap"></div>
</div>
</div>
<div class="col-12">
<!--
-------------Nirdosh Jee, Please open this button when your programming-------------------
<button type="submit" class="btn btn-primary"><i class="fas fa-user-edit me-1"></i>Register</button>-->
	  
	  
<!--	  this button is temporary-->
 <a href="dashboard.php" class="btn btn-primary btn-sm m-0"><i class="fas fa-paper-plane me-1"></i>Update</a>
</div>
</form>
</div>
</div>
	
</div>
</div>
	
</div>
</div>

</section>	

<?php include("inc/footer.php"); ?>

<script>
	$(document).ready(function(){
        $("#browse").click(function(){
        $("#upload").click();
        });
 });
</script>


<script>
jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}
	
</script>
