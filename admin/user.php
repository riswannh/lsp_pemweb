<?php 
include '../koneksi.php';
$perintah = "SELECT*FROM tb_user";
$res = mysqli_query($koneksi, $perintah);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	<a href="beranda.php">Beranda</a>
	<a href="user.php">User</a>
	<a href="laporan.php">Laporan</a>
	<a href="keluar.php">Keluar</a>
	<br>
	<br>
	<a href="user_tambah.php">Tambah User</a>
	<br>
	<br>
	<table>
		<thead>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Tipe</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			while ($data = mysqli_fetch_assoc($res)) { 
			?>
			<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $data['username'] ?></td>
			<td><?php echo $data['password'] ?></td>
			<td><?php echo $data['tipe'] ?></td>
			<td><a href="user_edit.php?id=<?php echo $data['id_user'] ?>">Edit</a> <a href="user_hapus.php?id=<?php echo $data['id_user'] ?>">hapus</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</body>
</html>