<?php
include '../koneksi.php';
$id = $_GET['id_laporan'];
$perintah = "SELECT*FROM tb_penitipan WHERE id = '$id'";
$res = mysqli_query($koneksi, $perintah);
$data = mysqli_fetch_assoc($res);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
</head>
	<h1>LAPORAN</h1>
	<p>ID Penitipan: <?php echo $data['id'] ?></p>
	<p>ID User: <?php echo $data['id_user'] ?></p>
	<p>Tanggal Masuk Barang: <?php echo $data['tgl_masuk'] ?></p>
	<p>Tanggal Keluar Barang: <?php echo $data['tgl_keluar'] ?></p>
	<p>Deskripsi Barang: <?php echo $data['desc_barang'] ?></p>
	<p>Foto Barang: </p><img src="../gambar/<?php echo $data['foto_barang'] ?>">
	<p>Status Barang: <?php echo $data['status_barang'] ?></p>
	<p>Kode Penitipan Barang: <?php echo $data['kode_penitipan'] ?></p>
</html>