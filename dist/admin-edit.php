
<?php
 include('connection.php');
 error_reporting(0);
 $id =$_GET['id'];
  $fn=$_GET['firstname'];
  $ln=$_GET['lastname'];
 $em   =$_GET['email'];
 $pwd   = $_GET['pwd'];

if ($_GET['submit']){
$firstname  =$_GET['firstname'];
$lastname  =$_GET['lastname'];
$email  = $_GET['email'];
$pwd   =$_GET['password'];

 $query="UPDATE `customer` SET `lastname`='$lastname' ,`email`='$email', `password`='$pwd' WHERE `firstname`='$firstname'";
 $data=mysqli_query($conn,$query);
 if ($data) {
  echo "<script>alter('Recode Update')</script>";
// }else
 }else
 {
  echo "Record Not Updated";
 }
}else{
  echo "<script>alter('click the update button to save the changes')</script>";

}
 
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
<body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit User</h3></div>
                                    <div class="card-body">
                                        <form action="" method="GET">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" id="inputFirstName"  type="text" name="firstname"  value="<?php  echo $fn;?>"placeholder="Enter first name" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4" id="inputLastName" type="text" name="lastname"  value="<?php  echo $ln;?>" placeholder="Enter last name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" name="email"  value="<?php  echo $em;?>"aria-describedby="emailHelp" placeholder="Enter email address" />
                                            </div>
                                            <!-- <div class="form-row"> -->
                                                
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="pwd">Password</label>
                                                        <input class="form-control py-4" id="inputPassword" type="password" name=" password"  placeholder="Enter password" value="<?php  echo $pwd;?>"/>
                                                    </div>
                                              
                                                <!-- <div class="col-md-6"> -->
                                                    <!-- <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                                    </div>
                                                </div> -->
                                           <div class="form-row">
                                            
                                                <div class="form-group mt-4 mb-0">
                <button   class="btn btn-primary btn-block" type="submit"
         name="submit" formmethod="get" value="update">Update</button>
                            <!--  <button type="submit" class="btn btn-primary btn-block" name="submit">Update</button> -->
                                            </div>
                                          </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
          </div>
        </body>
</html>