<?php
$ID = $_GET['id'];
$query = "SELECT SUM(nominal) AS total_nominal_sts FROM tbl_transaksi WHERE kode_transaksi LIKE 'STS%' AND id_nasabah = '$ID' AND status_transaksi != 3";
$result = mysqli_query($KONEKSI, $query);
$data1 = mysqli_fetch_assoc($result);

$query = "SELECT SUM(nominal) AS total_nominal_pts FROM tbl_transaksi WHERE kode_transaksi LIKE 'PTS%' AND id_nasabah = '$ID' AND status_transaksi != 3";
$result = mysqli_query($KONEKSI, $query);
$data2 = mysqli_fetch_assoc($result);

$TOTAL = $data1["total_nominal_sts"] - $data2["total_nominal_pts"];
$SQL_EDIT = "SELECT * FROM tbl_nasabah WHERE id_nasabah='$ID'" or die ("Gagal melakukan Query!!!".mysqli_error());
$HASILEDIT = mysqli_query($KONEKSI,$SQL_EDIT);

while ($ROW=mysqli_fetch_array($HASILEDIT)) {
    $NAMA = $ROW['nama_nasabah'];
    $JENKEL= $ROW['jenkel'];
    $TEMPAT= $ROW['tempat_lahir'];
    $TANGGAL= $ROW['tgl_lahir'];
    $ALAMAT= $ROW['alamat_nasabah'];
    $TELP= $ROW['telp_nasabah'];
    $PENGENAL= $ROW['jenis_pengenal'];
    $NO= $ROW['no_pengenal'];
    $KELAS= $ROW['id_kelas'];
    
}
?>
<main class="app-content">
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Form Edit Data</h3>
            <div class="tile-body">
              <?php 
              if (@$_POST ['Edit']) {
                include "proses_edit.php";
              }

              date_default_timezone_set('Asia/Jakarta');
              ?>
              <form id="quickfrom" method="post" enctypr="multipart">
              <div class="container-fluid">
                  <div class="row">
                <div class="form-group col-md-6">
                  <label class="control-label">ID Nasabah</label>
                  <input class="form-control" type="text" name="Id_nasabah"  value="<?php echo $ID?>" readonly>
                </div>    
                <div class="form-group col-md-6">
                     <label class="control-label">Nama Nasabah</label>
                  <input class="form-control" type="text" name="Nama_nasabah" id="Nama_nasabah" value="<?php  echo $NAMA; ?>" readonly>
               </div>
                <div class="form-group col-md-4">
                    <label for="Jenkel">Jenis Kelamin </label>
                    <select class="form-control" id="Jenkel" name="Jenkel" readonly>
                    <option name="Jenkel" value="L" <?php if ($JENKEL =='L') {echo 'selected=\"selected"' ; }?> > Laki-Laki </option>
                    <option name="Jenkel" value="P" <?php if ($JENKEL =='P') {echo 'selected=\"selected"' ; }?> > Perempuan</option>
                    </select>
                 </div>
                 <div class="form-group col-md-4">
                  <label class="control-label">Tempat Lahir</label>
                  <input class="form-control" type="Text" name="Tempat" placeholder="" id="Tempat" value="<?php  echo $TEMPAT; ?>" readonly>
                </div>

                <div class="form-group col-md-4">
                  <label class="control-label">Tanggal Lahir</label>
                  <input class="form-control" type="date" name="Tanggal" placeholder="" id="Tanggal" value="<?php  echo $TANGGAL; ?>" readonly>
                </div>

                <div class="form-group col-md-12">
                  <label class="control-label">Alamat Nasabah</label>
                  <input class="form-control" type="text" name="Alamat" placeholder="" id="Alamat" value="<?php  echo $ALAMAT; ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">No Telp Nasabah</label>
                  <input class="form-control" type="text" name="Telepon" placeholder="" id="Telepon" value="<?php  echo $TELP; ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                  <label for="Pengenal">Jenis Pengenal</label>
                    <select class="form-control" id="Pengenal" name="Pengenal" readonly>
                    <option name="Pengenal" value="1"<?php if ( $PENGENAL=='1'){echo "selected=\"selected\"" ; } ?>>KTP</option>
                    <option name="Pengenal" value="2"<?php if ( $PENGENAL=='2'){echo "selected=\"selected\"" ; } ?>>SIM</option>
                    <option name="Pengenal" value="3"<?php if ( $PENGENAL=='3'){echo "selected=\"selected\"" ; } ?>>Kartu Pelajar</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">No Pengenal</label>
                  <input class="form-control" type="text" name="No_Pengenal" placeholder="" id="No_Pengenal" value="<?php  echo $NO; ?>" readonly>
                </div>
              
                <div class="form-group col-md-6">
                 <label for="kelas">Kelas</label>
                 <select class="form-control" name="Kelas" id="kelas" readonly>
                  <option name="Kelas" value="">  </option>
                  <?php
                  $query = "SELECT * FROM tbl_kelas";
                  $result = mysqli_query($KONEKSI, $query);
                  while ($ROW = @mysqli_fetch_array($result)) {
                    $selected = $ROW['id_kelas'] == $KELAS ? 'selected="selected"':'';
                    echo '<option value="'.$ROW['id_kelas'].'" '.$selected.'>'.$ROW['nama_kelas']. '</option>';
                  };
                  ?>
                  
                 </select>
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label">Saldo</label>
                  <input type="text" name="" class="form-control" id="" value="<?php echo rupiah("$TOTAL");?>" readonly>
                </div>
             </div>  
                </form>
    
    </main>
    
    <!-- Essential javascripts for application to work-->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../assets/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>