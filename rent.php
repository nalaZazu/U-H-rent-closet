<?php
include 'connection.php';
//error_reporting(0);


$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$images_array='';
$img=$_FILES['myfile'];
$pic_name=$img['name'];

if (isset($_FILES['myfile'])) {
	$myfile=$_FILES['myfile'];
	$filecount=count($img['name']);
	for ($i=0; $i<$filecount ; $i++) {

		// imgaes upload query
	$ext=pathinfo($_FILES['myfile']['name'][$i],PATHINFO_EXTENSION);
	$new_name=time().rand(1,1000).'.'.$ext;

	$fileName=basename($_FILES['myfile']['name'][$i]);
	// $type=basename($_FILES['myfile']['type'][$i]);
	$images_array.="".$new_name.",";
	move_uploaded_file($_FILES['myfile']['tmp_name'][$i], 'dist/cloth_rent/'.$new_name);
	}
	}


if (!empty($images_array)) 
	$images_array= substr($images_array, 0,-1);

// inserted the image data into database
$mysqli = "INSERT INTO `rent_customer`(`name`, `email`, `message`, `image`) VALUES ('$name','$email','$message','$images_array')";
if( mysqli_query($conn, $mysqli)){
	header("Location: http://localhost/admin/index.php");
}

else{
echo "Not Saved";	
}

?>
