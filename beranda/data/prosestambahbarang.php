<?php
    include '../koneksi.php';
        if (isset($_POST['SIMPAN'])) {
            $kdbrg = $_POST['kdbrg'];
            $namabrg = $_POST['namabrg'];
            $satuan = $_POST['satuan'];
            $harga = $_POST['harga'];
            $stok = $_POST['stok'];
            $sql_tambah_brg = "INSERT INTO barang VALUES('$kdbrg','$namabrg','$satuan','$harga','$stok')";
            $tambahbarang = mysql_query($sql_tambah_brg);

            if ($tambahbarang) {
            echo "<script> document.location='beranda.php?p=databarang'</script>";
            } else {
            echo "Gagal Tambah Barang";
            }
    }
?>