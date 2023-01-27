<html>
<head>
 <title>Print Document</title>
</head>
<body>
<div class="box-header">
 <center> <h3 class="box-title">Laporan Data Rental Mobil</h3></center>
 </div>
 <table border="1" width="90%" style="border-collapse:collapse;" align="center">
 <tr class="tableheader">
    <th>Kode Rental</th>
    <th>Nama Pelanggan</th>
    <th>Tanggal Rental</th>
    <th>Harga</th>
    <th>Lama Rental</th>
    <th>Sub Total</th>
 </tr>
 <?php

// Load file koneksi.php
include "../koneksiuas.php";
if (isset($_POST['cetak'])) {
 $bulan = $_POST['tglawal'];
 $tahun=$_POST['tglakhir'];

//$query = ""; // Tampilkan semua data
$sql = mysql_query("SELECT rentalkodemobil, namapelanggan, tglrental, harga, lamarental,(lamarental*harga) AS subtotal FROM rental JOIN mobil ON kodemobil=rentalkodemobil WHERE merk='avanza' and tglrental BETWEEN '$bulan' AND '$tahun'"); 
// Eksekusi/Jalankan query dari variabel $query
if($sql > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
 while($data = mysql_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
 echo "<tr>";
 echo "<td>".$data['rentalkodemobil']."</td>";
 echo "<td>".$data['namapelanggan']."</td>";
 echo "<td>".$data['tglrental']."</td>";
 echo "<td>".$data['harga']."</td>";
$row = mysql_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 echo "<td>".$data['lamarental']."</td>";
 echo "<td>".$data['subtotal']."</td>";
 echo "</tr>";
 }
}else{ // Jika data tidak ada
 echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
<?php
}
?>
</table>
<script>
 window.load = print_d();
 function print_d(){
 window.print();
 }
 </script>
 <br />
 <br />
 <div class="box-footer">
 <h5 class="box-title" align="left">Padang,________________________
 <br />
 <br /><br />
 <br /><br />
 <br /><br />
 <br /> Rafi Chandra</h5>
 </div>