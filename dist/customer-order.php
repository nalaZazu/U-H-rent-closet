
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Order - U&h Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'inc/header.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Order</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Order</li>
                        </ol>
               
                        <div class="card mb-12">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Customer Order
                            </div>
                             <?php if (!empty($_GET['error1'])): ?>
            <div class="row" >
              <div class="col-md-12">
                 <div class="alert alert-success">
            Order is confirm
          </div>
              </div>
             
            </div>
            
<?php endif; ?>

         <?php if (!empty($_GET['error2'])): ?>
            <div class="row" >
              <div class="col-md-12">
                 <div class="alert alert-success">
            Order is cancel
          </div>
              </div>
             
            </div>
            
<?php endif; ?>
                 
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                 <th>ID</th>
                                                <th> Full Name</th>
                                                <th>Address</th>
                                                <th>Zip Code</th>
                                                <th>City</th>
                                                <th>Mobile No</th>
                                                <th>Credit No</th>
                                                <th>Expiry</th>
                                               <th>Card code</th>
                                               <th>Select Date</th>
                                                <th>Return Date</th>
                                               <th>Status
                                               <th>Action</th>
                                               </tr>
   
     <?php
include 'connection.php';
error_reporting(0);
$query= "SELECT * FROM `customer-order`";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);
if ($total!=0) {
    while($result= mysqli_fetch_assoc($data))
       
         echo " <tr>
       <td>".$result ['id']."</td>
            <td>".$result ['fullname']."</td>
            <td>" .$result['address']."</td>
            <td>".$result['zip-code']."</td>
            <td>".$result['city']."</td>
            <td>".$result['mobile']."</td> 
             <td>".$result['credit']."</td> 
              <td>".$result['expiry']."</td> 
               <td>".$result['Code']."</td>
               <td>".$result['selectdate']."</td>
                <td>".$result['returndate']."</td>
               <td>".$result['status']."</td>
                <td><a href='confirm_order.php?id=$result[id]' class='btn btn-info'>Confirm</a></br></br>
           <a href='cancel_order.php?id=$result[id]'class='btn btn-danger'>Cancel</a></br></br>
            <a href='print_rec.php?id=$result[id]'class='btn btn-secondary'>Print</a>
           </td>
         </tr>";
}

?>

                                        </thead>

                                    </table>
                                </div>
                  
                            <!-- </div>
                        </div>
                    </div> -->
                </main>

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright @2021 U&H Rent Closet All Rights Reserved
                            </div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>

