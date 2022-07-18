<?php 
session_start();
if ( !isset($_SESSION['login']) ) {
  header("Location: login.php");
}
require 'function.php';

$paket = query("SELECT * FROM daftarpaket")[0];

if (isset($_POST["submit"])) {
  if (tambah($_POST) > 0) {
    $_SESSION['add_success'] = true;
    header("Location: index.php");
  } else {
    echo mysqli_error($conn);
  }

}


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
          <a class="nav-link active" href="tambah.php">Tambah Paket</a>
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
  <div class="row mt-3">
    <div class="col text-center">
      <h3>Tambah Paket</h3>
    </div>
  </div>
  <div class="row mt-3 justify-content-center">
    <div class="col-md-6">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="nama">Nama Paket</label>
          <input type="text" name="nama" class="form-control" id="nama" autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="deskripsi">Deskripsi</label>
          <textarea class="form-control" name="deskripsi" id="deskripsi" style="height: 100px"></textarea>
          <div class="form-text">Gunakan tanda &lt;br&gt; jika ingin enter suatu kalimat</div>
        </div>
        <div class="mb-3">
          <label for="kategori">Pilih Kategori</label>
          <select class="form-select mb-3" name="kategori">
            <option selected>Pilih Kategori</option>
            <option value="filter-finishing">Finishing</option>
            <option value="filter-packaging">Packaging</option>
            <option value="filter-offset">Offset</option>
            <option value="filter-pond">Pisau Pond</option>
            <option value="filter-plong">Plong</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="pesan">Pesan WA (opsional)</label>
          <textarea class="form-control" name="pesan" id="pesan" style="height: 100px"></textarea>
        </div>
        <div class="mb-3">
          <label for="list">List</label>
          <textarea class="form-control" name="list" id="list" style="height: 100px"></textarea>
          <div class="form-text">Gunakan tanda , (koma) untuk memisahkan kata/kalimat</div>
        </div>
        <div class="row">
          <div class="col">
            <label for="harga">Harga</label>
            <div class="input-group mb-3">
              <span class="input-group-text">Rp.</span>
              <input type="text" name="harga" placeholder="Harga" class="form-control" value="0">
            </div>
          </div>
          /
          <div class="col">
            <label for="satuan">Satuan</label>
            <div class="mb-3">
              <input type="text" name="satuan" placeholder="Contoh: pcs, lusin, box, paket, dll" class="form-control">
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="diskon">Diskon (opsional)</label>
          <div class="input-group">
            <input type="text" name="diskon" placeholder="Diskon" class="form-control" value="0">
            <span class="input-group-text">%</span>
          </div>
          <div class="form-text">Cukup tuliskan angka diskonnya saja tidak perlu menggunakan tanda % (persen), jika kosong berikan saja angka 0</div>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Pilih Gambar</label>
          <input class="form-control" type="file" name="image" id="image">
          <div class="form-text">Usahakan memilih gambar dengan resolusi yang tinggi</div>
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