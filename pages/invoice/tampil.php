<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-text-o"></i> Invoice</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="text-center">
              <?php include 'kop_laporan.php'; ?>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                      <th>No</th>
                      <th>ID Nasabah</th>
                      <th>Nama Nasabah</th>
                      <th>Jenis Kelamin</th>
                      <th>Tempat, Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php
                   $DATA = mysqli_query($KONEKSI,"SELECT * FROM tbl_nasabah ORDER BY id_nasabah ASC");
                   $NO=1;
                   while ($NASABAH = @mysqli_fetch_array($DATA)) {       
                  ?>
                  <tr>
                    <td><?php echo $NO; ?></td>
                    <td><?php echo $NASABAH['id_nasabah']; ?></td>
                    <td><?php echo $NASABAH['nama_nasabah']; ?></td>
                    <td><?php if ($NASABAH['jenkel'] == 'L') {
                      echo "Laki-Laki";} else {
                        echo "Perempuan";
                      } ?></td>
                    <td><?php echo $NASABAH['tempat_lahir']; echo " "; echo $NASABAH['tgl_lahir']; ?></td>
                    <td><?php echo $NASABAH['alamat_nasabah']; ?></td>
                    <td><?php echo $NASABAH['telp_nasabah']; ?></td>
                    
                  </tr>
                  <?php
                    $NO++;
                   };
                   ?>
                  <tr>
                </tbody>
                  </table>
                </div>
              </div>
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><button class="btn btn-primary" onclick="window.print();" ><i class="fa fa-print"></i> Print</button></div>
              </div>
            </section>
          </div>
        </div>
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
  </body>