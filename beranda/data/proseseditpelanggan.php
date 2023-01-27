<?php
    include "../koneksi.php";

    if (isset($_POST['edit'])) {
        $kdbrg = $_POST['id'];
        $namabrg = $_POST['nama'];
        $satbrg = $_POST['alamat'];
        $hrgbrg = $_POST['nohp'];
        $sql_update_brg = "update pelanggan set namapelanggan='$namabrg',alamat='$satbrg',nohp='$hrgbrg' where idpelanggan='$kdbrg'";
        $updatebarang = mysql_query($sql_update_brg);

    if ($updatebarang) {
    echo "<script> document.location='beranda.php?p=datapelanggan'</script>";
    } else {
    echo "Gagal Update Data";
    }
    }
?>