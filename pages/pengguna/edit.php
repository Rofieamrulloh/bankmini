<?php
$ID = $_GET['id'];
$SQL_EDIT = "SELECT * FROM tbl_user WHERE id_user='$ID'" or die ("Gagal melakukan Query!!!".mysqli_error());
$HASILEDIT = mysqli_query($KONEKSI,$SQL_EDIT);

while ($ROW=mysqli_fetch_array($HASILEDIT)) {
    $NAMA = $ROW['nama_user'];
    $USERNAME= $ROW['username'];
    $PASSWORD= $ROW['password'];
    $TYPE_USER= $ROW['id_userlevel'];
    $PHOTO= $ROW['photo_user'];
}


?>

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Edit Data Pengguna</h1>
          <p>Form Edit Data Pengguna</p>
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
              if (@$_POST ['Edit_photo']) {
                include "proses_edit_photo.php";
              }
              
              ?>
              <form id="quickfrom" method="post">
                <div class="form-group">
                  <label class="control-label">ID Pengguna</label>
                  <input class="form-control" type="text" name="Id_pengguna"  value="<?php echo $ID;?>" readonly>
                </div>
                <div class="form-group">
                  <label class="control-label">Nama Pengguna</label>
                  <input class="form-control" type="Text" name="Nama_pengguna" placeholder="" id="Nama_Pengguna" value="<?php  echo $NAMA; ?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Username</label>
                  <input class="form-control" rows="4" name="Username" placeholder="" id="Username" value="<?php echo $USERNAME;?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Password</label>
                  <input class="form-control" name="Password" type="password" id="Password" value="<?php echo $PASSWORD;?>">
                </div>
                <div class="form-group">
                    <label for="Type_user">Type User</label>
                    <select class="form-control" id="Type_user" name="Type_user">
                      <option name="Type_user" value="Admin" <?php if ($TYPE_USER=="Admin") { echo "selected=\"selected\"";}?>>Admin</option>
                      <option name="Type_user" value="Teller" <?php if ($TYPE_USER=="Teller") { echo "selected=\"selected\"";}?>>Teller</option>
                      <option name="Type_user" value="CSO" <?php if ($TYPE_USER=="CSO") { echo "selected=\"selected\"";}?> >CSO</option>
                    </select>
                  </div>
                  <div class="form-group align-self-end">
                  <input class="btn btn-primary" type="submit" name="Edit" value="Edit">
                  <input class="btn btn-danger" type="reset" name="Hapus" value="Reset">
                  <a class="btn btn-warning" href="index.php?page=pengguna">Cancel</a>
                  </div>
                </form>

                <form id="quickfrom" method="post" enctype="multipart/form-data">
                <div class="form-group">
                <input class="form-control" type="hidden" name="Id_pengguna"  value="<?php echo $ID;?>">
                    <label for="Type_user">File sebelumnya</label>
                    <div class="col-md-10">
                      <img src="../images/pengguna/<?php echo $PHOTO; ?>" alt="Foto Pengguna" width="200px">
                    </div>  
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Photo User</label>
                    <input class="form-control-file" name="File_photo" id="File_photo" type="file" aria-describedby="fileHelp">
                  </div>
                  <div class="form-group align-self-end">
                  <input class="btn btn-primary" type="submit" name="Edit_photo" value="Edit">
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