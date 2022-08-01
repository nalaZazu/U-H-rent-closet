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
					<h1 class="page-name"> Shopping Cart</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active"> Shopping cart</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
          <div class="block">
            <div class="product-list">
              <form  action="" method="post">
                <table class="table">
                  <thead>
                    <tr>
                      <th  >Item Name</th>
                       <th >Item Price</th>
                      <th >Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
                    include 'connection.php';
                  	if(!empty($_SESSION['product'])):
                  		$total_rent = 0;
											$ids = implode( ',' ,array_filter ($_SESSION['product']));
											$query ="SELECT * FROM `gallery` WHERE id IN ( $ids )";
											$data = mysqli_query($conn,$query);
											while( $row = mysqli_fetch_assoc( $data ))
											{
												$total_rent = $total_rent + $row['price'];
                  	?>
 					           <tr >
                     
                        <!-- <div class="product-info"> --><!-- <img width="80" src='' alt="" /> --><!-- <a href="#!"></a>  --><!-- </div> -->
                         <td><input type="hidden" name="title"><?=$row['title']?></td>
                      <td><input type="hidden" name="price" value=""><?=$row['price']?></td>
                      
                      <td>
                     	<!-- <input type="submit" name="delete" value=""> -->
                      	<!-- <input type="submit" name="remove" value="Remove" /> -->
                      <a class="product-remove" href="remove-cat.php?id=<?=$row['id']?> "name="remove">Remove</a>
                      </td>
                   
                   </tr>
                    <?php
                  }
                  ?>
                  <tr>
                		<th>Total Rent</th>
                	<td><?=$total_rent?></td>
                	</tr>
                  <?php
                	else:
                  ?>
                  <tr>
                    <div class="row" >
              <div class="col-md-12">
                 <div class="alert alert-dark">
            No Item In the Cart
          </div>
              </div>
             
            </div>
                  	<!-- <th class="text-center" colspan="4">No Item In the cART</th> -->
                  </tr>
                <?php endif; ?>
                 </tbody> 
                 </table>
                  <a href="checkout.php" class="btn btn-main pull-right">Checkout</a>
              </form> 
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
