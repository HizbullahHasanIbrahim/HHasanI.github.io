<h3>Eid_tamu</h3>

<?php
include 'koneksi.php';
$id_tamu= $_GET['id_tamu'];
$data = mysqli_query($koneksi,"SELECT * FROM tamu WHERE id_tamu='$id_tamu'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-tamu.php">
<table>
    <tr>
        <td>Id Tamu</td>
        <td><input type="number" name="id_tamu" value="<?php echo $tampil['id_tamu']; ?>"></td>
    </tr>
    <tr>
        <td>Nama Tamu</td>
        <td><input type="text" name="nama_tamu" value="<?php echo $tampil['nama_tamu']; ?>"></td>
    </tr>
    <tr>
        <td>Nomor Telpon</td>
        <td><input type="number" name="nomor_hp" value="<?php echo $tampil['nomor_hp']; ?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat_tamu" value="<?php echo $tampil['alamat_tamu']; ?>"></td>
    </tr>
    <tr>
        <td>Status</td>
        <td><input type="text" name="status_perkawinan" value="<?php echo $tampil['status_perkawinan']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>