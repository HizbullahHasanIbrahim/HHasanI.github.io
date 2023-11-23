<?php
include 'koneksi.php';

$id_tamu = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$nomor_hp = $_POST['nomor_hp'];
$alamat_tamu = $_POST['alamat_tamu'];
$status_perkawinan = $_POST['status_perkawinan'];

mysqli_query($koneksi,"UPDATE tamu SET id_tamu='$id_tamu', nama_tamu='$nama_tamu',
nomor_hp='$nomor_hp',alamat_tamu='$alamat_tamu' ,status_perkawinan='$status_perkawinan' WHERE id_tamu='$id_tamu'");
header("location: tamu.php"); 

?>