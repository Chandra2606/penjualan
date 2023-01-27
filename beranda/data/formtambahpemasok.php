<?php
    include '../koneksi.php';
?>
<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
    <div class="box-header with-border">
    <h3 class="box-title">TAMBAH DATA PEMASOK</h3>
 </div>
 <!-- /.box-header -->
 <!-- form start -->

 <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="beranda.php?p=prosestambahpemasok">
    <div class="box-body">
    <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
        <div class="form-group">
        <label class="col-sm-3 control-label">Id pemasok</label>
        <div class="col-sm-6">
        <input type="text" name="id" class="form-control">
        </div>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label" align="left">Nama pemasok</label>
        <div class="col-sm-6">
        <input type="text" name="nama" class="form-control" >
        </div>
        </div>
        
        <div class="form-group">
        <label class="col-sm-3 control-label" align="left">Alamat</label>
        <div class="col-sm-6">
        <input type="text" name="alamat" class="form-control" >
        </div>
        </div>

        <div class="form-group">
        <label class="col-sm-3 control-label">No Hp</label>
        <div class="col-sm-6">
        <input type="text" name="nohp" class="form-control" >
        </div>
        </div>
    </table>

    <div class="box-footer">
    <button type="submit" class="btn btn-primary btnSimpan" name="SIMPAN">SIMPAN</button>

    <a href="beranda.php?p=datapemasok" class="btn btn-danger btn-close"><span class="glyphicon glyphicon-cancel"></span> Batal</a>
 </div>
 </form>
 </div>
