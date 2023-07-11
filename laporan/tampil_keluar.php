<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-text-o"></i> Invoice</h1>
          <p>A Printable Invoice Format</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Invoice <?php echo $DATA_INFO['nama_organisasi'] ?></a></li>
        </ul>
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
                    <th>No</th>
                    <th>ID Nasabah</th>
                    <th>Nama Nasabah</th>
                    <th>Transaksi</th>
                    <th>Kode Transaksi</th>
                    <th>Jumlah Tabungan</th>
		                <th>ID User</th>
                    <th>Tanggal Transaksi</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                   $JENIS = 2;
                   $STATUS = 1;
                   $STATUS2 = 2;
                   $DATA = mysqli_query($KONEKSI,"SELECT tbl_transaksi.*,tbl_nasabah. * FROM tbl_transaksi JOIN tbl_nasabah ON tbl_nasabah.id_nasabah = tbl_transaksi.id_nasabah WHERE jenis_transaksi='$JENIS' AND status_transaksi='$STATUS' OR  status_transaksi= '$STATUS2' ORDER BY tbl_transaksi.id_transaksi  ASC");
                   $NO=1;
                   while ($TRANSAKSI = @mysqli_fetch_array($DATA)) {       
                  ?>                  <tr>
                    <td><?php echo $NO; ?></td>
                    <td><?php echo $TRANSAKSI['id_nasabah']; ?></td>
                    <td><?php echo $TRANSAKSI['nama_nasabah']; ?></td>
                    <td><?php if ($TRANSAKSI['jenis_transaksi']=='1'){
                      echo "Tabungan";
                    }else {
                      echo "Penarikan";
                    }
                    ?></td>
                    <td><?php echo $TRANSAKSI['kode_transaksi'];?></td>
                    <?php $number = $TRANSAKSI['nominal']?>
                    <td><?php echo rupiah("$number"); ?></td>
		                <td><?php echo $TRANSAKSI['id_user']; ?></td>
                    <td><?php echo $TRANSAKSI['tgl_transaksi']; ?></td>
                    <td><?php if ($TRANSAKSI['status_transaksi']=='1'){
			                echo "Insert";
			                }else if ($TRANSAKSI['status_transaksi']=='2'){echo 'Edit';
			                }else{echo 'Delete';
			                }
		                 ?></td>
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
    <script>
      window.addEventListener("load", window.print());
    </script>
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