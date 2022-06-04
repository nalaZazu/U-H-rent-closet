
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Read Message - U&h Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'inc/header.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Read Message</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Read Message</li>
                        </ol> <div class="card mb-4">
                            <div class="card-header">
                           <i class="fas fa-check"></i>
                              Read Message
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                 <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                             <th>Message</th>
                                          
                                               
                                               </tr>
    

                  <?php
include 'connection.php';
error_reporting(0);
$query= "SELECT * FROM `contact`";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);

if ($total!=0) {
    
    while (  $result= mysqli_fetch_assoc($data)) {
      echo " <tr>
       <td>".$result ['id']."</td>
           
            <td>".$result ['name']."</td>
            
            <td>".$result['email']."</td>
           
            <td>".$result['message']."</td>
          

            
           
                                                 
         </tr>";
     
    }
   // echo " tables found";
}else{
    echo "No Message";
}

?>
                                                
                                              
                                           
    
                                        </thead>
                                       
                                    </table>
                                </div>
                  
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

