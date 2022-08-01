
<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit - U&h Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
<body class="sb-nav-fixed">
    
        <?php include 'inc/header.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Gallery</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                               <i class="far fa-image"></i>
                                Gellery
                                <a href="add-item.php" type="button"  class="btn btn-primary float-right">Add Gallery</a>
                            </div>
                            <div class="card-body">
                                <?php
                                include 'connection.php';
                                $query="SELECT * FROM `gallery`";
                                $data=mysqli_query($conn,$query);
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                 <th>ID</th>
                                                <th>Category</th>
                                                <th>City</th>
                                                <th>Title</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Images</th>
                                                
                                                <th>Product Descrption</th>
                                               </tr>
                                        </thead>

                                       <?php
                                    
                                       if(mysqli_num_rows($data)>0){
                                        foreach ($data as $row) {
                                          ?>
                                          <tr>
                                              
                                         <td><?php echo $row['id']?> </td>
                                         <td><?php echo $row['category']?> </td>
                                          <td><?php echo $row['city']?> </td>
                                         <td><?php echo $row['title']?> </td>
                                        <td><?php echo $row['price']?> </td>
                                               
                                               <?php
                                               $str=$row['description'];
                                               if (strlen($row['description'])>100) {
                                                 $str=explode("\n", wordwrap($row['description'],100));
                                                 $str=$str[0].'...';
                                               }
                                               ?>
                                  <td><?=$str?> </td>
                                <td>
                              
                                    <?php
                                    $img=explode(',', $row['picsource'] );
                                    ?>
                                    <?php  foreach ($img as $pic):?>
                            <img src="<?php echo "picture/".$pic;?>" width ="50px" alt="images" >
                               <?php endforeach ?>
                                </td>
                                     <td><?php echo $row['product_des']?> </td>
      
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
