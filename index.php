<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="POST">
	<label>Username</label>
	<input type="text" name="user">
	<label>Password</label>
	<input type="password" name="pass">
	<button type="submit" name="submit">Login</button>
	<a href="#">Lupa Password</a>
</form>
</body>
</html>
<?php 
if (isset($_POST['submit'])) {
	session_start();
	include "koneksi.php";
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$perintah = "SELECT*FROM tb_user WHERE username='$username' AND password='$password'";
	$res = mysqli_query($koneksi, $perintah);
	$periksa = mysqli_fetch_assoc($res);
	if ($periksa) {
		if ($periksa['tipe'] == "admin") {
			$_SESSION['id_user'] = $periksa['id_user'];
			header('location: admin/beranda.php');
		}elseif ($periksa['tipe'] == "user") {
			$_SESSION['id_user'] = $periksa['id_user'];
			header('location: user/beranda.php');
		}elseif ($periksa['tipe'] == "petugas") {
			$_SESSION['id_user'] = $periksa['id_user'];
			header('location: petugas/beranda.php');
		}
	}else{
		echo "Username atau Password Salah";
	}
	
}
?>