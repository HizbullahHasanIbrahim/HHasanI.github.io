<?php
include 'koneksi.php';
$id_tamu = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$nomor_hp = $_POST['nomor_hp'];
$alamat_tamu = $_POST['alamat_tamu'];
$status_perkawinan = $_POST['status_perkawinan'];
mysqli_query($koneksi, "INSERT INTO tamu VALUES('$id_tamu', '$nama_tamu', '$nomor_hp', '$alamat_tamu', '$status_perkawinan')");
header("location: tamu.php");
?>