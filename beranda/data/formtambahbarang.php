<?php
    include '../koneksi.php';
?>
<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
    <div class="box-header with-border">
    <h3 class="box-title">TAMBAH DATA BARANG</h3>
 </div>
 <!-- /.box-header -->
 <!-- form start -->

 <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="beranda.php?p=prosestambahbarang">
    <div class="box-body">
    <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" >
        <div class="form-group">
        <label class="col-sm-3 control-label">Kode Barang</label>
        <div class="col-sm-6">
        <input type="text" name="kdbrg" class="form-control">
        </div>
        </div>
        <div class="form-group">
        <label class="col-sm-3 control-label" align="left">Nama Barang</label>
        <div class="col-sm-6">
        <input type="text" name="namabrg" class="form-control" >
        </div>
        </div>
        
        <div class="form-group">
        <label class="col-sm-3 control-label" align="left">Satuan</label>
        <div class="col-sm-6">
        <input type="text" name="satuan" class="form-control" >
        </div>
        </div>

        <div class="form-group">
        <label class="col-sm-3 control-label">Harga Barang</label>
        <div class="col-sm-6">
        <input type="text" name="harga" class="form-control" >
        </div>
        </div>

        <div class="form-group">
        <label class="col-sm-3 control-label">Stok Barang</label>
        <div class="col-sm-6">
        <input type="text" name="stok" class="form-control" >
        </div>
        </div>
    </table>

    <div class="box-footer">
    <button type="submit" class="btn btn-primary btnSimpan" name="SIMPAN">SIMPAN</button>

    <a href="beranda.php?p=databarang" class="btn btn-danger btn-close"><span class="glyphicon glyphicon-cancel"></span> Batal</a>
 </div>
 </form>
 </div>
