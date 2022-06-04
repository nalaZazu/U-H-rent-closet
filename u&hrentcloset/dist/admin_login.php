<?php 
include 'connection.php';
 //session_start();
if (isset($_POST['submit'])) {


$email=$_POST['email'];
$pwd=$_POST['password'];



$query = "INSERT INTO `admin_login`( `email`, `password`) VALUES ('$email','$pwd')";

$data= mysqli_query($conn,$query);
if ($data) {
    $_SESSION['status']="User Added Successfully";
    header('Location:index.php');
}else{
     $_SESSION['status']="User Registation Failed";
  // header('Location:.php');
}
}
 ?>