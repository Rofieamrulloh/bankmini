<?php
session_start();
include "koneksi.php";

function getCurrentTime(){
    return date('Y-m-d H:i:s');
}

$USER = $_SESSION['username'];

$QUERY = mysqli_query($KONEKSI, "SELECT * FROM tbl_user WHERE username= '$USER'");

$HASIL = mysqli_num_rows($QUERY);
$DATA = mysqli_fetch_array($QUERY);

$ID = $DATA['id_user'];
$WAKTU = getCurrentTime();
$IP = $_SERVER['REMOTE_ADDR'];
$KTG = $DATA['nama_user']." Logout";


    $QUERY_LOG = mysqli_query($KONEKSI, "INSERT INTO tbl_userlog SET
    id_user = '$ID',
    waktu = '$WAKTU',
    ip_address = '$IP',
    keterangan = '$KTG';");

session_destroy();
header("location:login.php");
?>