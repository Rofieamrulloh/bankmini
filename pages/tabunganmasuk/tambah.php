<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Tambah Data Pengguna</h1>
          <p>Form Tambah Data Pengguna</p>
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
            <h3 class="tile-title">Form Tambah Data</h3>
            <div class="tile-body">
              <?php 
              if (@$_POST ['Tambah']) {
                include "proses_tambah.php";
              }

              date_default_timezone_set('Asia/Jakarta');
              ?>
              <form id="quickfrom" method="post">
              <div class="container-fluid">
                <div class="row"> 
              <div class="form-group col-md-6">
                  <label for="Nasabah">Nama Nasabah</label>
                  <select class="form-control" name="Nasabah" id="Nasabah">
                    <option value="">>>> PILIH NASABAH <<<</option>
                    <?php
                   $DATA = mysqli_query($KONEKSI,"SELECT tbl_nasabah.*,tbl_kelas. * FROM tbl_nasabah JOIN tbl_kelas ON tbl_kelas.id_kelas = tbl_nasabah.id_kelas") or die (mysqli_error($KONEKSI));
                   $NO=1;
                   while ($TRANSAKSI = @mysqli_fetch_array($DATA)) {       
                    echo '<option value="'.$TRANSAKSI['id_nasabah'].'">'.$TRANSAKSI['tingkat'].'-'.$TRANSAKSI['nama_nasabah'].'</option>';                   
                  }
                  ?>
                  </select>
                  </div>
                  <div class="form-group col-md-4">
                  <label class="control-label col-md-4"></label>
                  <input class="form-control" type="hidden" name="Tanggal"  value="<?php echo date ("Y-m-d");?>" readonly>
                  </div>   
                  </div>
                  </div>
                  
                  <div class="form-group col-md-7">
                  <label class="control-label">Kode Transaksi</label>
                  <input class="form-control" type="text" name="Code"  value="<?php echo autonumber ("tbl_transaksi","kode_transaksi",7,"STS","STS");?>" readonly>
                  </div>    
                  <div class="form-group col-md-8">
                  <label for="saldo">Jumlah Setoran</label>
                  <input class="form-control" type="text" name="Nominal" id="Nominal" placeholder="Jumlah Setoran">   
                  
                  </div> 
                </div>
                <div class="form-group col-md">
                  <input class="btn btn-primary" type="submit" name="Tambah" value="Tambah">
                  <input class="btn btn-danger" type="reset" name="Hapus" value="Reset">
                  <a class="btn btn-warning" href="index.php?page=pengguna">Cancel</a>
                  </div>
             </div>  
             
                </form>
    
    </main>