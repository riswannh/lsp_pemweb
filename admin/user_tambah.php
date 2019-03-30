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
	<form method="POST">
	<div>
		<label>Username</label>
		<input type="text" name="user">
	</div>
	<div>
		<label>Password</label>
		<input type="text" name="pass">
	</div>
	<div>
		<label>Tipe User</label>
		<select name="tipe">
			<option value="user">User</option>
			<option value="admin">Admin</option>
			<option value="petugas">Petugas</option>
		</select>
	</div>
	<button type="submit" name="submit">Tambah</button>
	</form>
</body>
</html>
<?php 
if (isset($_POST['submit'])) {
	include '../koneksi.php';
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$tipe = $_POST['tipe'];
	$perintah = "INSERT INTO tb_user VALUES (NULL, '$user', '$pass', '$tipe')";
	$res = mysqli_query($koneksi, $perintah);
	if ($res) {
		header('location: user.php');
	}
}
 ?>