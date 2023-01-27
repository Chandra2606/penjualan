<script>
    $(document).ready( function () {
    $('#dataadmin').DataTable();
    } );
</script>

<script>
    $(function () {
    $('#dataadmin').DataTable()
    $('#dataadmin').DataTable({
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
    <h3 class="box-title">Data admin</h3>
 </div>
 <!-- /.box-header -->
    <div class="box-body">
        <table id="judul" class="table table-bordered table-striped">
        <thead>
 <?php
    include '../koneksi.php';
    $sql_view = mysql_query("SELECT * FROM admin ORDER BY idadmin ASC");
    $total = mysql_num_rows($sql_view);
 ?>
 <a href="beranda.php?p=formtambahadmin" class="btn btn-success btn-sm btnTambah"><i class="glyphicon glyphicon-plus-sign"></i> Tambah</a>
    <br /><br />
    <table id="dataadmin" name="dataadmin" class="table table-bordered table-hover">
 <thead>
    <tr>
        <th>No</th>
        <th>Id admin</th>
        <th>Nama Lengkap</th>
        <th>Pasword</th>
        <th>level</th>
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
    <td><?php echo $data['idadmin'] ?></td>
    <td><?php echo $data['namalengkap'] ?></td>
    <td><?php echo $data['pass'] ?></td>
    <td><?php echo $data['level'] ?></td>
    <td>

    <a href="beranda.php?p=formeditadmin&idadmin=<?php echo $data['idadmin'] ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
    <a href="beranda.php?p=proseshapusadmin&idadmin=<?php echo $data['idadmin'] ?>" onclick="pesan = confirm('Yakin data di hapus?');

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