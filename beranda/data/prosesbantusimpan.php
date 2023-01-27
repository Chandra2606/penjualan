<?php

include '../koneksi.php';

if (isset($_POST['ok'])) {
    $kdbrg = $_POST['kdbrg'];
    $qty = $_POST['jml'];
    $hrg = $_POST['hargabrg'];

    $sql_tambah_brg = "INSERT INTO bantu(idbrg,qty,hargabrg) VALUES('$kdbrg','$qty','$hrg')";
	$tambahbarang = mysql_query($sql_tambah_brg);
	if ($tambahbarang) {
    echo "<script>   document.location='beranda.php?p=formtambahbrgmasuk'</script>";
} else {
    echo "Gagal Tambah Barang";
}
} elseif (isset($_POST['simpan'])) {
    $nofak = $_POST['nofak'];
    $tglmasuk2010013 = $_POST['tglmasuk2010013'];
    $kdpemasok = $_POST['kdpemasok'];
	$kdbrg = $_POST['kdbrg'];
	$qty = $_POST['jml'];
	$hargabrg = $_POST['hargabrg'];    

    $sql_tambah_brgmasuk = "INSERT INTO barangmasuk VALUES('$nofak','$tglmasuk2010013','$kdpemasok')";
    $tambahbrgmasuk = mysql_query($sql_tambah_brgmasuk);
    
    $sql_tambah_detail_brg = "INSERT INTO detailmasuk(detailnofak,detailkdbrg,detailqty,detailharga) select '$nofak',idbrg,qty,hargabrg from bantu";
    $tambahdetail_brg = mysql_query($sql_tambah_detail_brg);
    
    $hapus_bantu = "delete from bantu";
    $hapus = mysql_query($hapus_bantu);

    if ($tambahbrgmasuk) {
        echo "<script>   document.location='beranda.php?p=databarangmasuk'</script>";
    } else {
        echo "Gagal Tambah Barang masuk
        ";
    }
	}

?>
