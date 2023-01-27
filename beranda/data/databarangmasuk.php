<script>

    $(document).ready(function (e) {
    $('#databrgmasuk').DataTable();

    })
</script>

<?php

    include '../koneksi.php';
    $result = mysql_query("SELECT detailnofak, tglmasuk, namabrg, satuan, detailharga, detailqty, (detailqty*detailharga) AS subtotal FROM detailmasuk JOIN barang ON barang.kdbarang=detailmasuk.detailkdbrg JOIN barangmasuk ON barangmasuk.nofakmasuk=detailmasuk.detailnofak ORDER BY detailnofak ASC");
    $total = mysql_num_rows($result);

?>
    <div class="col-xs-12">
    <div class="box">
    <div class="box-header">
    <h3 class="box-title">Data Barang Masuk</h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
    <a href="beranda.php?p=formtambahbrgmasuk" class="btn btn-success btn-sm btnTambah"><i class="glyphicon glyphicon-plus-sign"></i> Tambah</a>
    <br /><br />
    <table id="databrgmasuk" class="table table-bordered table-striped">
    <thead>

    <tr>
        <th>No</th>
        <th>No Faktur</th>
        <th>Tanggal Masuk</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Harga Barang</th>
        <th>Jumlah Masuk</th>
        <th>Sub Total</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
<?php
$nomor = 1;
while ($row = mysql_fetch_assoc($result)) {
?>
    <tr>
        <td><?php echo $nomor ?></td>
        <td><?php echo $row['detailnofak'] ?></td>
        <td><?php echo $row['tglmasuk'] ?></td>
        <td><?php echo $row['namabrg'] ?></td>
        <td><?php echo $row['satuan'] ?></td>
        <td><?php echo $row['detailharga'] ?></td>
        <td><?php echo $row['detailqty'] ?></td>
        <td><?php echo $row['subtotal'] ?></td>
        <td>
        <a href="beranda.php?p=formeditbrgmasuk&nofakmasuk=<?php echo $row['nofakmasuk'] ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
        <a href="beranda.php?p=hapusbrgmasuk&nofakmasuk=<?php echo $row['nofakmasuk'] ?>" onclick="pesan = confirm('Yakin data di hapus?'); if (pesan) return true; else return false;" class="btn btn-danger btn- sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </td>
    </tr>
    <?php
    $nomor++;
    }
 ?>
</tbody>
</table>
</div>
</div>
</div>
 

