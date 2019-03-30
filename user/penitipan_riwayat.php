<?php
include '../koneksi.php';
session_start(); 
$id_user = $_SESSION['id_user'];
$perintah = "SELECT*FROM tb_penitipan WHERE id_user = '$id_user'";
$res = mysqli_query($koneksi, $perintah);
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
	<table>
		<thead>
			<th>No</th>
			<th>Deskripsi Barang</th>
			<th>Foto Barang</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			while ($data = mysqli_fetch_assoc($res)) { 
			?>
			<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $data['desc_barang'] ?></td>
			<td><img src="../gambar/<?php echo $data['foto_barang'] ?>" width="50px"></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</body>
</html>