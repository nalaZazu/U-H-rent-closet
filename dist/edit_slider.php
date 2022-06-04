<?php
 include('connection.php');
 error_reporting(0);
 $id =$_POST['id'];
 $heading   =$_POST['heading'];
 $para  = $_POST['para'];
 $new_image= $_POST['file']['name'];
 $old_image=$_POST['image_old'];

if ($_POST['submit']){

 $heading   =$_POST['heading'];
 $para  = $_POST['para'];
  $old_image = $_POST['image_old'];
 if( !empty( $_FILES['myfile']['tmp_name'] ) )
 {
  $new_image = $_FILES['myfile']['tmp_name'];
  $new_image_name = time().rand(1,1000).'.'. pathinfo($_FILES['myfile']['name'],PATHINFO_EXTENSION);
  if(move_uploaded_file($new_image, "slider/$new_image_name"))
  {
    unlink("slider/$old_image");
    $old_image = $new_image_name;
  }
 }


 $query="UPDATE `slider` SET `heading`='$heading',`para`='$para', `picture` = '$old_image' WHERE id = $id";
 $data=mysqli_query($conn,$query);
 if ($data) {
  echo "<script>alter('Recode Update')</script>";
  header("LOCATION: slider.php");

 }else
 {
  echo "Record Not Updated";
 }
}else{


}
 
?>


