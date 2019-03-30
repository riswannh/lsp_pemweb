<?php 
include '../koneksi.php';
$id = $_GET['id_laporan'] ;
$perintah = "DELETE FROM tb_penitipan WHERE id ='$id'";
$res = mysqli_query($koneksi, $perintah);
header('location: laporan.php');
?>