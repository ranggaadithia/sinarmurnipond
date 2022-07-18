<?php 
session_start();

require 'function.php';

$id = $_GET["id"];

if ( delete($id) > 0 ) {
	$_SESSION['delete_success'] = true;
  	header("Location: image.php");
} else {
	echo mysqli_error($conn);
}


 ?>