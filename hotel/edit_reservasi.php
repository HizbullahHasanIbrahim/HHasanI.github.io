<h3>Eid_rsersevasi</h3>

<?php
include 'koneksi.php';
$id_reservasi= $_GET['id_reservasi'];
$data = mysqli_query($koneksi,"SELECT * FROM reservasi WHERE id_reservasi='$id_reservasi'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-reservasi.php">
<table>
    <tr>
        <td>Id Reservasi</td>
        <td><input type="number" name="id_reservasi" value="<?php echo $tampil['id_reservasi']; ?>"></td>
    </tr>
    <tr>
        <td>Nomor Kamar</td>
        <td><input type="number" name="no_kamar" value="<?php echo $tampil['no_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Pegawai</td>
        <td><input type="text" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Tamu</td>
        <td><input type="text" name="nama_tamu" value="<?php echo $tampil['nama_tamu']; ?>"></td>
    </tr>
    <tr>
        <td>Check in</td>
        <td><input type="date" name="check_in" value="<?php echo $tampil['check_in']; ?>"></td>
    </tr>
    <tr>
        <td>Check out</td>
        <td><input type="date" name="check_out" value="<?php echo $tampil['check_out']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>