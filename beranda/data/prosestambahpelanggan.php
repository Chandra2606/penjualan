<?php
    include '../koneksi.php';
        if (isset($_POST['SIMPAN'])) {
            $kdbrg = $_POST['id'];
            $namabrg = $_POST['nama'];
            $satuan = $_POST['alamat'];
            $harga = $_POST['nohp'];
            $sql_tambah_brg = "INSERT INTO pelanggan VALUES('$kdbrg','$namabrg','$satuan','$harga')";
            $tambahbarang = mysql_query($sql_tambah_brg);

            if ($tambahbarang) {
            echo "<script> document.location='beranda.php?p=datapelanggan'</script>";
            } else {
            echo "Gagal Tambah Barang";
            }
    }
?>