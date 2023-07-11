<?php
$NAMA_ORGANISASI = mysqli_real_escape_string ($KONEKSI,$_POST['Nama_Organisasi']);
$EMAIL = mysqli_real_escape_string ($KONEKSI,$_POST['Email']);
$ALAMAT = mysqli_real_escape_string ($KONEKSI,$_POST['Alamat']);
$KELURAHAN = mysqli_real_escape_string ($KONEKSI,$_POST['Kelurahan']);
$KECAMATAN = mysqli_real_escape_string ($KONEKSI,$_POST['Kecamatan']);
$KABUPATEN = mysqli_real_escape_string ($KONEKSI,$_POST['Kabupaten']);
$PROVINSI = mysqli_real_escape_string ($KONEKSI,$_POST['Provinsi']);
$KODEPOS = mysqli_real_escape_string ($KONEKSI,$_POST['Kodepos']);
$TELEPON = mysqli_real_escape_string ($KONEKSI,$_POST['Telepon']);
$PIMPINAN = mysqli_real_escape_string ($KONEKSI,$_POST['Pimpinan']);
$BENDAHARA = mysqli_real_escape_string ($KONEKSI,$_POST['Bendahara']);

if ($NAMA_ORGANISASI =="" || $EMAIL1 ="" || $ALAMAT1 ="" || $KELURAHAN1 ="" || $KECAMATAN1 ="" || $KABUPATEN1 ="" || $PROVINSI1 ="" || $KODEPOS1 ="" || $TELEPON1 ="" || $PIMPINAN1 ="" || $BENDAHARA1 ="") {
echo "
    <div class='alert alert-suscess'>
        <center>
        <strong>ERRO</strong>Pastikan Semua Data Terisi<br>
        Halaman Akan di Redirect Otomatis
        </center>
    </div>
    <meta http-equiv='refresh' content=2;>
";
}
else {
$QUERY = mysqli_query ($KONEKSI, "UPDATE tbl_informasi SET 
    nama_organisasi   = '$NAMA_ORGANISASI',
    email_organisasi  = '$EMAIL',
    alamat_organisasi = '$ALAMAT',
    kel_organisasi = '$KELURAHAN',
    kec_organisasi = '$KECAMATAN',
    kab_organisasi = '$KABUPATEN',
    prov_organisasi = '$PROVINSI',
    kodepos_organisasi = '$KODEPOS',
    telp_organisasi   = '$TELEPON',
    pimpinan          = '$PIMPINAN',
    bendahara         = '$BENDAHARA' WHERE id_informasi =1;") or die ("Gagal melakukan update data....! mysqli_error($QUERY)");
echo "
<div class='alert alert-suscess'>
    <center>
    <strong>UPDATE DATA SUKSES</strong><br>
    Halaman Akan di Redirect Otomatis
    </center>
</div>
<meta http-equiv='refresh' content=2;>
";
}



?>