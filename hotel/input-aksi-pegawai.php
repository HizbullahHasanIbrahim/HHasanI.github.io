<?php
include 'koneksi.php';
$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telpon'];
mysqli_query($koneksi, "INSERT INTO pegawai VALUES('$id_pegawai', '$nama_pegawai', '$alamat', '$no_telpon')");
header("location:pegawai.php");
?>