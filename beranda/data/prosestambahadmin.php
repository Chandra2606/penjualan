<?php
    include '../koneksi.php';
        if (isset($_POST['SIMPAN'])) {
            $idadmin = $_POST['id'];
            $namaleng = $_POST['nama'];
            $pass = md5 ($_POST['pass']);
            $lvl = $_POST['level'];
            $sql_tambah_brg = "INSERT INTO admin VALUES('$idadmin','$namaleng','$pass','$lvl')";
            $tambahbarang = mysql_query($sql_tambah_brg);

            if ($tambahbarang) {
            echo "<script> document.location='beranda.php?p=dataadmin'</script>";
            } else {
            echo "Gagal Tambah User";
            }
    }
?>