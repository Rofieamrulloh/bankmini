<?php
@session_start();
include "function.php";
include "koneksi.php";
$USER = addslashes(@$_POST['Username']);
$PASS = addslashes(@$_POST['Password']);

$QUERY = mysqli_query($KONEKSI,"SELECT * FROM tbl_user WHERE username= '$USER' AND password= '$PASS'");

$HASIL = mysqli_num_rows($QUERY);
$DATA = mysqli_fetch_array ($QUERY);

$ID = $DATA['id_user'];
$WAKTU = getCurrentTime();
$IP = IP_ADD();
$KTG = $DATA['nama_user'].' Login';

if ($HASIL ==1) {

    $QUERY = mysqli_query($KONEKSI, "INSERT INTO tbl_userlog SET
    id_user = '$ID',
    waktu = '$WAKTU',
    ip_address = '$IP',
    keterangan = '$KTG';");

    $_SESSION['username'] = $DATA['username'];
    $_SESSION['id_userlevel'] = $DATA['id_userlevel'];
    if ($DATA['id_userlevel']== "Admin") { header("location:../admin/index.php"); }
        elseif ($DATA['id_userlevel'] == "Teller") {header("location:../teller/index.php"); }
        elseif ($DATA['id_userlevel'] == "CSO") {header("location:../cso/index.php"); }


echo "
        <div class='alert alert-suscess'>
            <center>
            <strong>LOGIN BERHASIL</strong><br>
            Halaman Akan di Redirect Otomatis
            </center>
        </div>
        <meta http-equiv='refresh' content=2;>
    ";
}
else {
    echo "<div class='alert alert-suscess'>
            <center>
            <strong>LOGIN GAGAL</strong><br>
             Periksa Username dan Password!
             </center>
        </div>
        <meta http-equiv='refresh' content=2;>";
}
?>