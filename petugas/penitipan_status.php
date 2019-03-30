<?php
include '../koneksi.php';
$id = $_GET['id'] ;
$cari = "SELECT*FROM tb_penitipan WHERE id='$id'";
$proses = mysqli_query($koneksi, $cari);
$data = mysqli_fetch_assoc($proses);
if (isset($_POST['submit'])) {
	if ($_POST['status'] == "Sudah Titip") {
		$status = $_POST['status'];
		$perintah = "UPDATE tb_penitipan SET status_barang='$status' WHERE id='$id'";
		$res = mysqli_query($koneksi, $perintah);
		if ($res) {
			header('location: penitipan.php');
		}
	}elseif ($_POST['status'] == "Sudah Diambil") {
		$status = $_POST['status'];
		$tgl_k = date("Y-m-d");
		$perintah = "UPDATE tb_penitipan SET tgl_keluar = '$tgl_k', status_barang='$status' WHERE id='$id'";
		$res = mysqli_query($koneksi, $perintah);
		if ($res) {
			header('location: penitipan.php');
		}
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
	<a href="penitipan.php">Riwayat Penitipan</a>
	<a href="keluar.php">Keluar</a>
	<form method="POST">
	<div>
		<label>Status</label>
		<select name="status">
			<option value="<?php echo $data['status_barang'] ?>"><?php echo $data['status_barang'] ?></option>
			<option disabled>---------</option>
			<option value="Sudah Titip">Sudah Titip</option>
			<option value="Sudah Diambil">Sudah Diambil</option>
		</select>
	</div>
	<button type="submit" name="submit">Edit</button>
	</form>
</body>
</html>