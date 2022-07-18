<?php 
$noWa = '6285972538098';
$conn = mysqli_connect("localhost", "root", "", "sinarmurni");

function query($query) {
	global $conn; 
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function rupiah ($angka) {
	$hasil_rupiah = "Rp. ". number_format($angka,0,'','.');
	return $hasil_rupiah;
}

function diskon($harga, $diskon) {
	$diskon = $harga * $diskon/100;
	$total = $harga - $diskon;
return $total;
}

function pesan($text) {
	$textWA = str_replace(" ", "%20", $text);
	return $textWA;
}

function search($keyword) {
  $query = "SELECT * FROM daftarpaket WHERE
            nama LIKE '%$keyword%'";
  return query($query);
}

function tambah($post) {
	global $conn;

	$id = $post["id"];
	$nama = htmlspecialchars($post["nama"]);
	$deskripsi = $post["deskripsi"];
	$kategori = $post["kategori"];
	$pesan = htmlspecialchars($post["pesan"]);
	$list = htmlspecialchars($post["list"]);
	$harga = htmlspecialchars($post["harga"]);
	$satuan = htmlspecialchars($post["satuan"]);
	$diskon = htmlspecialchars($post["diskon"]);


	$image = upload();
	if ( !$image ) {
		return false;
	}


    $query = "INSERT INTO `daftarpaket` VALUES (null, '$nama', '$deskripsi', '$kategori', '$pesan', '$list', '$harga', '$satuan', '$diskon', '$image')";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function upload() {
	
	$namaFile = $_FILES['image']['name'];
	$error = $_FILES['image']['error'];
	$tmpName = $_FILES['image']['tmp_name'];

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
						alert('yang anda upload bukan gambar!');
					</script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, '../img/'.$namaFileBaru);

return $namaFileBaru;

}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM daftarpaket WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function delete($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM galery WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function edit($post) {
	global $conn;

	$id = $post["id"];
	$nama = htmlspecialchars($post["nama"]);
	$deskripsi = $post["deskripsi"];
	$kategori = $post["kategori"];
	$pesan = htmlspecialchars($post["pesan"]);
	$list = htmlspecialchars($post["list"]);
	$harga = htmlspecialchars($post["harga"]);
	$satuan = htmlspecialchars($post["satuan"]);
	$diskon = htmlspecialchars($post["diskon"]);

	$gambarLama	= htmlspecialchars($post["gambarLama"]);

	if ( $_FILES['image']['error'] === 4 ) {
		$image = $gambarLama;
	} else {
		$image = upload();
	}

	$query = "UPDATE daftarpaket SET 
	nama = '$nama', 
	deskripsi = '$deskripsi', 
	kategori = '$kategori',
	pesanwa = '$pesan', 
	list = '$list', 
	satuan = '$satuan', 
	diskon = '$diskon', 
	image = '$image'
	WHERE id = $id;";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function galery($post) {
	global $conn;

	$image = upload();
	if ( !$image ) {
		return false;
	}

  $query = "INSERT INTO `galery` VALUES (null, '$image')";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

 ?>