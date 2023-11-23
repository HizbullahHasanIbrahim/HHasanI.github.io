<h3>TAMBAH DATA PENGUNJUNG</h3>
    <form method="post" action="input-aksi-reservasi.php">
        <table>
            <tr>
                <td>Id Reservasi</td>
                <td><input type="number" name="id_reservasi"></td>
            </tr>
            <tr>
                <td>Nomor Kamar</td>
                <td><input type="number" name="no_kamar"></td>
            </tr>
            <tr>
                <td>Nama Pegawai</td>
                <td><input type="text" name="nama_pegawai"></td>
            </tr>
            <tr>
                <td>Nama Tamu</td>
                <td><input type="text" name="nama_tamu"></td>
            </tr>
            <tr>
                <td>Check in</td>
                <td><input type="date" name="check_in"></td>
            </tr>
            <tr>
                <td>Check out</td>
                <td><input type="date" name="check_out"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>