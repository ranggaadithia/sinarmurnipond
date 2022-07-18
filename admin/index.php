<?php 
session_start();
if ( !isset($_SESSION['login']) ) {
  header("Location: login.php");
}
require 'function.php';

$paket = query("SELECT * FROM daftarpaket");


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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tambah.php">Tambah Paket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galery.php">Tambah Gambar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="image.php">Hapus Gambar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row mt-5">
    <div class="col-md-4 ms-auto">
      <form class="d-flex" action="" method="post">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off" id="keyword">
        <button class="btn btn-outline-success" name="search" type="submit" id="search">Search</button>
      </form>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <?php if( isset($_SESSION["add_success"]) ) : ?>
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        Data <a href="" class="alert-link">Berhasil</a> Ditambahkan!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><?php unset($_SESSION['add_success']); ?></button>
      </div>
      <?php endif; ?>
      <?php if( isset($_SESSION["delete_success"]) ) : ?>
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        Data <a href="" class="alert-link">Berhasil</a> Dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><?php unset($_SESSION['delete_success']); ?></button>
      </div>
      <?php endif; ?>
      <?php if( isset($_SESSION["edit_success"]) ) : ?>
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        Data <a href="" class="alert-link">Berhasil</a> Diubah!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><?php unset($_SESSION['edit_success']); ?></button>
      </div>
      <?php endif; ?>
    </div>
    <div class="table-responsive mt-3" id="container">
      <h3 class="text-center">Daftar Paket</h3>
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach($paket as $row) : ?>
          <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><img src="../img/<?= $row['image']; ?>" alt="" width="150px"></td>
            <td><?= $row['nama']; ?></td>
            <td><?= rupiah(diskon($row['harga'],$row['diskon'])); ?>
            <?php if($row['diskon'] >= 1) : ?>
              <span class="badge bg-success">Diskon <?= $row['diskon']; ?>%</span>
            <?php endif; ?>
            </td>
            <td>
              <a href="edit.php?id=<?= $row['id'];  ?>" class="btn btn-warning m-1">Edit</a>
              <a href="hapus.php?id=<?= $row['id'];  ?>" class="btn btn-danger m-1"onclick="return confirm('Apakah anda yakin ingin mengapus data ini?');">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  </div>
</div>















    <script>
      var keyword = document.querySelector("#keyword");
      var search = document.querySelector("#search");
      var container = document.querySelector("#container");

      keyword.addEventListener('keyup', function(){

        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() {
          if ( xhr.readyState == 4 && xhr.status == 200 ) {
            container.innerHTML = xhr.responseText;
          }
        }

        xhr.open('GET', '../ajax/daftar.php?keyword=' + keyword.value, true);
        xhr.send();

      });
    </script> 
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>