<?php
include "../koneksi.php";
$kdbrg = $_GET['kdbarang'];
$result = mysql_query("DELETE FROM barang WHERE kdbarang = '$kdbrg'");
if ($result){ ?>
 <script language="javascript">
 alert('Berhasil Dihapus');
 document.location.href="beranda.php?p=databarang";
 </script>
<?php
}else {
 trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
}
?>