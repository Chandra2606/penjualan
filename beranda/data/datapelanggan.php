<script>
    $(document).ready( function () {
    $('#datapelanggan').DataTable();
    } );
</script>

<script>
    $(function () {
    $('#datapelanggan').DataTable()
    $('#datapelanggan').DataTable({
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
    <h3 class="box-title">Data Pelanggan</h3>
 </div>
 <!-- /.box-header -->
    <div class="box-body">
        <table id="judul" class="table table-bordered table-striped">
        <thead>
 <?php
    include '../koneksi.php';
    $sql_view = mysql_query("SELECT * FROM pelanggan ORDER BY idpelanggan ASC");
    $total = mysql_num_rows($sql_view);
 ?>
 <a href="beranda.php?p=formtambahpelanggan" class="btn btn-success btn-sm btnTambah"><i class="glyphicon glyphicon-plus-sign"></i> Tambah</a>
    <br /><br />
    <table id="datapelanggan" name="datapelanggan" class="table table-bordered table-hover">
 <thead>
    <tr>
        <th>No</th>
        <th>Id pelanggan</th>
        <th>Nama pelanggan</th>
        <th>Alamat</th>
        <th>NoHp</th>
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
    <td><?php echo $data['idpelanggan'] ?></td>
    <td><?php echo $data['namapelanggan'] ?></td>
    <td><?php echo $data['alamat'] ?></td>
    <td><?php echo $data['nohp'] ?></td>
    <td>

    <a href="beranda.php?p=formeditpelanggan&idpelanggan=<?php echo $data['idpelanggan'] ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
    <a href="beranda.php?p=proseshapuspelanggan&idpelanggan=<?php echo $data['idpelanggan'] ?>" onclick="pesan = confirm('Yakin data di hapus?');

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