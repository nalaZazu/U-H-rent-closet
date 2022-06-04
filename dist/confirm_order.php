
<?php
 include('connection.php');
 error_reporting(0);
 $id=$_GET['id'];
$query= "UPDATE `customer-order` SET `status` = 'confirm' WHERE `id` = $id";
$data=mysqli_query($conn, $query);
if ($data) 
{
 
    //echo "<script>window.location.href = 'customer oredr' </script>"; 
$_SESSION['status']="please try agin";
    echo "<script>window.location.href = 'customer-order.php?error1=denied' </script>";  
   }
else
{
    echo "<script>window.alert('order is pending')</script>";
}
?>