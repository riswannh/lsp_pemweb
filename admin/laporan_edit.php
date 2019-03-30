<?php
include '../koneksi.php';
$id = $_GET['id_laporan'] ;
$cari = "SELECT*FROM tb_penitipan WHERE id='$id'";
$proses = mysqli_query($koneksi, $cari);
$data = mysqli_fetch_assoc($proses);
if (isset($_POST['submit'])) {
	$desc_barang = $_POST['desc_barang'];
	$foto_barang = $_POST['foto_barang'];
	$kode = $_POST['kode'];
	$perintah = "UPDATE tb_penitipan SET desc_barang = '$desc_barang', foto_barang = '$foto_barang', kode_penitipan = '$kode' WHERE id = '$id'";
	$res = mysqli_query($koneksi, $perintah);
	if ($res) {
		header('location: laporan.php');
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Laporan</title>
</head>
<a href="beranda.php">Beranda</a>
<a href="user.php">User</a>
	<a href="laporan.php">Laporan</a>
	<a href="keluar.php">Keluar</a>
	<br>
	<br>
	<form method="POST">
	<div>
		<label>Deskripsi Barang</label>
		<input type="text" name="desc_barang" value="<?php echo $data['desc_barang'] ?>">
	</div>
	<div>
		<label>Foto Barang</label>
		<input type="text" name="foto_barang" value="<?php echo $data['foto_barang'] ?>">
	</div>
	<div>
		<label>Kode Penitipan</label>
		<input type="text" name="kode" value="<?php echo $data['kode_penitipan'] ?>">
	</div>
	<button type="submit" name="submit">Edit</button>
	</form>
</html>