<?php
 session_start();
 include 'connection.php';

 if (isset($_POST['ok'])) {
   $fn=$_POST['firstname'];
   $ln=$_POST['lastname'];
   $email=$_POST['email'];
   $pwd=$_POST['password'];
   $cpwd=$_POST['cpassword'];
   $status="";
// password confirmation
   if ($pwd==$cpwd) 
   {
     // email check  if it exit or not 
    $checkemail="SELECT email FROM `customer_login`WHERE email='$email' ";
    $email_query_run=mysqli_query($conn,$checkemail);

    if (mysqli_num_rows($email_query_run)>0)
    {
     
       $_SESSION['login']="Your Email id is already exist";
     echo "<script>window.location.href = 'signin.php?error=denied' </script>"; 

    }else
    {
      // Recored not found
       $query="INSERT INTO `customer_login`(`firstname`, `lastname`, `email`, `password`, `cpassword`) VALUES('$fn','$ln','$email','$pwd','$cpwd')";
      $data=mysqli_query($conn,$query);
       if ($data) 
       {
         $_SESSION['login']="login successfully";
          echo "<script> window.location = 'index.php'; </script>";
          
       }
         else
        {
      
          $_SESSION['login']="please try agin";
          echo "<script>window.location.href = 'signin.php?error2=denied' </script>"; 
      
        }

    }
   
   } else{
     $_SESSION['login']="Your password and confirm password does not match ";
   echo "<script>window.location.href = 'signin.php?error2=denied' </script>"; 
 
   } 
 }


?>