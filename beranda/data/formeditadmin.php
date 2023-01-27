<?php
    include "../koneksi.php";
?>
<?php
    $kdadmin=$_GET['idadmin'];
    $edit="select * from admin where idadmin='$kdadmin' ";
    $hasil=mysql_query ($edit);
    $data=mysql_fetch_array ($hasil);
?>

<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
    <div class="box-header with-border">
    <h3 class="box-title">EDIT DATA ADMIN</h3>
 </div>
 <!-- /.box-header -->

 <!-- form start -->
 <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="beranda.php?p=proseseditadmin">
    <div class="box-body">
    <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
        <div class="form-group">
        <label class="col-sm-3 control-label">Id admin</label>
        <div class="col-sm-6">
        <input type="text" name="id" value="<?php echo $data['idadmin']?>" class="form-control">
        </div>
        </div>

        <div class="form-group">
        <label class="col-sm-3 control-label" align="left">Nama admin</label>
        <div class="col-sm-6">
        <input type="text" name="nama" value="<?php echo $data['namalengkap']?>" class="form-control" >
        </div>
        </div>

        <div class="form-group">
        <label class="col-sm-3 control-label" align="left">Alamat</label>
        <div class="col-sm-6">
        <input type="text" name="alamat" value="<?php echo $data['pass']?>" class="form-control" >
        </div>
        </div>

        <div class="form-group">
        <label class="col-sm-3 control-label">NoHp</label>
        <div class="col-sm-6">
        <input type="text" name="nohp" value="<?php echo $data['level']?>" class="form-control" >
        </div>
        </div> 

        </table>
        </div>
        <!-- footer modal -->
        <div class="box-footer">
        <button type="submit" class="btn btn-primary btnSimpan" name="edit" >SIMPAN</button>

        <a href="beranda.php?p=dataadmin" class="btn btn-danger btn-close"><span class="glyphicon glyphiconcancel"></span>Batal</a>
        </div>
    </form>
    </div>