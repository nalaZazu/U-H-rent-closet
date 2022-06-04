<?php
include 'connection.php';
$id =  $_GET['id'];
$query= "DELETE FROM `gallery` WHERE id='$id'";
$data=mysqli_query($conn,$query);
if ($data) {
	echo "<script>alert('Recode Delete')</script>";
	?>

<!-- url setting -->

<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/admin/cart.php">

	<?php 
}else{
	echo "<script>alert('Sorry, Delete process failed')</script>";
	
} 
	?>

