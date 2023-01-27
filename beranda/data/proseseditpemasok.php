<?php
    include "../koneksi.php";

    if (isset($_POST['edit'])) {
        $kdbrg = $_POST['id'];
        $namabrg = $_POST['nama'];
        $satbrg = $_POST['alamat'];
        $hrgbrg = $_POST['nohp'];
        $sql_update_brg = "update pemasok set namapemasok='$namabrg',alamat='$satbrg',nohp='$hrgbrg' where idpemasok='$kdbrg'";
        $updatebarang = mysql_query($sql_update_brg);

    if ($updatebarang) {
    echo "<script> document.location='beranda.php?p=datapemasok'</script>";
    } else {
    echo "Gagal Update Data";
    }
    }
?>