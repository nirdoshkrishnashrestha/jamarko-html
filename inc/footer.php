	
<section class="footer">
<div class="container-fluid"> 
<div class="footer-line"></div>
</div>	  
</section>
	
<!----------------------------------Page Scroll Start----------------------->
<a href="#" id="scroll" style="display: none;"><span></span></a>
<!----------------------------------Page Scroll End----------------------->	

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>

	
	
</body>
</html>