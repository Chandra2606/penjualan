<?php
include "../koneksi.php";
$kdbrg = $_GET['idpelanggan'];
$result = mysql_query("DELETE FROM pelanggan WHERE idpelanggan = '$kdbrg'");
if ($result){ ?>
 <script language="javascript">
 alert('Berhasil Dihapus');
 document.location.href="beranda.php?p=datapelanggan";
 </script>
<?php
}else {
 trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
}
?>