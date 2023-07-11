<?php
$ID = $_GET['id'];
$sql = "SELECT COUNT(id_nasabah) FROM tbl_transaksi WHERE id_nasabah ='$ID'";
$result = mysqli_query($KONEKSI, $sql);
$count = mysqli_fetch_array($result)[0];
if ($count > 0) {
    echo "<div class='alert alert-suscess'>
    <center><br><br><br>
    <strong>Data Tidak Dapat Dihapus</strong><br>
    <strong>Karena Nasabah Memiliki Riwayat Transaksi</strong><br>
    <br>Halaman Akan Di Redirect Otomatis
    </center>
</div>
<meta http-equiv='refresh' content='1; url=index.php?page=nasabah'>".mysqli_connect_error();
} else {

$SQL = "DELETE FROM tbl_nasabah WHERE id_nasabah='$ID'";
mysqli_query($KONEKSI,$SQL);


echo "<div class='alert alert-suscess'>
<center><br><br><br>
<strong>Data Berhasil Dihapus</strong><br>
Halaman Akan Di Redirect Otomatis
</center>
</div>
<meta http-equiv='refresh' content='1; url=index.php?page=nasabah'>";
}
?>
