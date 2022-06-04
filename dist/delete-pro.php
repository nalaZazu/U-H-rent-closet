<?php
include 'connection.php';
$ID =  $_GET['id'];
$query= "DELETE FROM `gallery` WHERE id='$ID'";
$data=mysqli_query($conn,$query);
if ($data) {
	echo "<script>alert('Recode Delete')</script>";
	?>

<!-- url setting -->

<META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/admin/dist/category.php">

	<?php 
}else{
	echo "<script>alert('Sorry, Delete process failed')</script>";
	
} 
	?>

