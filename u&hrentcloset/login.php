
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
<section class="signin-page account">
  <div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.php">
               <!-- image log set there  -->
            <!-- <img src="images/favicon.png" alt=""> -->
          </a>
        
          <h2 class="text-center">Welcome Back</h2>  
          <form class="text-left clearfix" action="cust-login.php" method="post" >
             <?php if (!empty($_GET['error'])): ?>
            <div class="row" >
              <div class="col-md-12">
                 <div class="alert alert-warning">
            Your password and email is wrong
          </div>
              </div>
            </div>    
<?php endif; ?>
      <p >IF YOU HAVE AN ACCOUNT, SIGN IN WITH YOUR EMAIL ADDRESS.</p>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off"/>
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  name="password"placeholder="Password" minlength="8" maxlength="12">
            </div>
            <div class="text-center">
              <button type="submit"  name="submit"class="btn btn-main text-center" >Login</button>
            </div>
          </form>
           </br>
          <p><a href="forget-password.php"> Forgot your password?</a></p>
          <p class="mt-20">New in this site ?<a href="signin.php"> Create New Account</a></p>
        </div>
      </div>
    </div>
</section>

<footer class="footer section text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="social-media">
          <li>
            <a href="https://www.facebook.com/themefisher">
              <i class="tf-ion-social-facebook"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/themefisher">
              <i class="tf-ion-social-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com/themefisher">
              <i class="tf-ion-social-twitter"></i>
            </a>
          </li>
          <li>
            <a href="https://www.pinterest.com/themefisher/">
              <i class="tf-ion-social-pinterest"></i>
            </a>
          </li>
        </ul>
        <ul class="footer-menu text-uppercase">
          <li>
            <a href="contact.html">CONTACT</a>
          </li>
          <li>
            <a href="shop.html">about</a>
          </li>
          <li>
            <a href="pricing.html">SHOP</a>
          </li>
          <li>
            <a href="contact.html">PRIVACY POLICY</a>
          </li>
        </ul>
          <p class="copyright-text">Copyright &copy;2021, U&H Rent &amp; Rent Closet <a href="#"></a>Rights Reserved</p>
      </div>
    </div>
  </div>
</footer>
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