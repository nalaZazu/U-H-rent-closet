
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
 <!-- Start Top Header Bar -->
<section class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12 col-sm-4">
        <div class="contact-number">
          <i class="tf-ion-ios-telephone"></i>
          <span>041-23456</span>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-4">
        <!-- Site Logo -->
        <div class="logo text-center">
          <a href="index.php">
            <!-- replace logo here -->
            <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
                font-family="AustinBold, Austin" font-weight="bold">
                <g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
                  <text id="AVIATO">
                    <tspan x="108.94" y="325">u&hrent</tspan>
                  </text>
                </g>
              </g>
            </svg>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-4">
        <!-- Cart -->
        <ul class="top-menu text-right list-inline">
          <li class="dropdown cart-nav dropdown-slide">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                class="tf-ion-android-cart"></i>Cart</a>
            <div class="dropdown-menu cart-dropdown">
              <!-- Cart Item -->
              <div class="media">
                <a class="pull-left" href="cart.php">
                  <img class="media-object" src="" />
                </a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#!"></a></h4>
                  <div class="cart-price">
                    <span></span>
                    <span></span>
                  </div>
                  <h5><strong></strong></h5>
                </div>
                <a href="#!" class="remove"><i class="tf-ion-close"></i></a>
              </div><!-- / Cart Item -->
              <!-- Cart Item -->
              <div class="media">
                <a class="pull-left" href="#!">
                  <img class="media-object" src="" />
                </a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#!"></a></h4>
                  <div class="cart-price">
                    <span></span>
                    <span></span>
                  </div>
                  <h5><strong>$1200</strong></h5>
                </div>
                <a href="#!" class="remove"><i class="tf-ion-close"></i></a>
              </div><!-- / Cart Item -->

              <div class="cart-summary">
                <span></span>
                <span class="total-price"></span>
              </div>
              <ul class="text-center cart-buttons">
                <li><a href="cart.php" class="btn btn-small">View Cart</a></li>
                <li><a href="checkout.php" class="btn btn-small btn-solid-border">Checkout</a></li>
              </ul>
            </div>

          </li><!-- / Cart -->

          <!-- Search -->
          <!-- <li class="dropdown search dropdown-slide">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
                class="tf-ion-ios-search-strong"></i> Search</a>
            <ul class="dropdown-menu search-dropdown">
              <li>
                <form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
              </li>
            </ul>
          </li> -->
          <!-- / Search -->

          <!-- Languages -->
          <li class="commonSelect">
            <select class="form-control">
              <option>EN</option>
              <option>DE</option>
              <option>FR</option>
              <option>ES</option>
            </select>
          </li><!-- / Languages -->

        </ul>
        <!-- / .nav .navbar-nav .navbar-right -->
      </div>
    </div>
  </div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
  <nav class="navbar navigation">
    <div class="container">
      <div class="navbar-header">
        <h2 class="menu-title">Main Menu</h2>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div><!-- / .navbar-header -->

      <!-- Navbar Links -->
      <div id="navbar" class="navbar-collapse collapse text-center">
        <ul class="nav navbar-nav">

          <!-- Home -->
          <li class="dropdown ">
            <a href="index.php">Home</a>
          </li><!-- / Home -->


          <!-- Elements -->
          <li class="dropdown dropdown-slide">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
              role="button" aria-haspopup="true" aria-expanded="false">DRESSES <span
                class="tf-ion-ios-arrow-down"></span></a>
            <div class="dropdown-menu">
              <div class="row">

                <!-- Basic -->
                <div class="col-lg-6 col-md-6 mb-sm-3">
                  <ul>
                    <li class="dropdown-header">DRESSES</li>
                    <?php include('inc/dress_menu.php'); ?>
                  
                  </ul>
                </div>

                <!-- Layout -->
                <div class="col-lg-6 col-md-6 mb-sm-6">
                  <ul>
                    <li class="dropdown-header">Jewllery</li>
                    <?php include('inc/jewllery_menu.php'); ?>
                    
                  </ul>
                </div>

              </div><!-- / .row -->
            </div><!-- / .dropdown-menu -->
          </li>
          <!-- / Elements -->
     <li class="dropdown dropdown-slide">
            <a href="contact.php">RENT THERE</a>

            <!-- / .dropdown-menu -->
          </li><!-- / Elements -->

            <!-- account -->
          <li class="dropdown dropdown-slide">
            <li><a href="signin.php">Account</a></li>
          </li>
          <!-- / Blog -->

      </div>
      <!--/.navbar-collapse -->
    </div><!-- / .container -->
  </nav>
</section>
<section class="signin-page account">
  <div class="container">
   <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <!-- <a class="logo" href="index.html">
               image log set there 
            <img src="images/logo.png" alt="">
          </a> -->
          <h2 class="text-center">u&hrent</h2>
            <h2 class="text-center">Recovery Account</h2> 
          <form class="text-left clearfix" action="cust-login.php" method="post" >
              <div class="form-group">
              <input type="password" class="form-control"  name="password"placeholder="Password">
               </div>
                    <div class="form-group">
                      <input type="password" class="form-control"  name="cpassword"placeholder=" confirm Password">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-main text-center" >Reset Password</button>
                      </div>
          </form>
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