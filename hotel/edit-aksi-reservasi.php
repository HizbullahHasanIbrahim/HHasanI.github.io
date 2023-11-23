<?php
include 'koneksi.php';

$id_reservasi = $_POST['id_reservasi'];
$no_kamar = $_POST['no_kamar'];
$nama_pegawai = $_POST['nama_pegawai'];
$nama_tamu = $_POST['nama_tamu'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];

mysqli_query($koneksi,"UPDATE reservasi SET id_reservasi='$id_reservasi', no_kamar='$no_kamar',
nama_pegawai='$nama_pegawai',nama_tamu='$nama_tamu', check_in='$nama_tamu',check_out='$check_out' WHERE id_reservasi='$id_reservasi'");
header("location: reservasi.php"); 

?>