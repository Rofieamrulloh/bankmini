<?php
$ID_NASABAH = mysqli_real_escape_string($KONEKSI,$_POST['IdNasabah']);
$CODE = mysqli_real_escape_string($KONEKSI,$_POST['Code']);
$TANGGAL = mysqli_real_escape_string($KONEKSI,$_POST['Tanggal']);
$RP = mysqli_real_escape_string($KONEKSI,$_POST['Saldo']);
$ID_TRANSAKSI = mysqli_real_escape_string($KONEKSI,$_POST['IdTransaksi']);

$SQL = "SELECT * FROM tbl_nasabah WHERE id_nasabah='$ID_NASABAH'" or die ("Gagal Melakukan Query".mysqli_error());
$HASIL =  mysqli_query($KONEKSI, $SQL);
$SHF = mysqli_fetch_array($HASIL);
$KTG = "Tabungan Siswa".$SHF['nama_nasabah'];

$USER =  $_SESSION['username'];
$QUERY = mysqli_query($KONEKSI, "SELECT * FROM tbl_user WHERE username='$USER'");
$DATA = mysqli_fetch_array($QUERY);
$PTG = $DATA['nama_user'];
$ID = $DATA['id_user'];

$SQL2 = "SELECT * FROM tbl_nasabah WHERE id_nasabah='$ID_NASABAH'" or die ("Gagal Melakukan Query".mysqli_error());
$HASIL = mysqli_query($KONEKSI,$SQL2);
$DATA = mysqli_fetch_array($HASIL);
$KETERANGAN = "Pengeditan atas nasabah id ".$DATA['id_nasabah'];

$JENIS_TRANSAKSI = 2;
$STATUS = 2;

// echo $ID.$NAMA.$JENKEL.$TEMPAT.$TANGGAL.$ALAMAT.$TELP.$PENGENAL.$NO.$KELAS;
if ($ID_NASABAH=="" || $JENIS_TRANSAKSI=="" || $CODE=="" || $KTG=="" || $RP=="" ) {
    echo "
    <div class='alert alert-suscess'>
        <center>
        <strong>ERRO</strong><br>Pastikan Semua Data Terisi<br>
        Halaman Akan di Redirect Otomatis
        </center>
    </div>
    <meta http-equiv='refresh' content=2;>
";
}else {
    // echo  $ID_NASABAH.$JENIS_TRANSAKSI.$CODE.$KTG.$RP.$ID.$TANGGAL.$STATUS;
$QUERY_INSERT = mysqli_query($KONEKSI,"UPDATE tbl_transaksi SET
    id_nasabah       = '$ID_NASABAH',
    jenis_transaksi  = '$JENIS_TRANSAKSI',
    kode_transaksi   = '$CODE',
    keterangan       = '$KTG',
    nominal          = '$RP',
    id_user          = '$ID',
    tgl_transaksi    = '$TANGGAL',
    status_transaksi = '$STATUS' WHERE id_transaksi='$ID_TRANSAKSI' ;") or die (mysqli_error($QUERY_INSERT));

$QUERY_LOG = mysqli_query($KONEKSI,"INSERT INTO tbl_transaksi_penyetoranlog SET
    kode_transaksi = '$CODE',
    id_user = '$ID',
    nominal = '$RP',
    tgl_penyetoran = '$TANGGAL',
    keterangan = '$KETERANGAN';") or die (mysqli_error($QUERY_INSERT));
 echo "
 <div class='alert alert-suscess'>
     <center>
     <strong>EDIT DATA BERHASIL</strong>
     Halaman Akan di Redirect Otomatis
     </center>
 </div>
 <meta http-equiv='refresh' content='2; url=index.php?page=tabunganmasuk'>
";


 }
?>