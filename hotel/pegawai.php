<html>
    <h2>Tabel pegawai </h2>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
<center>
<div class="main">
	<div class="navbar">
		<ul>
			<li><a href="hotel.html">Home</a></li>
			<li><a href="kamar.php">kamar</a></li>
			<li><a href="reservasi.php">reservasi</a></li>
			<li><a href="pegawai.php">pegawai</a></li>
			<li><a href="tamu.php">tamu</a></li>
		</ul>
	</div>
<table border="1" >
    <tr>
        <td>Id pegawai</td>
        <td>Nama pegawai</td>
        <td>Alamat</td>
        <td>No telpon</td>
        <td>AKSI</td>
    </tr>
</center>

<style>
h2 {
    font-family: 'Franklin Gothic Medium';
    text-align: center;
    text-transform: capitalize;
    font-size: 300%;
  }
  
  td {
    text-align: center;
    text-transform: capitalize;
  }
  
  
  th {
    text-transform: uppercase;
  }
  
  tr:nth-child(even) {
    background-color:   rgb(80, 210, 250);
  }
  
  
  button {
    background-color: rgba(14, 183, 240, 0.941);
    color: rgb(34, 54, 2);
    border: 0px;
    cursor: pointer;
  }
  
  table {
    width: 80%;
    border: 0px;
    margin: auto;
  }
  
  .container {
    display: flex;
    justify-content: center;
    
    align-items: center;
    
  
  }
  
  .abc {
    padding: 20px;
  }
  
  .hps:hover{
  
    background-color: darkgray;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  .edt:hover{
  
    background-color: rgb(38, 143, 45);
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  .ttl {
    font-size: 30px;
    color: rgb(24, 16, 16);
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    width: 150px;
    cursor: pointer;
    text-transform: capitalize;
  
  }
  
  .navbar {
    width: 85%;
    margin: auto;
    padding: 30px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .navbar ul li {
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
  }
  
  .navbar ul li a {
    color: black;
    text-transform: uppercase;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
  
  .navbar ul li::after {
    content: '';
    height: 3px;
    width: 0;
    background: rgb(14, 99, 130);
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.4s;
  }
  
  .navbar ul li:hover:after {
    width: 100%;
  }
  * {
   
    font-family: sans-serif;
  }
  
  .content-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgb(249, 251, 252);
  }
  
  .content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
  }
  
  .content-table th,
  .content-table td {
    padding: 12px 15px;
  }
  
  .content-table tbody tr {
    border-bottom: 1px solid #dddddd;
  }
  
  .content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
  }
  
  .content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
  }
  
  .content-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
  }
        table tbody tr:nth-child(odd) td {
            background-color: #f2f2f2;
        } 
        table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #fffof;
            transition: all .2x;

        }
        
        </style>

<?php
    include"koneksi.php";
    $data=mysqli_query($koneksi,"select * from pegawai");
    while($tampil=mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $tampil ["id_pegawai"] ?></td>
        <td><?php echo $tampil ["nama_pegawai"] ?></td>
        <td><?php echo $tampil ["alamat_pegawai"] ?></td>
        <td><?php echo $tampil ["no_telpon"] ?></td>
        <td><a href="hapus_pegawai.php?id_pegawai=<?php echo $tampil['id_pegawai']; ?>"><button>Hapus</a>
            <a href="edit_pegawai.php?id_pegawai=<?php echo $tampil['id_pegawai']; ?>"><button>edit</a> </td>
    </tr>

<?php
}
?>
</table>
<a href="input_pegawai.php"><button>tambahkan data baru</a>
</html>