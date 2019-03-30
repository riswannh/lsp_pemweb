<?php 
include '../koneksi.php';
$id = $_GET['id'] ;
$perintah = "DELETE FROM tb_user WHERE id_user ='$id'";
$res = mysqli_query($koneksi, $perintah);
header('location: user.php');
?>