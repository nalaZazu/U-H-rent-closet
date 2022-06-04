<?php
session_start();
include 'connection.php';

if (isset($_POST['submit'])) 
{
	$email=$_POST['email'];
	$pwd=$_POST['password'];

$log_query ="SELECT * FROM `customer_login` WHERE email='$email' AND password='$pwd'";
$result  =mysqli_query( $conn,$log_query);

if (mysqli_num_rows($result)>0) {
foreach ($result as $row) {
	$id=$row['id'];
	$email=$row['email'];
	$pwd=$row['password'];
}
$_SESSION ['auth']= true;
$_SESSION['auth_user']=
[ 
	'id'=>$id,
	'email'=>$email,
	'password'=>$pwd,

];
  $_SESSION['login']="login successfully";
     header('Location:index.php');
	
}else{
	 // echo '<script>alert("Your password is incorrect")</script>';
	$_SESSION['login']="Invalid Email ";
	  header('Location: login.php?error=invalid');
}
}else{

	 $checkemail="SELECT password FROM `customer_login`WHERE password='$pwd' ";
    $email_query_run=mysqli_query($conn,$checkemail);
    if (mysqli_num_rows($email_query_run)>0) {
    	  $_SESSION['login']="your password is incorrect";
    header('Location:login.php?error2=invalid');
    
    }else{
    	 $_SESSION['login']="please try agin";
      header('Location:login.php?error=denied');
    }

}
?>