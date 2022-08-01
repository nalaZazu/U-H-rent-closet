
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
<!-- start header -->
<?php include 'inc/header.php';?>
<!-- end header -->
<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.php">
               <!--  image log set there  -->
            <!-- <img src="images/favicon.png" alt=""> -->
          </a>
          <!-- <h2 class="text-center">u&hrent</h2> -->
          <h2 class="text-center">Create Your Account</h2>
            
          <form class="text-left clearfix" action="code.php" onsubmit="return validation()" method="POST"  >
             <?php if (!empty($_GET['error'])): ?>
            <div class="row" >
              <div class="col-md-12">
                 <div class="alert alert-warning">
            Your  Email is already exits
          </div>
              </div>
             
            </div>
            
<?php endif; ?>
   <?php if (!empty($_GET['error2'])): ?>
            <div class="row" >
              <div class="col-md-12">
                 <div class="alert alert-warning">
            Your  password and confirm password does not match
          </div>
              </div>
             
            </div>
            
<?php endif; ?>
            <div class="form-group">
              <input type="text" class="form-control" id="fname" name="firstname" value=""  placeholder="First Name" autocomplete="off"/>
              <span id="username" class="ferror text-danger"></span>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="lname" name="lastname" value=""  placeholder="Last Name" autocomplete="off"/>
                  <span id="userlastname" class="ferror text-danger"></span>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="form-1-email"  name="email"  value =""placeholder="Email" autocomplete="off"/>
              <span id="formemail" class="ferror text-danger"></span>
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  id="form-1-password" name="password"  value=""placeholder="Password"  minlength="8" maxlength="12" autocomplete="off"/>
              <span id="formpassword" class="ferror text-danger"></span>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="form-2-password" name="cpassword" value=""placeholder="confirm Password" minlength="8" maxlength="12" autocomplete="off"/>
              <span id="formpassword2" class="ferror text-danger"></span>
            </div>
            <div class="text-center">
             <button type="submit" class="btn btn-main text-center" name="ok">Sign In</button>
            </div>
          </form>
          <p class="mt-20">Already hava an account ?<a href="login.php"> Login</a></p>
          
        </div>
      </div>
    </div>
  </div>
</section>

<!-- start footer -->
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
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    

    <script type="text/javascript">
       function validation(){
       
       var error=true;
       $('.ferror').hide();
       if ($('#fname').val()=="") {

        $('#username').html("Enter Your First Name");
        $('#username').show();
        error=false;
       }

if(!isNaN($('#fname').val())){
  
 $('#username').html("Only Character are allowed");
        $('#username').show();

}
         if ($('#lname').val()=="") {

        $('#userlastname').html("Enter Your Last Name");
        $('#userlastname').show();
        error=false;
       }


if(!isNaN($('#fname').val())){
  
 $('#username').html("Only Character are allowed");
        $('#username').show();

}


         if ($('#form-1-email').val()=="") {

        $('#formemail').html("Pleaase type correct Email");
        $('#formemail').show();
        error=false;
       }
         if ($('#form-1-password').val()=="") {

        $('#formpassword').html("Enter Your Password");
        $('#formpassword').show();
        error=false;
       }
         if ($('#form-2-password').val()=="") {

        $('#formpassword2').html("Enter Your Confirm Password");
        $('#formpassword2').show();
        error=false;
       }

if(!error){
  return false;
}
return  true;


}
    </script>


  </body>
  </html>