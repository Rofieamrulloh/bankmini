<?php
$ID = $_GET['id'];

// Cek Nama Foto
$SQL_GAMBAR = "SELECT * FROM tbl_user WHERE id_user='$ID'" or die("Gagal Melakukan Query".mysqli_error());
$HASIL = mysqli_query($KONEKSI, $SQL_GAMBAR);
$ROW = mysqli_fetch_array($HASIL);
$FILE = $ROW['photo_user'];

// Proses Hapus Data
$SQL = "DELETE FROM tbl_user WHERE id_user='$ID'";
mysqli_query($KONEKSI, $SQL);

// Proses Hapus Foto
if (file_exists("../images/pengguna/$FILE")) {
    unlink("../images/pengguna/$FILE");
}
?>
<meta http-equiv='refresh' content="2; url=index.php?page=pengguna">