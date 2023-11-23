<?php
include 'koneksi.php';

$no_kamar= $_GET['no_kamar'];
mysqli_query($koneksi,"DELETE FROM kamar WHERE no_kamar='$no_kamar'");

header("location: kamar.php");                             
?>