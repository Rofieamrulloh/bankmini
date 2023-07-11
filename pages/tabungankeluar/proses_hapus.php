<?php
$ID_TRANSAKSI = $_GET['id'];
$NASABAH = $_GET['nsb'];
$SQL = "SELECT * FROM tbl_transaksi WHERE id_transaksi='$ID_TRANSAKSI'" or die ("Gagal Melakukan Query".mysqli_error());
$HASIL = mysqli_query($KONEKSI,$SQL);
$DATA = mysqli_fetch_array($HASIL);

$USER = $_SESSION['username'];
$QUERY = mysqli_query($KONEKSI,"SELECT * FROM tbl_user WHERE username='$USER'");

$SQL1 = mysqli_fetch_array($QUERY);
$NAMA = $SQL1['nama_user']; 
$ID = $SQL1['id_user'];

$SQL2 = "SELECT * FROM tbl_nasabah WHERE id_nasabah='$NASABAH'" or die ("Gagal Melakukan Query".mysqli_error());
$HASIL = mysqli_query($KONEKSI,$SQL2);
$DATA = mysqli_fetch_array($HASIL);
$KTG = "Mendelete Data Transaksi".$DATA['nama_nasabah'];

$J_TRANSAKSI = 1;
$STATUS = 3;

$QUERY2 = mysqli_query($KONEKSI,"UPDATE tbl_transaksi SET
    id_user = '$ID',
    keterangan = '$KTG',
    status_transaksi = '$STATUS' WHERE id_transaksi = '$ID_TRANSAKSI';") or die ("Gagal Melakukan Delete Data".mysqli_error($QUERY2));

?>
<meta http-equiv='refresh' content='2; url=index.php?page=tabunganmasuk'>