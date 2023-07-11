<?php
$FOTO = @$_FILES['File_photo']['tmp_name'];
$TARGET = '../images/pengguna/';
$GAMBAR= @$_FILES['File_photo']['name'];
$ID = mysqli_real_escape_string ($KONEKSI,$_POST['Id_pengguna']);

if ($GAMBAR == "") {
    echo "
    <div class='alert alert-suscess'>
        <center>
        <strong>ERROR</strong><br>Pastikan Gambar Telah Diinput<br>
        Halaman Akan di Redirect Otomatis
        </center>
    </div>
    <meta http-equiv='refresh' content=2;>
";
}
else {
    $UPDATE_GAMBAR = move_uploaded_file($FOTO, $TARGET.$GAMBAR);
    if ($UPDATE_GAMBAR) {
        $QUERY=mysqli_query($KONEKSI, "UPDATE tbl_user SET photo_user = '$GAMBAR' WHERE id_user= '$ID' ;") or die (mysqli_error($QUERY));
    }
}
echo "
    <div class='alert alert-suscess'>
        <center>
        <strong>Edit Foto Berhasil</strong>
        Halaman Akan di Redirect Otomatis
        </center>
    </div>
    <meta http-equiv='refresh' content='2; url=index.php?page=pengguna'>
";
?>