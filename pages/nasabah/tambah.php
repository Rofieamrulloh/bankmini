<main class="app-content">
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
              <form id="quickfrom" method="post" enctypr="multipart">
              <div class="container-fluid">
                  <div class="row">
                <div class="form-group col-md-6">
                  <label>ID Nasabah</label>
                  <input class="form-control" type="text" name="Id_nasabah"  value="<?php echo autonumber ("tbl_nasabah","id_nasabah",3,"");?>" readonly>
                </div>    
                <div class="form-group col-md-6">
                     <label>Nama Nasabah</label>
                  <input class="form-control" type="text" name="Nama_nasabah">
               </div>
                <div class="form-group col-md-4">
                    <label for="Jenkel">Jenis Kelamin </label>
                    <select class="form-control" id="Jenkel" name="Jenkel">
                      <option name="Jenkel" value="P">Perempuan</option>
                      <option name="Jenkel" value="L">Laki-Laki</option>
                    </select>
                 </div>
                 <div class="form-group col-md-4">
                  <label class="control-label">Tempat Lahir</label>
                  <input class="form-control" type="Text" name="Tempat" placeholder="" id="Tempat">
                </div>

                <div class="form-group col-md-4">
                  <label class="control-label">Tanggal Lahir</label>
                  <input class="form-control" type="date" name="Tanggal" placeholder="" id="Tanggal">
                </div>

                <div class="form-group col-md-12">
                  <label class="control-label">Alamat Nasabah</label>
                  <input class="form-control" type="text" name="Alamat" placeholder="" id="Alamat">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">No Nasabah</label>
                  <input class="form-control" type="text" name="Telepon" placeholder="" id="Telepon">
                </div>
                <div class="form-group col-md-6">
                  <label for="Pengenal">Jenis Pengenal</label>
                    <select class="form-control" id="Pengenal" name="Pengenal" style="width: 100%;">
                      <option name="Pengenal" value="1">KTP</option>
                      <option name="Pengenal" value="2">SIM</option>
                      <option name="Pengenal" value="3" selected="selected">Kartu Pelajar</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">No Pengenal</label>
                  <input class="form-control" type="text" name="No_Pengenal" placeholder="" id="No_Pengenal">
                </div>
              
                <div class="form-group col-md-6">
                  <label for="Kelas">Kelas</label>
                  <select class="form-control" name="Kelas" id="Kelas">
                    <option value="">Kelas</option>
                  <?php
                   $DATA = mysqli_query($KONEKSI,"SELECT * FROM tbl_kelas");
                   $NO=1;
                   while ($NASABAH = @mysqli_fetch_array($DATA)) {
                     echo '<option value='.$NASABAH['id_kelas'].'>'.$NASABAH['id_kelas'].'-'.$NASABAH['nama_kelas'].'</option>'       
                  ?>
                  <?php }?>
                  </select>
                </div>
                  <div class="form-group col-md-7">
                  <input class="btn btn-primary" type="submit" name="Tambah" value="Tambah">
                  <input class="btn btn-danger" type="reset" name="Hapus" value="Reset">
                  <a class="btn btn-warning" href="index.php?page=nasabah">Cancel</a>
                  </div>
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