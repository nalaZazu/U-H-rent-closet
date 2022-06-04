
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
<style>
	 .step {
        width: 33.333333333%;
        padding: 30px 50px 30px 50px;
      }
      .step img {
    max-height: 100px;
    margin: -10px;

}

</style>
<body id="body">
  <?php include 'inc/header.php'?>
  
  <div class="hero-slider">
    <?php  
include 'connection.php';
$query="SELECT * FROM `slider` ";
$data=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($data)){
  ?>
  <div class="slider-item th-fullpage hero-area" style="background-image: url(dist/slider/<?=$row['picture']?>);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-center">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1"><?=$row['para']?></p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5"><?=$row['heading']?></h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="products.php">Shop Now</a>
        </div>
      </div>
    
     </div>
  </div>
  <?php
}
  ?>
  </div>




 <!-- how its works -->
 <section class="product-category section">
 <div class="container">
 	<div class="row">
			<div class="title text-center">
				<h2>How it Works</h2>
			</div>
		</div>
  <div class="row">
    <div class="col-sm-4">
     <div class="step">
                     <img src="images/shop/category/rent.png">
                               </div>
                               <h3 >Rent</h3>
                              <p> Browse through over 2000 designer dresses and gowns. Reserve your favourite online and we’ll delivery to your door.</p>
    															</div>
										<div class="col-sm-4">
										     <div class="step">
                              <img src="images/shop/category/wear.png">
                                         
                               </div>
                                 <h3 >Wear</h3>
                                               <p> Look and feel amazing at your event! The dress is yours for 4 or 8 days and comes with accidental damage insurance.</p>
    															</div>
    <div class="col-sm-4">
     <div class="step">
                 <img src="images/shop/category/return.png">
                            
                               </div>
                                <h3 >Return</h3> 
                                       <p> Simply slip the prepaid satchel into a Post Box or Post Office. We handle all the dry cleaning.</p>
    															</div>
  </div>
</div>
</section>

 <!-- end of works -->

 <section class="product-category section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title text-center">
					<h2>Product Category</h2>
				</div>
			</div>
			<div class="col-md-6">
				<div class="category-box">
					
					<a href="#!">
							<img src="images/shop/category/image37.jpg" alt="" />
						<div class="content">
							<h3>Dresses</h3>
							<p>Shop New Season Clothing</p>
						</div>
					</a>	
				</div>
				
				<div class="category-box">
					<a href="#!">
						<img src="images/shop/category/image90.jpg" alt="" />
						<div class="content">
							<h3>Smart Casuals</h3>
							<p>Get Wide Range Selection</p>
						</div>
					</a>	
				</div>
			</div>
			<div class="col-md-6">
				<div class="category-box category-box-2">
					<a href="#!">
						<img src="images/shop/category/image1.jpg" alt="" />
						<div class="content">
							<h3>Jewellery</h3>
							<p>Special Design Comes First</p>
						</div>
					</a>	
				</div>
			</div>
		</div>
	</div>
</section>

<!-- start footer -->


<?php include 'inc/footer.php'?>
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
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>
