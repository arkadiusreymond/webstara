<!DOCTYPE html>
<html lang="en">
	<?php include 'header.php'; ?>
<body>

   <div id="top" class="topHeaderSection">		
   	<?php include 'menunav.php'; ?>
	</div>
    <!-- bodySection -->
	
	 <div class="container">
      <div class="row">
        <?php include 'sidenavservis.php'; ?>
        <div class="col-md-9">
         
            <h1 style="color:#0C97E2; text-shadow: 2px 2px 2px rgba(0,0,0,0.2); ">Standart Operasional Procedure</h1>
          
		   <br/>
			 <div class="row">
            <div class="col-md-12">
			<img src="images/sop.jpg"  alt="sop" /><br/><br/>
              <p style="text-align:justify;text-justify:inter-word;">SOP (Standard Operating Procedure) adalah suatu dokumen yang dibuat untuk menetapkan suatu pekerjaan yang harus dilaksanakan, meliputi ketetapan tentang kapan, oleh siapa, di mana dan hasil yang dikehendaki.
			  SOP yang baik harus singkat, jelas, ringkas, lengkap, obyektif dan koheren.
			  Perusahaan yang menggunakan SOP secara rutin memiliki aktivitas operasional yang lancar, rapi dalam administrasi dan terus berjalan mengikuti sistem.<br/>
<ul>
	<li>SOP dibuat untuk para pelaksana pekerjaan dan harus dibuat sebelum pekerjaan tersebut dilaksanakan dengan melalui uji coba.</li>
	<li>SOP harus ditinjau kembali apabila ada perubahan tempat kerja, peralatan, jumlah pelaksana atau perubahan lingkungan kerja lainnya</li>
	<li>SOP dibuat oleh tim penulis, biasanya oleh konsultan yang berpengalaman, yang mendapat masukan dari pelaksana di lapangan, supervisor pelaksana, dan manajer.</li>
    <li>SOP adalah aturan kerja yang memberi kemudahan melaksanakan pekerjaan secara konsisten, sebagai alat komunikasi kerja dengan pelaksana lain untuk mendapatkan hasil kerja yang ditetapkan.</li>
</ul>
	<br/>
	<img src="images/sop-diagram.jpg"  alt="sop" /><br/><br/>
</p>
	</div>  
          </div><!--/row-->
		  <br/>
		  <hr/>
		  </div>
		  </div>
		  <div class="row">
		    <div class="col-md-3" style="margin-top:-3.34cm;">
		
          <div class="footerTopSection2">
            <ul class="nav nav-list" style="margin-top:-1cm;">
              <li class="pricelist" style="text-transform:uppercase;"><strong>Price List</strong></li><br/>
			  <p> Untuk dapat menggunakan jasa Layanan kami dalam pembuatan Standard Operasional Procedure, silahkan menghubungi kami di :<br>
			  Phone : (021)<br>
			  Email :<br>
			  </p>
			  
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
      </div><!--/row-->

      

    </div><!--/.fluid-container-->
    <br/><br/>
	 <div class="footerTopSection">
		<div class="container">
			<div class="row">
			
			  
			
			  <div class="col-md-8">
				
				<p>
					<strong style="color: #0C97E2;">PT. SORAN TATA RANCANG</strong><br>
					Jl. Kesehatan Raya No.20, Bintaro<br>
					Jakarta Selatan<br>
					Phone 	: (021)            <br>
					Email 	:                  <br>
					Website :www.soranstara.com<br>
					
				</p>
				
			  </div>
			 
			  <div class="col-md-4">
			 
				<p>
					<strong style="color: #0C97E2;">We are available at all social networks</strong>
				</p>
					<a href="index.php"><img src="assets/custom/img/facebook.png" style="width=50px; height:50px;" alt="My web solution" /></a>
					<a href="index.php"><img src="assets/custom/img/twitter.png" style="width=45px; height:45px;" alt="My web solution" /></a>
					<a href="index.php"><img src="assets/custom/img/gplus.png" style="width=55px; height:55px;" alt="My web solution" /></a>
			</div>
			
			</div>
		</div>
	</div>	
    <!-- footerTopSection -->
   
<div class="footerBottomSection">
		<div class="container" style="color:fff;">
			&copy; Stara 2014, Allright reserved.  
			<div class="pull-right"> <a href="index.php"><img src="assets/custom/img/STARA.png" style="width=45px; height:45px;" alt="My web solution" /></a></div>
		</div>
	</div>
	
<!-- JS Global Compulsory -->			
<script type="text/javascript" src="assets/custom/js/jquery.js"></script>
<script type="text/javascript" src="assets/custom/js/jquery-1.8.2.min.js"></script><!-- supaya navbarnya tetep -->	
<script type="text/javascript" src="assets/custom/js/modernizr.custom.js"></script>		
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>	
	
	<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/custom/js/jquery.flexslider-min.js"></script><!-- narogambar dipaaralax -->
<script type="text/javascript" src="assets/custom/js/modernizr.js"></script><!-- buat parallax slider -->
<script type="text/javascript" src="assets/custom/js/jquery.cslider.js"></script> <!-- narogambar dipaaralax -->
<script type="text/javascript" src="assets/custom/js/back-to-top.js"></script>
<script type="text/javascript" src="assets/custom/js/jquery.sticky.js"></script>

<!-- JS Page Level -->    
<script type="text/javascript" src="assets/custom/js/wowslider.js"></script>
<script type="text/javascript" src="assets/custom/js/script.js"></script>       
<script type="text/javascript" src="assets/custom/js/app.js"></script>
<script type="text/javascript" src="assets/custom/js/index.js"></script>
<script type='text/javascript' src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
    });
    $(function() {
			
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});
			
			});
			
			/* google maps */
google.maps.visualRefresh = true;

var map;
function initialize() {
	var geocoder = new google.maps.Geocoder();
	var address = $('#map-input').text(); /* change the map-input to your address */
	var mapOptions = {
    	zoom: 15,
    	mapTypeId: google.maps.MapTypeId.ROADMAP,
     	scrollwheel: false
	};
	map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
	
  	if (geocoder) {
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
          map.setCenter(results[0].geometry.location);

            var infowindow = new google.maps.InfoWindow(
                {
                  content: address,
                  map: map,
                  position: results[0].geometry.location,
                });

            var marker = new google.maps.Marker({
                position: results[0].geometry.location,
                map: map, 
                title:address
            }); 

          } else {
          	alert("No results found");
          }
        }
      });
	}
}
google.maps.event.addDomListener(window, 'load', initialize);

/* end google maps */
</script>
	<script>
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	</script>
	</body>
</html>