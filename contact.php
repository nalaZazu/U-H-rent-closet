
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>RENT CLOSET</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">
<?php include 'inc/header.php';?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Get In Touch</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Get In Touch</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-md-6 " >
					<form id="contact-form" method="post" action="contact_customer.php" role="form">
					
						<div class="form-group">
							<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
						</div>
						
						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
						</div>
						<!-- 
						<div class="form-group">
							<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
						</div> -->
						
						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
						</div>
						
					<!-- 	<div id="mail-success" class="success">
							Thank you. The Mailman is on His Way :)
						</div>
						
						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div> -->
						
						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit" name="submit">
						</div>						
						
					</form>
				</div>
				<!-- ./End Contact Form -->
				
				<!-- Contact Details -->
				<div class="contact-details col-md-6 " >
					<div class="google-map">
						<div id="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.7167418836248!2d73.21564681515088!3d31.53193888136585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39226c207f71d863%3A0x8a0a5e3fd863a371!2sW%20Canal%20Rd%2C%20Faisalabad%2C%20Punjab!5e0!3m2!1sen!2s!4v1623658493650!5m2!1sen!2s" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
					<ul class="contact-short-info" >
						<!-- <li>
							<i class="tf-ion-ios-home"></i>
							<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
						</li>
						<li>
							<i class="tf-ion-android-phone-portrait"></i>
							<span>Phone: +880-31-000-000</span> 
						</li>
						<li>
							<i class="tf-ion-android-globe"></i>
							<span>Fax: +880-31-000-000</span>
						</li>
						<li>
							<i class="tf-ion-android-mail"></i>
							<span>Email: hello@example.com</span>
						</li> -->
					</ul>
					<!-- Footer Social Links -->
					<div class="social-icon">
					<!-- 	<ul>
							<li><a class="fb-icon" href="#"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-googleplus-outline"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-pinterest-outline"></i></a></li>
						</ul> -->
					</div>
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->
					
				
			
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div>
</section>
	

  <!-- start footer --->
  <?php include 'inc/footer.php';?>
    <!-- end footer -->



    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <!-- <script type="text/javascript" src="plugins/google-map/gmap.js"></script> -->

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>