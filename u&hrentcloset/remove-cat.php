<?php
session_start();
$index = array_search($_GET['id'], $_SESSION['product']);
unset($_SESSION['product'][$index]);
// if (($key = array_search($_Get['id'], $_SESSION['product'])) !== false)
	// unset($_SESSION['product'][$key]);

header("Location:cart.php");
?>