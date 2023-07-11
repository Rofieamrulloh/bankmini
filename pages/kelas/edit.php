<?php
$ID = $_GET['id'];
$SQL_EDIT = "SELECT * FROM tbl_kelas WHERE id_kelas='$ID'" or die ("Gagal melakukan Query!!!".mysqli_error());
$HASILEDIT = mysqli_query($KONEKSI,$SQL_EDIT);

while ($ROW=mysqli_fetch_array($HASILEDIT)) {
    $TINGKAT = $ROW['tingkat'];
    $NAMA_KELAS= $ROW['nama_kelas'];
}


?>

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Edit Data</h1>
          <p>Form Edit Data</p>
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
              
              ?>
              <form id="quickfrom" method="post">
                <div class="form-group">
                  <label class="control-label">ID Kelas</label>
                  <input class="form-control" type="text" name="Id_kelas" value="<?php echo $ID;?>" readonly>
                </div>
                <div class="form-group">
                    <label for="Tingkat">Tingkat</label>
                    <select class="form-control" id="Tingkat" name="Tingkat">
                      <option name="Tingkat" value="7" <?php if ($TINGKAT=="7") { echo "selected=\"selected\"";}?>>Tingkat 7</option>
                      <option name="Tingkat" value="8" <?php if ($TINGKAT=="8") { echo "selected=\"selected\"";}?>>Tingkat 8</option>
                      <option name="Tingkat" value="9" <?php if ($TINGKAT=="9") { echo "selected=\"selected\"";}?> >Tingkat 9</option>
                      <option name="Tingkat" value="10" <?php if ($TINGKAT=="10") { echo "selected=\"selected\"";}?> >Tingkat 10</option>
                      <option name="Tingkat" value="11" <?php if ($TINGKAT=="11") { echo "selected=\"selected\"";}?> >Tingkat 11</option>
                      <option name="Tingkat" value="12" <?php if ($TINGKAT=="12") { echo "selected=\"selected\"";}?> >Tingkat 12</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="control-label">Nama Kelas</label>
                  <input class="form-control" type="text" name="Nama_kelas" value="<?php echo $NAMA_KELAS;?>">
                  </div>
                  <div class="form-group align-self-end">
                  <input class="btn btn-primary" type="submit" name="Edit" value="Edit">
                  <input class="btn btn-danger" type="reset" name="Hapus" value="Reset">
                  <a class="btn btn-warning" href="index.php?page=kelas">Cancel</a>
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