<?php
include 'koneksi.php';
$no_kamar = $_POST['no_kamar'];
$tipe = $_POST['tipe'];
$fasilitas = $_POST['fasilitas'];
$harga = $_POST['harga'];
mysqli_query($koneksi, "INSERT INTO kamar VALUES('$no_kamar', '$tipe', '$fasilitas', '$harga')");
header("location:kamar.php");
?>