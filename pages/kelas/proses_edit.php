<?php
$ID = mysqli_real_escape_string ($KONEKSI,@$_POST['Id_kelas']);
$TINGKAT = mysqli_real_escape_string ($KONEKSI,@$_POST['Tingkat']);
$NAMA_KELAS = mysqli_real_escape_string ($KONEKSI,@$_POST['Nama_kelas']);


if ($ID=="" || $TINGKAT=="" || $NAMA_KELAS=="") {
    echo "
    <div class='alert alert-suscess'>
        <center>
        <strong>ERROR</strong><br>Pastikan Semua Data Terisi<br>
        Halaman Akan di Redirect Otomatis
        </center>
    </div>
    <meta http-equiv='refresh' content=2;>
";
} 
else {
    $QUERY = mysqli_query($KONEKSI,"UPDATE tbl_kelas SET
    id_kelas     = '$ID',
    tingkat   = '$TINGKAT',
    nama_kelas    = '$NAMA_KELAS' WHERE id_kelas ='$ID';") or die ("Gagal Melakukan Update Data".mysqli_connect_error($QUERY));
     
     echo "
     <div class='alert alert-suscess'>
         <center>
         <strong>EDIT DATA BERHASIL</strong>
         Halaman Akan di Redirect Otomatis
         </center>
     </div>
     <meta http-equiv='refresh' content='2; url=index.php?page=kelas'>
    ";
    
    
    }
    ?>