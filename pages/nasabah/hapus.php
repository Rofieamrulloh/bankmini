<?php
$ID =$_GET['id'];
include "../inc/koneksi.php";

$SQL="SELECT * FROM `tbl_nasabah` WHERE id_nasabah='$ID'";
$QUERY = mysqli_query ($KONEKSI,$SQL) or die (mysqli_error());
$DATA = mysqli_fetch_array($QUERY);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data</title>
</head>
  <body>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h4>Apakah Anda Yakin Ingin Menghapus Data Nasabah yang Bernama <?php echo $DATA['nama_nasabah']?></h4>
    <a href="index.php?page=nasabah&aksi=proses_hapus&id=<?php echo $ID ?>">Hapus</a>|
    <a href="index.php?page=nasabah">Batal</a>
     </div>
</body>