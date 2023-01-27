<script>
    $(document).ready( function () {
    $('#datapemasok').DataTable();
    } );
</script>

<script>
    $(function () {
    $('#datapemasok').DataTable()
    $('#datapemasok').DataTable({
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
    <h3 class="box-title">Data pemasok</h3>
 </div>
 <!-- /.box-header -->
    <div class="box-body">
        <table id="judul" class="table table-bordered table-striped">
        <thead>
 <?php
    include '../koneksi.php';
    $sql_view = mysql_query("SELECT * FROM pemasok ORDER BY idpemasok ASC");
    $total = mysql_num_rows($sql_view);
 ?>
 <a href="beranda.php?p=formtambahpemasok" class="btn btn-success btn-sm btnTambah"><i class="glyphicon glyphicon-plus-sign"></i> Tambah</a>
    <br /><br />
    <table id="datapemasok" name="datapemasok" class="table table-bordered table-hover">
 <thead>
    <tr>
        <th>No</th>
        <th>Id pemasok</th>
        <th>Nama pemasok</th>
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
    <td><?php echo $data['idpemasok'] ?></td>
    <td><?php echo $data['namapemasok'] ?></td>
    <td><?php echo $data['alamat'] ?></td>
    <td><?php echo $data['nohp'] ?></td>
    <td>

    <a href="beranda.php?p=formeditpemasok&idpemasok=<?php echo $data['idpemasok'] ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
    <a href="beranda.php?p=proseshapuspemasok&idpemasok=<?php echo $data['idpemasok'] ?>" onclick="pesan = confirm('Yakin data di hapus?');

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