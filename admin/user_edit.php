<?php
include '../koneksi.php';
$id = $_GET['id'] ;
$cari = "SELECT*FROM tb_user WHERE id_user='$id'";
$proses = mysqli_query($koneksi, $cari);
$data = mysqli_fetch_assoc($proses);
if (isset($_POST['submit'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$tipe = $_POST['tipe'];
	$perintah = "UPDATE tb_user SET username='$user', password='$pass', tipe='$tipe' WHERE id_user='$id'";
	$res = mysqli_query($koneksi, $perintah);
	if ($res) {
		header('location: user.php');
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>
	<a href="beranda.php">Beranda</a>
	<a href="user.php">User</a>
	<a href="laporan.php">Laporan</a>
	<a href="keluar.php">Keluar</a>	<br>
	<br>
	<form method="POST">
	<div>
		<label>Username</label>
		<input type="text" name="user" value="<?php echo $data['username'] ?>">
	</div>
	<div>
		<label>Password</label>
		<input type="text" name="pass" value="<?php echo $data['password'] ?>">
	</div>
	<div>
		<label>Tipe User</label>
		<select name="tipe">
			<option value="<?php echo $data['tipe'] ?>"><?php echo $data['tipe'] ?></option>
			<option disabled>---------</option>
			<option value="User">User</option>
			<option value="Admin">Admin</option>
			<option value="Petugas">Petugas</option>
		</select>
	</div>
	<button type="submit" name="submit">Edit</button>
	</form>
</body>
</html>
