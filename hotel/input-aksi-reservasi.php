<?php
include 'koneksi.php';
$id_reservasi = $_POST['id_reservasi'];
$no_kamar = $_POST['no_kamar'];
$nama_pegawai = $_POST['nama_pegawai'];
$nama_tamu = $_POST['nama_tamu'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
mysqli_query($koneksi, "INSERT INTO reservasi VALUES('$id_reservasi', '$no_kamar', '$nama_pegawai', '$nama_tamu', '$check_in', '$check_out')");
header("location:reservasi.php");
?>