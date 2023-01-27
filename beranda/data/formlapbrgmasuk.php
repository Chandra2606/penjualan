<div class="row">
 <div class="col-lg-12">
 <div class="panel panel-default">
 <div class="panel-heading">
 Laporan Data Barang Masuk Per Bulan
 </div>


 <div class="panel-body">
 <div class="row">
 <div class="col-lg-11">
 <form role="form" method="POST" action="data/cetaklapbrgmasuk.php" name="brgmasuk" id ="finput">
 <div class="box-body">
 <div class="form-group">
 <label class="col-sm-1 control-label">TGL AWAL</label>
 <div class="col-sm-2">
 <input type="date" name="tglawal" class="form-control" required>
 </div>

 <div class="form-group">
 <label class="col-sm-1 control-label">TGL AKHIR</label>
 <div class="col-sm-2">
 <input type="date" name="tglakhir" class="form-control" required>
 </div>
 </div>

 

<div class="col-sm-2">
 <button type="submit" class="btn btndefault" name="cetak">CETAK</button>
 <a href="beranda.php" class="btn btn-default">BATAL</a></button>
 </div>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
</div>
<script>
 function print_d(){
 window.open("data/lap_brg_masuk.php","_blank");
 }
 </script>
