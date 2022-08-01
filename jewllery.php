
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
 <?php include 'inc/header.php'?>
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
						<div class="col-md-3" style="float:right;"> 
							<div class="widget">
								<h4 class="widget-title">Select City</h4>
                  <select class="form-control" id="cityFilter">
                      <option value="" >Select City</option>
                  	<?php 
                  	$cities = ['Faisalabad', 'Lahore', 'Islamabad', 'Karachi'];
                  	foreach( $cities as $city ):
                  	?>
                      <option value="<?=$city?>"  <?=!empty($_GET['city']) && $_GET['city'] == $city ? 'selected' : ''?> >
                      	<?=$city?>
                      	</option>
                    <?php endforeach; ?>
                  </select>
	            </div>
	</div>
					<h1 class="page-name">Jewllery</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active"><?=$_GET['cat']?> </li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="products section">
	<div class="container">
		<div class="row">
			<?php
			include 'connection.php';
			$cat = $_GET['cat'];
	
			//copy from here
			$queryAddon = '';
			if(!empty($_GET['city']))
			{
				$city = $_GET['city'];
				$queryAddon = " AND city = '$city'"; 
			}
			//copy end
			$query = "SELECT * FROM gallery WHERE category = '$cat'".$queryAddon;
			$result = mysqli_query($conn, $query);
			while($row = mysqli_fetch_assoc($result)):
			?>
			<a href="product-single.php?id=<?=$row['id']?>">
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<?php $img=explode(',', $row['picsource'] );
						 foreach ($img as $pic):?>
                            <img class="img-responsive" src="<?php echo "dist/picture/".$pic;?>" alt="product-img" />

                        <?php break; endforeach ?>
						
						<div class="preview-meta">
							<a href="jewllery-single.php?id=<?=$row['id']?>">View in detail</a>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="jewllery-single.php?id=<?=$row['id']?>"><?=$row['title']?></a></h4>
						<p class="price"> PKR <?=$row['price']?></p>
					</div>
				</div>
			</div>
			</a>
			<?php
				endWhile; 
			?>
		</div>
	</div>
</section>

 <?php include 'inc/footer.php'?>

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
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#cityFilter').on('change',function()
		{
			var cUrl= "http://<?=$_SERVER["HTTP_HOST"].parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);?>";
			var cCat = "<?=$_GET['cat']?>";
			var val = $(this).val();
			if( val != '')
			{
				window.location.href = cUrl+'?cat='+cCat+'&city='+val;
			}
		});
	});
</script>