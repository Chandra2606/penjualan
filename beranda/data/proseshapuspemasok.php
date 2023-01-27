<?php
include "../koneksi.php";
$kdbrg = $_GET['idpemasok'];
$result = mysql_query("DELETE FROM pemasok WHERE idpemasok = '$kdbrg'");
if ($result){ ?>
 <script language="javascript">
 alert('Berhasil Dihapus');
 document.location.href="beranda.php?p=datapemasok";
 </script>
<?php
}else {
 trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
}
?>