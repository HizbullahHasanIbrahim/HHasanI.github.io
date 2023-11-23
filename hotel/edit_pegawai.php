<h3>Eid_PEGAWAI</h3>

<?php
include 'koneksi.php';
$id_pegawai= $_GET['id_pegawai'];
$data = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-pegawai.php">
<table>
    <tr>
        <td>Id pegawai</td>
        <td><input type="number" name="id_pegawai" value="<?php echo $tampil['id_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>Nama pegawai</td>
        <td><input type="text" name="nama_pegawai" value="<?php echo $tampil['nama_pegawai']; ?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value="<? echo $tampil['alamat']; ?>"></td>
    </tr>
    <tr>
        <td>Nomor telpon</td>
        <td><input type="number" name="no_telpon" value="<?php echo $tampil['no_telpon']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>