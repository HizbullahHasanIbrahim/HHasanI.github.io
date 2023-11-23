<h3>Eid_kamar</h3>

<?php
include 'koneksi.php';
$no_kamar= $_GET['no_kamar'];
$data = mysqli_query($koneksi,"SELECT * FROM kamar WHERE no_kamar='$no_kamar'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="edit-aksi-kamar.php">
<table>
    <tr>
        <td>Nomor Kamar</td>
        <td><input type="number" name="no_kamar" value="<?php echo $tampil['no_kamar']; ?>"></td>
    </tr>
    <tr>
        <td>Tipe</td>
        <td><input type="text" name="tipe" value="<?php echo $tampil['tipe']; ?>"></td>
    </tr>
    <tr>
        <td>Fasilitas</td>
        <td><input type="text" name="fasilitas" value="<?php echo $tampil['fasilitas']; ?>"></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input type="number" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>