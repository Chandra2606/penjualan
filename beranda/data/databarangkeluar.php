<script>
    $(document).ready(function (e) {
    $('#databrgkeluar').DataTable();
    })
</script>

<?php
    include '../koneksi.php';
    $result = mysql_query("SELECT detailnofakkeluar,tglkeluar,namabrg,satuan,detailkeluarhrg,detailkeluarqty,(detailkeluarhrg*detailkeluarqty)AS subtotal FROM detailkeluar JOIN barangkeluar ON detailnofakkeluar=nofakkeluar JOIN barang ON detailkeluarkdbrg=kdbarang ORDER BY nofakkeluar ASC");
    $total = mysql_num_rows($result);
?>

<div class="col-xs-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Data Barang Keluar</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<a href="beranda.php?p=formtambahbrgkeluar" class="btn btn-success btn-sm btnTambah"><i class="glyphicon glyphicon-plus-sign"></i> Tambah</a>
<br /><br />
<table id="databrgkeluar" class="table table-bordered tablestriped">
<thead>
    <tr>
        <th>No</th>
        <th>No Faktur</th>
        <th>Tanggal Keluar</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Harga Barang</th>
        <th>Jumlah Keluar</th>
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
    <td><?php echo $row['detailnofakkeluar'] ?></td>
    <td><?php echo $row['tglkeluar'] ?></td>
    <td><?php echo $row['namabrg'] ?></td>
    <td><?php echo $row['satuanbrg'] ?></td>
    <td><?php echo $row['detailkeluarhrg'] ?></td>
    <td><?php echo $row['detailkeluarqty'] ?></td>
    <td><?php echo $row['subtotal'] ?></td>
    <td>
    <a href="home.php?p=formeditbrgkeluar&detailnofakkeluar=<?php echo $row['detailnofakkeluar'] ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
    <a href="home.php?p=hapusbrgkeluar&detailnofakkeluar=<?php echo $row['detailnofakkeluar'] ?>" onclick="pesan = confirm('Yakin data di hapus?'); if (pesan) return true; else return false;" class="btn btn-danger btnsm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
