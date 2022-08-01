<?php
include 'connection.php';

if (isset($_POST['submit'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


$query="INSERT INTO  `contact`(`name`,`email`,`message`) VALUES('$name','$email','$message')";
$data= mysqli_query($conn,$query);
if ($data) {
   $_SESSION['status']="Connection Succesfully";
          echo "<script> window.location = 'index.php'; </script>";
}else{
   $_SESSION['status']="Connection Succesfully";
          echo "<script> window.location = 'contact.php'; </script>";
}
  
}
?>