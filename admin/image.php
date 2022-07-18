<?php 

session_start();
if ( !isset($_SESSION['login']) ) {
  header("Location: login.php");
}
require 'function.php';

$image = query("SELECT * FROM galery");

// var_dump($image);

 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/design.css">
    <style>
        .portfolio .portfolio-wrap .portfolio-info {
    opacity: 1;
  }

  

.portfolio .portfolio-wrap:hover::before {
  opacity: 1;
}
    </style>

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
          <a class="nav-link" href="galery.php">Tambah Gambar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="image.php">Hapus Gambar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  
<div class="container">
  <div class="row mt-3">
    <div class="col">
      <h1 class="text-center mt-5">Hapus Gambar</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php if( isset($_SESSION["delete_success"]) ) : ?>
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        Data <a href="" class="alert-link">Berhasil</a> Dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><?php unset($_SESSION['delete_success']); ?></button>
      </div>
      <?php endif; ?>
  </div>
</div>

<div class="container">
<section class="portfolio" id="portfolio">
  <div class="row portfolio-container justify-content-center">
    <?php foreach($image as $img) : ?>
      <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item">
        <div class="portfolio-wrap shadow">
          <div class="image">
            <img src="../img/<?= $img['image'] ?>" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <a href="delete.php?id=<?= $img['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin mengapus data ini?');">Hapus</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?> 
  </div>
</div>
</section>














    <script src="../assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>