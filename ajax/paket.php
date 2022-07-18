<?php 
require '../admin/function.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM daftarpaket WHERE
            nama LIKE '%$keyword%'";

$paket = query($query);

var_dump($paket);
die;

if (empty($paket)) {
     $empty = true;
} else {
  $empty = false;
}


 ?>
