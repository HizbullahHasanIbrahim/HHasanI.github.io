<?php
include 'koneksi.php';

$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telpon'];

mysqli_query($koneksi,"UPDATE pegawai SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai',
 alamat='$alamat', no_telpon='$no_telpon' WHERE id_pegawai='$id_pegawai'");
header("location: pegawai.php"); 

?>