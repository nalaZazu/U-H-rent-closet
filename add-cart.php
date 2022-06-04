<?php
session_start();

$_SESSION['product'][]=$_GET['id']; 
header ('Location:cart.php');


?>