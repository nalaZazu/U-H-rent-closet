
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
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">U&H ReNt cLOSET</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <!-- <a class="dropdown-item" href="#">Settings</a> -->
                        <a class="dropdown-item" href="register.php">Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <?php include 'inc/header.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Silder Images</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Slider Images</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                              <i class="far fa-images"></i>
                               Slider-Images
                                <a href="slider-img.php" type="button"  class="btn btn-primary float-right">Add Image</a>
                            </div>
                            <div class="card-body">
                                <?php
                                include 'connection.php';
                                $query="SELECT * FROM `slider`";
                                $data=mysqli_query($conn,$query);
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                 <th>ID</th>
                                                   <th>Images</th>
                                                <th>Heading</th>
                                                <th>paragraph</th>
                                                <th>operation</th>
                                              
                                               </tr>
                                        </thead>

                                       <?php
                                    
                                       if(mysqli_num_rows($data)>0){
                                        foreach ($data as $row) {
                                          ?>
                                          <tr>
                                              
                                         <td><?php echo $row['id']?> </td>
                                         
                                <td>
                              
                                    <?php
                                    $img=explode(',', $row['picture'] );
                                    ?>
                                    <?php  foreach ($img as $pic):?>
                            <img src="<?php echo "slider/".$pic;?>" width ="50px" alt="images" >
                               <?php endforeach ?>
                                </td>

                                 <?php
                                               $str=$row['heading'];
                                               if (strlen($row['heading'])>100) {
                                                 $str=explode("\n", wordwrap( $row['heading'],100));
                                                 $str=$str[0].'...';
                                               }
                                               ?>
                                  <td><?=$str?> </td>
                                    <!-- <td><?php echo $row['heading']?></td> -->
                                         <td><?php echo $row['para']?> </td>
                                        
                               <!-- <td><?=$str?> </td> -->
                                 <td><a href='edit.php?id=<?php echo $row['id'];?>' class='btn btn-info'>Edit </a>
           <a href='delete.php?id=<?php echo $row['id'];?>'class='btn btn-danger' >Delet</a>
           
           </td>
      
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
