<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Pengguna</h1>
          <p>Data Informasi Pengguna <?php echo $DATA_INFO['nama_organisasi'] ?> </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <button style="margin-bottom:15px" class="btn-primary"><a style="color:white; text-decoration:none;" href="?page=pengguna&aksi=tambah">Tambah Data</a></button>
            <button style="margin-left:15px" class="btn-primary"><a style="color:white; text-decoration:none;" href="?page=pengguna&aksi=laporan">Laporan</a></button>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Photo</th>
                    <th>User Level</th>
                    <th>aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                   $DATA = mysqli_query($KONEKSI,"SELECT * FROM tbl_user ORDER BY nama_user ASC");
                   $NO=1;
                   while ($PENGGUNA = @mysqli_fetch_array($DATA)) {       
                  ?>
                  <tr>
                    <td><?php echo $NO; ?></td>
                    <td><?php echo $PENGGUNA['nama_user']; ?></td>
                    <td><img src="../images/pengguna/<?php echo $PENGGUNA['photo_user']; ?>" alt="Foto Pengguna" width="100px"></td>
                    <td><?php echo $PENGGUNA['id_userlevel']; ?></td>
                    <td>
                    <a href="index.php?page=pengguna&aksi=edit&id=<?php echo $PENGGUNA['id_user']; ?>">Edit</a> |
                    <a href="index.php?page=pengguna&aksi=hapus&id=<?php echo $PENGGUNA['id_user']; ?>">Hapus</a>
                    </td>
                  </tr>
                  <?php
                    $NO++;
                   };
                   ?>
                  <tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Pengguna</th>
                    <th>Photo</th>
                    <th>User Level</th>
                    <th>aksi</th>
                  </tr>
                </tfoot>
              </table>
            </div>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="../assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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
