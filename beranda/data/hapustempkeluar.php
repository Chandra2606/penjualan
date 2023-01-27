<?php
    include '../koneksi.php';
    $idbrg = $_GET['idbrg'];
    $result = mysql_query("DELETE FROM bantu WHERE idbrg = '$idbrg'");
    if ($result){ ?>
    <script language="javascript">
    alert('Berhasil Dihapus');
    document.location.href="beranda.php?p=formtambahbrgkeluar";
    </script>
    <?php
    }else {
    trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error,  E_USER_ERROR);
    }
?>