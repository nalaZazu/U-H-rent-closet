
<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Rent Dress - U&h Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
<body class="sb-nav-fixed">
    <!-- start header -->
        <?php include 'inc/header.php';?>
        <!-- end header -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Rent Dress</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Rent Dress</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                               <i class="fas fa-camera-retro"></i>
                                Rent Dress
                               
                            </div>
                            <div class="card-body">
                                <?php
                                include 'connection.php';
                                $query="SELECT * FROM `rent_customer`";
                                $data=mysqli_query($conn,$query);
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                 <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Images</th>
                                               </tr>
                                        </thead>

                                       <?php
                                    
                                       if(mysqli_num_rows($data)>0){
                                        foreach ($data as $row) {
                                          ?>
                                          <tr>
                                              
                                         <td><?php echo $row['id']?> </td>
                                         <td><?php echo $row['name']?> </td>
                                         <td><?php echo $row['email']?> </td>   <?php
                                               $str=$row['message'];
                                               if (strlen($row['message'])>100) {
                                                 $str=explode("\n", wordwrap($row['message'],100));
                                                 $str=$str[0].'...';
                                               }
                                               ?>
                                  <td><?=$str?> </td>
                                <td>
                              
                                    <?php
                                    $img=explode(',', $row['image'] );
                                    ?>
                                    <?php  foreach ($img as $pic):?>
                            <img src="<?php echo "cloth_rent/".$pic;?>" width ="50px" alt="images" >
                               <?php endforeach ?>
                                          </tr>

                                          <?php
                                        }
                                       }

                                       ?>
                                    </table>
                                </div>
       
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
