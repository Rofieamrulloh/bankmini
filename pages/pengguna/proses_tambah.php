<?php
$ID = mysqli_real_escape_string ($KONEKSI,@$_POST['Id_pengguna']);
$NAMA = mysqli_real_escape_string ($KONEKSI,@$_POST['Nama_pengguna']);
$USERNAME = mysqli_real_escape_string ($KONEKSI,@$_POST['Username']);
$PASSWORD = mysqli_real_escape_string ($KONEKSI,@$_POST['Password']);
$TYPE_USER = mysqli_real_escape_string ($KONEKSI,@$_POST['Type_user']);


if ($ID=="" || $NAMA=="" || $USERNAME=="" || $PASSWORD=="" || $TYPE_USER=="") {
    echo "
    <div class='alert alert-suscess'>
        <center>
        <strong>ERROR</strong><br>Pastikan Semua Data Terisi<br>
        Halaman Akan di Redirect Otomatis
        </center>
    </div>
    <meta http-equiv='refresh' content=2;>
";
}else {
$QUERY = mysqli_query($KONEKSI,"INSERT INTO tbl_user SET
    id_user     = '$ID',
    nama_user   = '$NAMA',
    username    = '$USERNAME',
    password    = '$PASSWORD',
    id_userlevel= '$TYPE_USER';") or die (mysqli_error($QUERY));
 
 echo "
 <div class='alert alert-suscess'>
     <center>
     <strong>TAMBAH DATA BERHASIL</strong>
     Halaman Akan di Redirect Otomatis
     </center>
 </div>
 <meta http-equiv='refresh' content='2; url=index.php?page=pengguna'>
";


}
?>
