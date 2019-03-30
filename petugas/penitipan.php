<?php 
include '../koneksi.php';
$perintah = "SELECT*FROM tb_penitipan";
$res = mysqli_query($koneksi, $perintah);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Riwayat Penitipan</title>
</head>
<body>
	<a href="beranda.php">Beranda</a>
	<a href="penitipan.php">Riwayat Penitipan</a>
	<a href="keluar.php">Keluar</a>
	<table>
		<thead>
			<th>No</th>
			<th>ID User</th>
			<th>Status</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			while ($data = mysqli_fetch_assoc($res)) { 
			?>
			<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $data['id_user'] ?></td>
			<td><?php echo $data['status_barang'] ?></td>
			<td><a href="penitipan_status.php?id=<?php echo $data['id'] ?>">Edit</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</body>
</html>