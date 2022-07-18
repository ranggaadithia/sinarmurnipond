<?php 

session_start();
if ( !isset($_SESSION['login']) ) {
  header("Location: login.php");
}
require 'function.php';


// var_dump($paket);
// die;

if (isset($_POST["submit"])) {
  if (galery($_POST) > 0) {
    $_SESSION['add_success'] = true;
  } else {
    echo mysqli_error($conn);
  }

}
$image = query("SELECT * FROM galery");

 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/sinar">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tambah.php">Tambah Paket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="galery.php">Tambah Gambar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="image.php">Hapus Gambar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1 class="text-center mt-5">Tambah Gambar</h1>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-6">
      <?php if( isset($_SESSION["add_success"]) ) : ?>
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        Data <a href="image.php" class="alert-link">Berhasil</a> Ditambahkan!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><?php unset($_SESSION['add_success']); ?></button>
      </div>
      <?php endif; ?>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="image" class="form-label">Pilih Gambar</label>
          <input class="form-control" type="file" name="image" id="image">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary mb-5" name="submit">Upload</button>
        </div>
      </form>
    </div>
  </div>
</div>














    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>