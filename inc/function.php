<?php
// Function Untuk penomoran ID

function autonumber($tabel,$kolom,$lebar=0,$awalan){
    include "koneksi.php";

    $AUTO = mysqli_query($KONEKSI, "SELECT $kolom FROM $tabel ORDER BY $kolom desc limit 1") or die (mysqly_error($AUTO));

    $JUMLAH_RECORD = mysqli_num_rows($AUTO);
        if ($JUMLAH_RECORD == 0) {
            $NUMBER=1;
        }
        else {
            $ROW = mysqli_fetch_array($AUTO);
            $NUMBER = intval(substr($ROW[0], strlen($awalan)))+1;

        }

        if ($lebar>0) {
            $ANGKA = $awalan.str_pad($NUMBER, $lebar,"0",STR_PAD_LEFT);
        } else {
            $ANGKA = $awalan.$NUMBER;

        }
        return $ANGKA;
}

// Untuk test function autonumber
//echo autonumber ("tbl_user","id_user",3,"PGN");

function rupiah($angka){
    $hasil="Rp.". number_format($angka, 2, ',', '.');
        return $hasil;
}

function getCurrentTime(){
    return date('Y-m-d H:i:s');
}
?>

<?php
function IP_ADD(){
    $IP = getenv('HTTP_CLIENT_IP')?:
    getenv('HTTP_X_FORWARDED_FOR')?:
    getenv('HTTP_X_FORWARDED')?:
    getenv('HTTP_FORWARDED_FOR')?:
    getenv('HTTP_FORWARDED')?:
    getenv('REMOTE_ADDR');

return $IP;
};

?>


