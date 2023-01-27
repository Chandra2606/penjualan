<script>
    $(document).ready( function () {
    $('#databarang').DataTable();
    } );
</script>

<script>
    $(function () {
    $('#databarang').DataTable()
    $('#databarang').DataTable({
        'paging' : true,
        'lengthChange': false,
        'searching' : false,
        'ordering' : true,
        'info' : true,
        'autoWidth' : false
    })
 })
</script>

<div class="col-xs-12">
<div class="box">
 <div class="box-header">
    <h3 class="box-title">Data Barang</h3>
 </div>
 <!-- /.box-header -->
    <div class="box-body">
        <table id="judul" class="table table-bordered table-striped">
        <thead>
 <?php
    include '../koneksi.php';
    $sql_view = mysql_query("SELECT * FROM barang ORDER BY kdbarang ASC");
    $total = mysql_num_rows($sql_view);
 ?>
 <a href="beranda.php?p=formtambahbarang" class="btn btn-success btn-sm btnTambah"><i class="glyphicon glyphicon-plus-sign"></i> Tambah</a>
    <br /><br />
    <table id="databarang" name="databarang" class="table table-bordered table-hover">
 <thead>
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Harga Barang</th>
        <th>Stok Barang</th>
        <th>Aksi</th>
    </tr>
 </thead>
 <tbody>

    <?php
        $nomor = 1;
        while ($data = mysql_fetch_array($sql_view)) {
    ?>
 <tr>
    <td><?php echo $nomor ?></td>
    <td><?php echo $data['kdbarang'] ?></td>
    <td><?php echo $data['namabrg'] ?></td>
    <td><?php echo $data['satuan'] ?></td>
    <td><?php echo $data['harga'] ?></td>
    <td><?php echo $data['stok'] ?></td>
    <td>

    <a href="beranda.php?p=formeditbarang&kdbarang=<?php echo $data['kdbarang'] ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
    <a href="beranda.php?p=proseshapusbarang&kdbarang=<?php echo $data['kdbarang'] ?>" onclick="pesan = confirm('Yakin data di hapus?');

    if (pesan) return true; else return false;" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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