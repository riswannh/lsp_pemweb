<?php 
if (isset($_POST['submit'])) {
	include '../koneksi.php';
	session_start(); 
	$id_user = $_SESSION['id_user'];
	$desc = $_POST['desc'];
	$nama_foto = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	$tgl_m = date("Y-m-d");
	$perintah = "INSERT INTO tb_penitipan VALUES (NULL, '$id_user', '$tgl_m', NULL, '$desc', '$nama_foto', 'Belum Titip', NULL)";
	$res = mysqli_query($koneksi, $perintah);
	if ($res) {
		move_uploaded_file($lokasi,"../gambar/".$nama_foto);
		header('location: penitipan.php');
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
</head>
<body>
	<a href="beranda.php">Beranda</a>
	<a href="penitipan.php">Penitipan</a>
	<a href="penitipan_riwayat.php">Riwayat Penitipan</a>
	<a href="keluar.php">Keluar</a>

	<form method="POST" enctype="multipart/form-data">
	<div>
		<label>Deskripsi Barang</label>
		<input type="text" name="desc">
	</div>
	<div>
		<label>Foto Barang</label>
		<input type="file" name="foto">
	</div>
	<button type="submit" name="submit">Tambah</button>
	</form>
</body>
</html>