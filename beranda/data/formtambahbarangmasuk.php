
<script>
    
    $(document).ready(function (e) {
    $('#databarang').DataTable();
    $('#datapemasok').DataTable();
    })
 
</script>
<script language="javascript">
function hitung(){
var harga=parseInt(document.brgmasuk.hrgbrg.value); 
var jumlah=parseInt(document.brgmasuk.jml.value);

var tothrg=harga*jumlah;

document.brgmasuk.subtot.value=tothrg;
}
</script>


<?php

    include "../koneksi.php";

    $today = date("Ymd");
    $query1 = "SELECT max(nofakmasuk) as maxID FROM barangmasuk WHERE nofakmasuk LIKE '$today%'";
    $hasil = mysql_query($query1);
    $data = mysql_fetch_array($hasil);
    $idMax = $data['maxID'];
    $NoUrut = (int) substr($idMax, 8, 4);
    $NoUrut++;
    $NewID = $today .sprintf('%04s', $NoUrut);
?>
    <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
    <div class="box-header with-border">
    <h3 class="box-title">Input Data Barang Masuk</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->

    <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="home.php?p=prosessimpanbantu" name="brgmasuk">
        <div class="box-body">
        <div class="form-group">
        <label class="col-sm-2 control-label">No Faktur</label>
        <div class="col-sm-3">
        <input type="text" name="nofak" class="form-control" value="<?php echo $NewID; ?>" readonly>
        </div>

        <label class="col-sm-2 control-label">Kode Pemasok</label>
        <div class="col-sm-3">
        <input type="text" id="kdpem" name="kdpem" class="form-control"readonly>
        </div>
        <a class="btn btn-success btn-sm btnTambah" data-toggle="modal" data-target="#modalCariPemasok"><i class="glyphicon glyphicon-search"></i></a>
        </div>
        
        <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Masuk</label>
        <div class="col-sm-3">
        <input type="date" name="tglmasuk" class="form-control" required>
        </div>

        <label class="col-sm-2 control-label" align="left">Nama Pemasok</label>
        <div class="col-sm-4">
        <input type="text" id="namapem" name="namapem" class="form-control"readonly>
        </div>
        </div>
        <hr>

        <div class="form-group">
        <label class="col-sm-2 control-label">Kode Barang</label>
        <div class="col-sm-2">
        <input type="text" id="kdbrg" name="kdbrg" class="form-control" readonly >
        </div>
        <div class="col-sm-1">
        <a class="btn btn-success btn-sm btnTambah" data-toggle="modal" data-target="#modalCaribarang"><i class="glyphicon glyphicon-search"></i></a>
        </div>

        <label class="col-sm-2 control-label" align="left">Harga Barang</label>
        <div class="col-sm-2">
        <input type="text" id="hrgbrg" name="hrgbrg" class="form-control" readonly >
        </div>
        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label" align="left">Nama Barang</label>
        <div class="col-sm-3">
        <input type="text" id="namabrg" name="namabrg" class="form-control" readonly >
        </div>

        <label class="col-sm-2 control-label" align="left">Jumlah</label>
        <div class="col-sm-1">
        <input type="text" name="jml" class="form-control" onchange="hitung()">
        </div>
        </div>

        <div class="form-group">
        <label class="col-sm-2 control-label">Satuan</label>
        <div class="col-sm-2">
        <input type="text" id="satuan" name="satuan" class="form-control" readonly>
        </div>
        
        <label class="col-sm-3 control-label" align="left">Sub Total</label>
        <div class="col-sm-2">
        <input type="text" name="subtotal" class="form-control" readonly>
        </div>
        <button type="submit" class="btn btn-primary btnSimpan" name="ok" > <span class="glyphicon glyphicon-floppy-saved"></span> Oke</button>
        </div>
        </div>

        <!-- footer modal -->
        <div class="box-footer">
        </div>
        </form>
        <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="home.php?p=prosestambahbrgmasuk" name="brgmasuk">

        <?php include '../koneksi.php';
            $result = mysql_query("select idbrg,namabrg,satuan,hrg,qty,(hrg*qty)as subtotal from bantu join barang on idbrg=kdbarang");
            $total = mysql_num_rows($result);
        ?>

        <div class="tampil">
        <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Daftar Barang Masuk</h3>
        </div>

        <div class="box-body">
        <table id="datajadwal" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Sob Total</th>
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
        <td><?php echo $row['idbrg'] ?></td>
        <td><?php echo $row['namabrg'] ?></td>
        <td><?php echo $row['satuanbrg'] ?><br />
        <td><?php echo $row['hrg'] ?></td>
        <td><?php echo $row['qty'] ?>
        <td><?php echo $row['subtotal'] ?></td>
        <td>
        <a href="home.php?p=hapustem&idbrg=<?php echo $row['idbrg'] ?>" onclick="pesan = confirm('Yakin data di hapus?'); if (pesan) return true; else return false;" class="btn btn-danger btn- sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

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

    <button type="submit" class="btn btn-primary btnSimpan" name="simpan" > <span class="glyphicon glyphicon-floppy-saved"></span> Simpan</button>
    <a href="home.php?p=databarangmasuk" class="btn btn-danger btn-close"><span class="glyphicon glyphicon-remove-circle"></span> Batal</a>
    </div>
    </form>
    </div>
    </div>

    <!-- Modal Cari Barang-->
    <div id="modalCaribarang" class="modal modal fade" role="dialog">
    <div class="modal-dialog">
        
    <!-- konten modal-->
    <div class="modal-content">

    <!-- heading modal -->
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Cari Data Barang</h4>
    </div>
    <!-- body modal -->
<div class="modal-body">

<?php
    include 'koneksi.php';
    $result = mysql_query("select kdbarang, namabrg,satuan,harga from barang");
?>

<table id="databarang" class="table table-bordered table-striped">
<thead>
<tr>
    <th>No</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Satuan</th>
    <th>Harga</th>
    <th>Pilih</th>
</tr>
</thead>
<tbody>

<?php

    $nomor = 1;
    while ($row = mysql_fetch_assoc($result)) {
        
?>
    <tr>
        <td><?php echo $nomor ?></td>
        <td><?php echo $row['kdbarang'] ?></td>
        <td><?php echo $row['namabrg'] ?></td>
        <td><?php echo $row['satuan'] ?></td>
        <td><?php echo $row['harga'] ?></td>
        <td>
        <span class="btn btn-info btn-sm" type="button" onClick="document.getElementById('kdbrg').value = '<?php echo $row['kdbarang'] ?>'; 
        document.getElementById('namabrg').value = '<?php echo $row['namabrg'] ?>'; 
        document.getElementById('satuan').value = '<?php echo $row['satuan'] ?>'; 
        document.getElementById('hrgbrg').value = '<?php echo $row['harga'] ?>'; $('#modalCaribarang').modal('hide');"></button><i class="glyphicon glyphicon-ok- sign" aria-hidden="true"></i></span>
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
<!-- footer modal -->
<div class="modal-footer">
</div>
</form>
</div>
</div>


<!-- Modal Cari Pemasok-->
<div id="modalCariPemasok" class="modal modal fade" role="dialog">
<div class="modal-dialog">
<!-- konten modal-->

<div class="modal-content">
<!-- heading modal -->

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Cari Data Pemasok</h4>
</div>

<!-- body modal -->
<div class="modal-body">


<?php
    include 'koneksi.php';
    $result = mysql_query("select idpemasok, namapemasok from pemasok");
    ?>
    <table id="datapemasok" class="table table-bordered table-striped">
    <thead>
    <tr>
    <th>No</th>
    <th>Kode Pemasok</th>
    <th>Nama Pemasok</th>
    <th>Pilih</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    while ($row = mysql_fetch_assoc($result)) {
?>
    <tr>
        <td><?php echo $nomor ?></td>
        <td><?php echo $row['idpemasok'] ?></td>
        <td><?php echo $row['namapemasok'] ?></td>
        <td><span class="btn btn-info btn-sm" type="button" onClick="document.getElementById('kdpem').value = '<?php echo $row['idpemasok'] ?>';
         document.getElementById('namapem').value = '<?php echo $row['namapemasok'] ?>';$('#modalCariPemasok').modal('hide');"></button><i class="glyphicon glyphicon-ok-sign" aria- hidden="true"></i></span>
        </td>
    </tr>

<?php
     $nomor++;
     }
?>
        </tbody>
        </table>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
        </div>
        </form>
        </div>



    

 

        





 


