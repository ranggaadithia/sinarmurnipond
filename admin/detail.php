<?php 
session_start();
if ( !isset($_SESSION['login']) ) {
  header("Location: login.php");
}
require 'function.php';

$id = $_GET['id'];

$paket = query("SELECT * FROM daftarpaket WHERE id = $id")[0];

$list = $paket['list'];

$split = explode(',', $list);

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../style.css">

    <title>Dashboard</title>
  </head>
  <body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container text-center">
    <a class="navbar-brand p5" href="#">
      Percetakan Sinar Murni Dashboard
    </a>
  </div>
</nav>

<div class="container">
  <div class="row justify-content-center">
    <?php for($i= 1; $i <= 4; $i++) : ?>
    <div class="col-4 mt-5">
      <div class="card-grup">
        <div class="card">
          <?php if($paket['diskon'] >= 1) : ?>
          <div class="card-header py-3 card-background">
            <h4 class="my-0 fw-normal text-center text-white">Diskon <?= $paket['diskon']; ?>%</h4>
          </div>
          <?php endif; ?>
          <img src="../img/<?= $paket['image'];  ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $paket['nama']; ?></h5>
            <small class="fs-6 text-muted">Mulai Dari</small>
            <?php if($paket['diskon'] >= 1) : ?>
              <p class="card-title text-muted pricing-card-title fs-5 text-center"><del><span> <?= rupiah($paket['harga']); ?></span> </del></p>
                <h3 class="text-center card-title pricing-card-title"><span class="text-success"><?= rupiah(diskon($paket['harga'], $paket['diskon'])); ?><small class="text-muted fw-light fs-6">/<?= $paket['satuan']; ?></small></span></h3>
              <?php else : ?>
                <h3 class="text-center card-title pricing-card-title"><?= rupiah($paket['harga']); ?><small class="text-muted fw-light fs-6">/pcs</small></h3>
            <?php endif; ?>
              <ul class="list-unstyled mt-3 mb-4">
            <p class="card-text"><?= $paket['deskripsi']; ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <?php foreach($split as $list) : ?>
            <li class="list-group-item"><i class="bi bi-check2 text-success fs-5"></i><?= $list; ?></li>
            <?php endforeach; ?>
          </ul>
          <div class="card-body text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="edit.php?id=<?= $id; ?>" class="btn btn-outline-warning">Edit</a>
              <button type="button" class="btn btn-outline-danger">Delete</button>
            </div>
            <a href="https://wa.me/6285157740813?text=<?= pesan($paket['pesanwa']); ?>" class="btn tombol mt-3"><i class="bi bi-whatsapp"></i> Pesan Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  <?php endfor; ?>
  </div>
</div>















  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>