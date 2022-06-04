<?php
include 'connection.php';
error_reporting(0);
$category="";
$title="";
$price="";
$description="";
$pic_name="";
$product_des="";
$city="";


$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];
$category=$_POST['category'];
$product_des=$_POST['product_des'];
$city=$_POST['city'];

$images_array='';
$img=$_FILES['myfile'];
$pic_name=$img['name'];

if (isset($_FILES[myfile])) {
	$myfile=$_FILES['myfile'];
	$filecount=count($img['name']);
	for ($i=0; $i<$filecount ; $i++) { 
		// imgaes upload query
	$ext=pathinfo($_FILES['myfile']['name'][$i],PATHINFO_EXTENSION);
	$new_name=time().rand(1,1000).'.'.$ext;

	$fileName=basename($_FILES['myfile']['name'][$i]);
	// $type=basename($_FILES['myfile']['type'][$i]);
	$images_array.="".$new_name.",";
	move_uploaded_file($_FILES['myfile']['tmp_name'][$i], 'picture/'.$new_name);
	}
	}


if (!empty($images_array)) 
{
	$images_array=substr($images_array, 0,-1);
}
// inserted the image data into database
$mysqli = "INSERT INTO `gallery`( `title`, `price`, `description`, `picsource`,`category`,`product_des`,`city`) VALUES ('$title','$price','$description','$images_array','$category','$product_des','$city')";
if( mysqli_query($conn, $mysqli)){
	header("Location: http://localhost/admin/dist/category.php");
	
}

else{
echo "Not Saved";	
}

?>
