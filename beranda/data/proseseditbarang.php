<?php
    include "../koneksi.php";

    if (isset($_POST['edit'])) {
        $kdbrg = $_POST['kdbrg'];
        $namabrg = $_POST['namabrg'];
        $satbrg = $_POST['satbrg'];
        $hrgbrg = $_POST['hrgbrg'];
        $stokbrg = $_POST['stokbrg'];
        $sql_update_brg = "update barang set namabrg='$namabrg',satuan='$satbrg',harga='$hrgbrg',stok='$stokbrg' where kdbarang='$kdbrg'";
        $updatebarang = mysql_query($sql_update_brg);

    if ($updatebarang) {
    echo "<script> document.location='beranda.php?p=databarang'</script>";
    } else {
    echo "Gagal Update Data";
    }
    }
?>