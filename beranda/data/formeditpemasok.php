<?php
    include "../koneksi.php";
?>
<?php
    $kdpemasok=$_GET['idpemasok'];
    $edit="select * from pemasok where idpemasok='$kdpemasok' ";
    $hasil=mysql_query ($edit);
    $data=mysql_fetch_array ($hasil);
?>

<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
    <div class="box-header with-border">
    <h3 class="box-title">EDIT DATA pemasok</h3>
 </div>
 <!-- /.box-header -->

 <!-- form start -->
 <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="beranda.php?p=proseseditpemasok">
    <div class="box-body">
    <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
        <div class="form-group">
        <label class="col-sm-3 control-label">Id pemasok</label>
        <div class="col-sm-6">
        <input type="text" name="id" value="<?php echo $data['idpemasok']?>" class="form-control">
        </div>
        </div>

        <div class="form-group">
        <label class="col-sm-3 control-label" align="left">Nama pemasok</label>
        <div class="col-sm-6">
        <input type="text" name="nama" value="<?php echo $data['namapemasok']?>" class="form-control" >
        </div>
        </div>

        <div class="form-group">
        <label class="col-sm-3 control-label" align="left">Alamat</label>
        <div class="col-sm-6">
        <input type="text" name="alamat" value="<?php echo $data['alamat']?>" class="form-control" >
        </div>
        </div>

        <div class="form-group">
        <label class="col-sm-3 control-label">NoHp</label>
        <div class="col-sm-6">
        <input type="text" name="nohp" value="<?php echo $data['nohp']?>" class="form-control" >
        </div>
        </div> 

        </table>
        </div>
        <!-- footer modal -->
        <div class="box-footer">
        <button type="submit" class="btn btn-primary btnSimpan" name="edit" >SIMPAN</button>

        <a href="beranda.php?p=datapemasok" class="btn btn-danger btn-close"><span class="glyphicon glyphiconcancel"></span>Batal</a>
        </div>
    </form>
    </div>