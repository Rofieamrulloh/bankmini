<?php
$ID_NASABAH = mysqli_real_escape_string($KONEKSI,$_POST['IdNasabah']);
$CODE = mysqli_real_escape_string($KONEKSI,$_POST['Code']);
$TANGGAL = mysqli_real_escape_string($KONEKSI,$_POST['Tanggal']);
$RP = mysqli_real_escape_string($KONEKSI,$_POST['Saldo']);
$ID_TRANSAKSI = mysqli_real_escape_string($KONEKSI,$_POST['IdTransaksi']);

$SQL = "SELECT * FROM tbl_nasabah WHERE id_nasabah='$ID_NASABAH'" or die ("Gagal Melakukan Query".mysqli_error());
$HASIl =  mysqli_query($KONEKSI, $SQL);
$SHF = mysqli_fetch_array($HASIl);
$KTG = "Tabungan Siswa".$SHF['nama_nasabah'];

$query = "SELECT SUM(nominal) AS total_nominal_sts FROM tbl_transaksi WHERE kode_transaksi LIKE 'STS%' AND id_nasabah = '$ID_NASABAH' AND status_transaksi != 3";
$result = mysqli_query($KONEKSI, $query);
$data1 = mysqli_fetch_assoc($result);

$query = "SELECT SUM(nominal) AS total_nominal_pts FROM tbl_transaksi WHERE kode_transaksi LIKE 'PTS%' AND id_nasabah = '$ID_NASABAH' AND status_transaksi != 3";
$result = mysqli_query($KONEKSI, $query);
$data2 = mysqli_fetch_assoc($result);

$TOTAL = $data1["total_nominal_sts"] - $data2["total_nominal_pts"];

$USER =  $_SESSION['username'];
$QUERY = mysqli_query($KONEKSI, "SELECT * FROM tbl_user WHERE username='$USER'");
$DATA = mysqli_fetch_array($QUERY);
$PTG = $DATA['nama_user'];
$ID = $DATA['id_user'];

if ($TOTAL < $RP) {
    echo "<div class='alert alert-suscess'>
    <center>
    <strong>ERROR</strong><br>Pastikan Saldo Tercukupi<br>
    Halaman Akan di Redirect Otomatis
    </center>
    </div>
    <meta http-equiv='refresh' content=2;>";
} else {

$JENIS_TRANSAKSI = 2;
$STATUS = 2;

// echo $ID.$NAMA.$JENKEL.$TEMPAT.$TANGGAL.$ALAMAT.$TELP.$PENGENAL.$NO.$KELAS;
if ($ID_NASABAH=="" || $JENIS_TRANSAKSI=="" || $CODE=="" || $KTG=="" || $RP=="" ) {
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
 
 echo "
 <div class='alert alert-suscess'>
     <center>
     <strong>EDIT DATA BERHASIL</strong>
     Halaman Akan di Redirect Otomatis
     </center>
 </div>
 <meta http-equiv='refresh' content='2; url=index.php?page=tabungankeluar'>
";


 }}
?>