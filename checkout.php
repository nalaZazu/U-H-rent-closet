<?php
session_start();
include ('connection.php');
// $credit="";
if (isset($_POST['ok'])) {
$fn=$_POST['fullname'];
$address=$_POST['address'];
$zipcode=$_POST['zipcode'];
$city=$_POST['city'];
$mobile=$_POST['mobile'];
$credit=$_POST['credit'];
$expiry=$_POST['expiry'];
$code=$_POST['code'];
$selectdate=$_POST['selectdate'];
$returndate=$_POST['returndate'];

$query="INSERT INTO `customer-order`( `fullname`, `address`, `zip-code`, `city`, `mobile`,`credit`, `expiry`, `Code`,`selectdate`, `returndate`) VALUES('$fn','$address','$zipcode','$city','$mobile','$credit','$expiry','$code','$selectdate','$returndate')";
   $data=mysqli_query($conn,$query);
	if ($data) 
   {
      $order_id = mysqli_insert_id($conn);
      $products = $_SESSION['product'];
      foreach($products as $product)
      {
         $query_item = "INSERT INTO `customer_order_item` (`order_id`,`item_id`) VALUES('$order_id','$product')";
         mysqli_query($conn, $query_item);
      }
      unset($_SESSION['product']);
      $_SESSION['status']="Place order successfully";
      header("Location:confirmation.php");
	}else{
		echo "data not inserted";
	}
}

?>
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

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Checkout</h1>
					<ol class="breadcrumb">
						<li><a href="index.PHP">Home</a></li>
						<li class="active">checkout</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
   <div class="checkout shopping">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="block billing-details">
                  <h4 class="widget-title">Billing Details</h4>
                  <form class="checkout-form" action="" method="POST">
                     <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" id="full_name" placeholder="" name="fullname" required="">
                     </div>
                     <div class="form-group">
                        <label for="user_address">Address</label>
                        <input type="text" class="form-control" id="user_address" name="address" placeholder="">
                     </div>
                     <div class="checkout-country-code clearfix">
                        <div class="form-group">
                           <label for="user_post_code">Zip Code</label>
                           <input type="text" class="form-control" id="user_post_code" name="zipcode" value="">
                        </div>
                        <div class="form-group" >
                           <label for="user_city">City</label>
                           <input type="text" class="form-control" id="user_city" name="city" value="">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="user_country">Mobile No</label>
                        <input type="text" class="form-control" id="user_country" name="mobile" placeholder="">
                     </div>
                     <div class="form-group">
                        <label for="user_country">Select Date</label>
                        <input type="date" class="form-control" id="user_country" name="selectdate" placeholder="">
                     </div>
                     <div class="form-group">
                        <label for="user_country">Return Date</label>
                        <input type="date" class="form-control" id="user_country" name="returndate" placeholder="">
                     </div>
               </div>
               <div class="block">
                  <h4 class="widget-title">Payment Method</h4>
                  <p>Credit Cart Details (Secure payment)</p>
                  <div class="checkout-product-details">
                     <div class="payment">
                        <div class="card-details">
                              <div class="form-group">
                                 <label for="card-number">Credit No# <span class="required">*</span></label>
                                 <input  id="card-number" class="form-control"   type="tel" name= "credit" placeholder="•••• •••• •••• ••••">
                              </div>
                              <div class="form-group half-width padding-right">
                                 <label for="card-expiry">Expiry (MM/YY) <span class="required">*</span></label>
                                 <input id="card-expiry" class="form-control" type="tel" name="expiry" placeholder="MM / YY">
                              </div>
                              <div class="form-group half-width padding-left">
                                 <label for="card-cvc">Card Code <span class="required">*</span></label>
                                 <input id="card-cvc" class="form-control"  type="tel" name="code" maxlength="4" placeholder="CVC" >
                              </div>
                               <div class="form-group ">
              <button class="btn btn-main mt-20" type="submit" name="ok"  value="">Place Order</button>          
            </div>
                              
                            <!--   <a href="confirmation.php" class="btn btn-main mt-20">Place Order</a > -->
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           
            <div class="col-md-4   " >
               <div class="product-checkout-details">
                  <div class="block">
                     <h4 class="widget-title">Order Summary</h4>
                     <?php
                     if(!empty($_SESSION['product'])):
                        $total_rent = 0;
                                 $ids = implode( ',' ,array_filter ($_SESSION['product']));
                                 $query ="SELECT * FROM `gallery` WHERE id IN ( $ids )";
                                 $data = mysqli_query($conn,$query);
                                 while( $row = mysqli_fetch_assoc( $data ))
                                 {
                                    $total_rent = $total_rent + $row['price'];
                     ?>
                     <div class="media product-card">
                        <a class="pull-left" href="">
                           <?php $img=explode(',', $row['picsource'] );
                           foreach ($img as $pic):?>
                           <img class="media-object" src="<?php echo "dist/picture/".$pic;?>"  />

                        <?php break; endforeach ?>
                           
                        </a>
                        <div class="media-body">
                           <h4 class="media-heading"></h4>
                           <p class=""><?=$row['title']?></p>
                           <!-- <span class="remove" ></span> -->
                        </div>
                     </div>  <?php
                  }
                  ?>
                
                     <!-- <div class="discount-code">
                        <p>Have a discount ? <a data-toggle="modal" data-target="#coupon-modal" href="#!">enter it here</a></p>
                     </div> -->
                     <ul class="summary-prices">
                        <li>
                           <span>Total</span>
                           <span class=""><?=$total_rent?></span>
                        </li>
                       
                     </ul>
                     <?php
                  else:
                  ?>
                   <?php endif; ?>
                  </div>
                       
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
  
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
    


  </body>
  </html>