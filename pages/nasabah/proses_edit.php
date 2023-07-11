<?php
$ID = mysqli_real_escape_string ($KONEKSI,@$_POST['Id_nasabah']);
$NAMA = mysqli_real_escape_string ($KONEKSI,@$_POST['Nama_nasabah']);
$JENKEL = mysqli_real_escape_string ($KONEKSI,@$_POST['Jenkel']);
$TEMPAT = mysqli_real_escape_string ($KONEKSI,@$_POST['Tempat']);
$TANGGAL = mysqli_real_escape_string ($KONEKSI,@$_POST['Tanggal']);
$ALAMAT = mysqli_real_escape_string ($KONEKSI,@$_POST['Alamat']);
$TELP = mysqli_real_escape_string ($KONEKSI,@$_POST['Telepon']);
$PENGENAL = mysqli_real_escape_string ($KONEKSI,@$_POST['Pengenal']);
$NO = mysqli_real_escape_string ($KONEKSI,@$_POST['No_Pengenal']);
$KELAS = mysqli_real_escape_string ($KONEKSI,@$_POST['Kelas']);

// echo $ID.$NAMA.$JENKEL.$TEMPAT.$TANGGAL.$ALAMAT.$TELP.$PENGENAL.$NO.$KELAS;
if ($ID=="" || $NAMA=="" || $JENKEL=="" || $TEMPAT=="" || $TANGGAL=="" || $ALAMAT=="" || $TELP=="" || $PENGENAL=="" || $NO=="" || $KELAS=="") {
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
$QUERY = mysqli_query($KONEKSI,"UPDATE tbl_nasabah SET
    nama_nasabah   = '$NAMA',
    jenkel         = '$JENKEL',
    tempat_lahir   = '$TEMPAT',
    tgl_lahir      = '$TANGGAL',
    alamat_nasabah = '$ALAMAT',
    telp_nasabah   = '$TELP',
    jenis_pengenal = '$PENGENAL',
    no_pengenal    = '$NO',
    id_kelas= '$KELAS' WHERE id_nasabah='$ID';") or die ("Gagal melakukan update data....!. mysqli_error($QUERY)");
 
 echo "
 <div class='alert alert-suscess'>
     <center>
     <strong>EDIT DATA BERHASIL</strong>
     </center>
 </div>
 <meta http-equiv='refresh' content='2; url=index.php?page=nasabah'>
";
}
?>
