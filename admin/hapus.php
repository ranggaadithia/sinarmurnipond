<?php 
session_start();

require 'function.php';

$id = $_GET["id"];

if ( hapus($id) > 0 ) {
	$_SESSION['delete_success'] = true;
  	header("Location: index.php");
} else {
	echo mysqli_error($conn);
}


 ?>