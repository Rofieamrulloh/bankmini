    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Data Informasi <small><?php echo $DATA_INFO['nama_organisasi'] ?></small></h1>
          <p>Form Data Informasi</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Data Informasi</h3>
            <button style="margin-bottom:15px" class="btn-primary"><a style="color:white; text-decoration:none" href="?page=info&aksi=laporan">Laporan</a></button>
            <div class="tile-body">
              <?php 
              if (@$_POST ['Edit_info']) {
                include "proses_edit.php";
              }
              
              
              ?>
              <form id="quickfrom" method="post">
                <div class="form-group">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" name="Nama_Organisasi" placeholder="Enter full name" id="Nama_Organisasi" value=" <?php echo $DATA_INFO['nama_organisasi']?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="text" name="Email" placeholder="Enter email address" id="Email_Organisasi"  value=" <?php echo $DATA_INFO['email_organisasi']?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Alamat</label>
                  <input class="form-control" rows="4" name="Alamat" placeholder="Enter your address" id="Alamat"  value=" <?php echo $DATA_INFO['alamat_organisasi']?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Kelurahan</label>
                  <input class="form-control" name="Kelurahan" type="text" id=""  value=" <?php echo $DATA_INFO['kel_organisasi']?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Kecamatan</label>
                  <input class="form-control" name="Kecamatan" type="text" id=""  value=" <?php echo $DATA_INFO['kec_organisasi']?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Kabupaten</label>
                  <input class="form-control" name="Kabupaten" type="text" id=""  value=" <?php echo $DATA_INFO['kab_organisasi']?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Provinsi</label>
                  <input class="form-control" name="Provinsi" type="text" id=""  value=" <?php echo $DATA_INFO['prov_organisasi']?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Kode Pos</label>
                  <input class="form-control" name="Kodepos" type="text" id=""  value=" <?php echo $DATA_INFO['kodepos_organisasi']?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Telepon</label>
                  <input class="form-control" name="Telepon" type="text" id="Telepon"  value=" <?php echo $DATA_INFO['telp_organisasi']?>">
                </div>
                <div class="form-group">
                <label class="control-label">Pimpinan</label>
                  <input class="form-control" name="Pimpinan" type="text" id="Pimpinan"  value=" <?php echo $DATA_INFO['pimpinan']?>">
                </div>
                  <div class="form-group">
                  <label class="control-label">Bendahara</label>
                  <input class="form-control" name="Bendahara" type="text" id="Bendahara"  value=" <?php echo $DATA_INFO['bendahara']?>">
                  </div>
                  <div class="form-group">
                  <input class="btn btn-primary" type="submit" name="Edit_info" value="Ubah Data"> 
                </div>
                </form>
            </div>
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