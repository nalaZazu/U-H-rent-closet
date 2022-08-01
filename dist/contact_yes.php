
<?php
 include('connection.php');
 error_reporting(0);
 $id=$_GET['id'];
$query= "UPDATE `contact` SET `status` = '1' WHERE `id` = $id";
$data=mysqli_query($conn, $query);
if ($data) 
{
$_SESSION['status']="please try agin";
    echo "<script>window.location.href = 'read_message.php?error1=denied' </script>";  
}
else
{
   // echo "<script>window.alert('order is pending')</script>";
}
?>