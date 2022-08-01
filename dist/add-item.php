<?php
include 'connection.php';
error_reporting(0);
?>
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
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="register.php">Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
     <?php include 'inc/header.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Gellery</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Gallery</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                               <i class="far fa-image"></i>
                                Gallery 
                                <a href="category.php" type="button"  class="btn btn-danger float-right">Back</a>
                            </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Gallery</h3></div>
                                    <div class="card-body">
                   <form action="insert-image.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="small mb-1" for="file">Category</label>
                        <select  class="form-control" name="category" >
                         
                            <option value="Nikkah">Nikkah</option>
                            <option value="Mehndi">Mehndi</option>
                            <option value="Formals">Formals</option>
                            <option value="Bridals">Bridals</option>
                            <option value="Earring">Earring</option>
                            <option value="Wrist Wear">Wrist Wear</option>
                            <option value="Necklace">Necklace</option>
                           
                        </select>
                         <label class="small mb-1" for="file">City</label>
                        <select  class="form-control" name="city" >
                         
                            <option value="Faisalabad">Faisalabad</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="Karachi">Karachi</option>
                            
                           
                        </select>
                          <label class="small mb-1" for="file">File-Name</label>
                           <input class="form-control py-4" id="exampleFormControlFile1" type="text" name="title"  value=""aria-describedby="emailHelp" placeholder="File-Name" />
                              <label class="small mb-1" for="file">price</label>
                                  <input class="form-control py-4" id="exampleFormControlFile1" type="text" name="price"  value=""aria-describedby="emailHelp" placeholder="price" />
                              <label for="exampleFormControlTextarea1"> Product Description</label>
       <textarea class="form-control" id="exampleFormControlTextarea1"  name="description"rows="3"></textarea>
        <label for="exampleFormControlTextarea1"> Care Instructions</label>
       <textarea class="form-control" id="exampleFormControlTextarea1"  name="product_des"rows="3"></textarea>

                                            </div>
              <div class="upload-btn-wrapper">
                <label for="exampleFormControlFile1">upload file </label> 
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="myfile[]" multiple >

                     </div> 
                     <div class="form-row">
                    <div class="form-group mt-4 mb-0">
              <button class="btn btn-primary btn-block" type="submit" name="submit"  value="update">Upload</button>          
            </div>
              </div>
          </form>
                               </div>
                                    <div class="card-footer text-center">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
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
        </body>
</html>