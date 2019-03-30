<?php 
include '../koneksi.php';
$perintah = "SELECT*FROM tb_penitipan";
$res = mysqli_query($koneksi, $perintah);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
</head>
	<a href="beranda.php">Beranda</a>
	<a href="user.php">User</a>
	<a href="laporan.php">Laporan</a>
	<a href="keluar.php">Keluar</a>
	<br>
	<br>
	<table>
		<thead>
			<th>No</th>
			<th>Deskripsi Barang</th>
			<th>Foto Barang</th>
			<th>Kode Penitipan</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			while ($data = mysqli_fetch_assoc($res)) { 
			?>
			<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $data['desc_barang'] ?></td>
			<td><?php echo $data['foto_barang'] ?></td>
			<td><?php echo $data['kode_penitipan'] ?></td>
			<td><a href="laporan_edit.php?id_laporan=<?php echo $data['id'] ?>">Edit</a> <a href="laporan_hapus.php?id_laporan=<?php echo $data['id'] ?>">hapus</a> <a href="laporan_cetak.php?id_laporan=<?php echo $data['id'] ?>">Cetak</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</html>