<?php
include 'koneksi.php';

$no_kamar = $_POST['no_kamar'];
$tipe = $_POST['tipe'];
$fasilitas = $_POST['fasilitas'];
$harga = $_POST['harga'];

mysqli_query($koneksi,"UPDATE kamar SET no_kamar='$no_kamar', tipe='$tipe',
fasilitas='$fasilitas',harga='$harga' WHERE no_kamar='$no_kamar'");
header("location: kamar.php"); 

?>