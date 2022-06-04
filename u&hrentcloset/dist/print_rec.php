
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>uhrent closet</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="css/print.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>


<div class="container">
    <div class="row">

        <div class="col-12">
            <div class="card">

                <div class="card-body p-0">
                  
                    	<?php
include('connection.php');
$id = $_GET['id'];
$query = "SELECT *, DATEDIFF(returndate, selectdate) AS rent_days FROM `customer-order` WHERE id = '$id'";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($result);
                    	?>
                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Client Information</p>
                           
                            <p class="mb-1"><?php echo $row['fullname']?></p>
                            <p class="mb-1"><?php echo $row['address']?></p>
                            <p class="mb-1"> <?php echo $row['mobile'] ?></p>
                            <p class="mb-1"><?php echo $row['city']?></p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Company Information</p>
                            <p class="mb-1">Uhrentcloset</p>
                            <p class="mb-1"> 041-23456</p>
                            <p class="mb-1">uhrentcloset@gmail.com</p>
                          
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                        
                                        <th class="border-0 text-uppercase small font-weight-bold">Category</th>
                                       
                                        <th class="border-0 text-uppercase small font-weight-bold">Price</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Days</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                    </tr>

                       
                                </thead>
                                <tbody>
                                    <?php
                                    $order_id = $row['id'];
                                    $sr = 1;
                                    $total_rent = 0;
                                    $query_item = "SELECT G.* FROM `gallery` G, `customer_order_item` OI WHERE G.id = OI.item_id AND OI.order_id =  $order_id";
                                    $result_items = mysqli_query($conn, $query_item);
                                    while($item = mysqli_fetch_assoc($result_items)):
                                        $total_rent = $total_rent + ($item['price'] * $row['rent_days'] );
                                     ?>
                                    <tr>
                                        <td><?=$sr?></td>
                                        <td><?=$item['title']?></td>
                                        <td><?=$item['category']?></td>  
                                        <td><?=$item['price']?></td>
                                        <td><?=$row['rent_days']?></td>
                                        <td><?=$item['price']*$row['rent_days']?></td>
                                        
                                    </tr>
                                    <?php $sr++; endWhile; ?>

                                     <tr>
                        <th>Total Rent</th>
                <td><?=$total_rent?></td>
                    </tr>
                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    	
                     <div class=" text-white p-4">
                        <button class="btn btn-secondary float-right"onclick="window.print()">Print</button>
                        </div>

                         <div class="text-light mt-5 mb-5 text-center small"><a class="text-dark" target="_blank" href="#">U&H Rent Closet</a></div>

					</div>
                    </div>
                </div>  
            </div> 
        </div>
    </div>
    
  
</body>
</html>