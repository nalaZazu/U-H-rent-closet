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
        <script src="ckeditor/ckeditor.js"></script>
    </head>
<body class="sb-nav-fixed">
    <?php include 'inc/header.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Gellery</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Slider-Images</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                               <i class="far fa-images"></i>
                                Slider-Images
                                <a href="slider.php" type="button"  class="btn btn-danger float-right">Back</a>
                            </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Slider-Images</h3></div>
                                    <div class="card-body">
                   <form action="slider-insert.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                         <label for="exampleFormControlTextarea1">Heading</label>
       <textarea class="form-control" id="editor"  name="heading"rows="3"></textarea>
                       
                          <!-- <label class="small mb-1" for="file">Heading</label>
                           <input class="form-control py-4" id="exampleFormControlFile1" type="text" name="heading"  value=""aria-describedby="emailHelp" placeholder="Heading" /> -->
                             <!--  <label class="small mb-1" for="file">paragraph</label>
                                  <input class="form-control py-4" id="exampleFormControlFile1" type="text" name="para"  value=""aria-describedby="emailHelp" placeholder="paragraph" /> -->
                                          <label for="exampleFormControlTextarea1">paragraph</label>
       <textarea class="form-control" id="editor1"  name="heading"rows="3"></textarea>
                              

                                            </div>
              <div class="upload-btn-wrapper">
                <label for="exampleFormControlFile1">upload file </label> 
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="myfile[]" multiple >

                     </div> 
                     <div class="form-row">
                    <div class="form-group mt-4 mb-0">
              <button class="btn btn-primary btn-block" type="submit" name="submit"  value="update">Submit</button>          
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
                <script>
                    CKEDITOR.replace('editor');
                    CKEDITOR.replace('editor1');

                </script>
        </body>
</html>