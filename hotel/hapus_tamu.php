<?php
include 'koneksi.php';

$id_tamu= $_GET['id_tamu'];
mysqli_query($koneksi,"DELETE FROM tamu where id_tamu='$id_tamu'");

header("location: tamu.php");                             
?>