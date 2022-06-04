 <?php
 $server='localhost';
$user='root';
$pass='';
$db='rent_closet';
// Create connection
 $conn = mysqli_connect('localhost', 'root', '', 'rent_closet');
  
//   database connection 

if ($conn) {
//echo "Successfully connection";
} else {
   die("Error:".mysqli_connect_error()) ;
}

?> 




