<?php
$ID = $_GET['id'];
$SQL = "DELETE FROM tbl_kelas WHERE id_kelas = '$ID'";
mysqli_query($KONEKSI,$SQL);
    echo "
    <div class='alert alert-suscess'>
        <center>
        <strong>Hapus Data Berhasil</strong><br>
        Halaman Akan di Redirect Otomatis
        </center>
    </div>
    <meta http-equiv='refresh' content='2; url=index.php?page=kelas'>
";
?>
<meta http-equiv='refresh' content="2; url=index.php?page=kelas">