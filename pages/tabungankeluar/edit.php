<?php
$ID = $_GET['id'];
$SQL_EDIT = "SELECT tbl_transaksi.*,tbl_nasabah. * FROM tbl_transaksi JOIN tbl_nasabah ON tbl_nasabah.id_nasabah = tbl_transaksi.id_nasabah WHERE id_transaksi = '$ID'" or die ("Gagal melakukan Query!!!".mysqli_error());
$HASILEDIT = mysqli_query($KONEKSI,$SQL_EDIT);

    while ($ROW=mysqli_fetch_array($HASILEDIT)) {
    $ID_TRANSAKSI = $ROW ['id_transaksi'];
    $ID_NASABAH = $ROW ['id_nasabah'];
    $KODE = $ROW ['kode_transaksi'];
    $NOMINAL = $ROW ['nominal'];
    }
  ?>


<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Edit Data Pengguna</h1>

          <p>From Edit Data Pengguna</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
        </ul>
      </div>
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
              <form id="quickfrom" method="post" enctype="multipart">
                <div class="container-fluid">
                  <div class="row">
              <div class="form-group col-md-2">
                  <label class="control-label col-md-6"></label>
                  <input class="form-control" type="hidden" name="Tanggal"  value="<?php echo date ("Y-m-d");?>" readonly>
                </div>  
              <div class="form-group col-md-2">
                  <label class="control-label col-md-6"></label>
                  <input class="form-control" type="hidden" name="IdNasabah"  value="<?php echo $ID_NASABAH?>" readonly>
                </div>  
              <!-- <div class="form-group col-md-7">
                  <label for="Nasabah">Nama Nasabah</label>
                  <select class="form-control" name="Nasabah" id="Nasabah">
                    <option value="">>>>>Pilih Nasababah<<<<</option>
                    <?php
                //    $DATA = mysqli_query($KONEKSI,"SELECT tbl_nasabah.*,tbl_kelas. * FROM tbl_nasabah JOIN tbl_kelas ON tbl_kelas.id_kelas = tbl_nasabah.id_kelas") or die (mysqli_error($KONEKSI));
                //    $NO=1;
                //   while ($TRANSAKSI = @mysqli_fetch_array($DATA)) {       
                //   echo '<option value="'.$TRANSAKSI['id_nasabah'].'">'.$TRANSAKSI['id_kelas'].'-'.$TRANSAKSI['nama_nasabah'].'</option>';                   
                // }
                // ?>
                </select>
              </div>   -->
               
                <div class="form-group col-md-7">
                  <label class="control-label col-md-6"></label>
                  <input class="form-control" type="hidden" name="IdTransaksi"  value="<?php echo $ID_TRANSAKSI?>" readonly>
                </div> 

                  <div class="form-group col-md-7">
                  <label for="kode">Kode Transaksi</label>
                  <input class="form-control" type="text" name="Code"  value="<?php echo $KODE?>" readonly>
                </div>    
                <div class="form-group col-md-8">
                  <label for="saldo   ">Jumlah Setoran</label>
                  <input class="form-control" type="number" name="Saldo" id="Saldo" placeholder="" value="<?php echo $NOMINAL?>">    
                </div>
                 <div class="form-group align-self-end col-md-7">
                  <div class="form-group align-self-end">
                  <input class="btn btn-primary" type="submit" name="Edit" value="Edit">
                  <input class="btn btn-danger" type="reset" name="Hapus" value="Reset">
                  <a class="btn btn-warning" href="index.php?page=tabunganmasuk">Cancel</a>
                  </div>
                  </div>
              </div>
             </div>  
                </form>
    
    </main>
    