<?php
    include '../koneksi.php';
    if (isset($_POST['ok'])) {
    $kdbrg = $_POST['kdbrg'];
    $qty = $_POST['jml'];
    $hrg = $_POST['hrgbrg'];
    $sql_tambah_brg = "INSERT INTO bantu(idbrg,qty,hargabrg) VALUES('$kdbrg','$qty','$hrg')";
    $tambahbarang = mysql_query($sql_tambah_brg);

    if ($tambahbarang) {
        echo "<script> document.location='beranda.php?p=formtambahbrgkeluar'</script>";
    } else {
        echo "Gagal Tambah Barang";
    }

    } elseif (isset($_POST['simpan'])) {
    $nofak = $_POST['nofak'];
    $kdplg = $_POST['kdplg'];
    $kdbrg = $_POST['kdbrg'];
    $qty = $_POST['jml'];
    $hrgbrg = $_POST['hrgbrg'];

    $sql_tambah_brgkeluar = "INSERT INTO barangkeluar VALUES('$nofak',now(),'$kdplg')";
    $tambahbrgkeluar = mysql_query($sql_tambah_brgkeluar);
    
    $sql_tambah_detail_brg = "INSERT INTO detailkeluar(detailnofakkeluar,detailkeluarkdbrg,detailkeluarqty,detailkeluarhrg) select '$nofak',idbrg,qty,hargabrg from bantu";
    $tambahdetail_brg = mysql_query($sql_tambah_detail_brg);

    $hapus_bantu = "delete from bantu";
    $hapus = mysql_query($hapus_bantu);

    if ($tambahbrgkeluar) {
        echo "<script> document.location='beranda.php?p=databarangkeluar'; </script>";
    } else {
        echo "Gagal Bosss";
    }
}
?>