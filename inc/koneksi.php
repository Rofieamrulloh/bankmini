<?php
$SERVER = 'localhost';
$USERNAME = 'root';
$PASS = '';
$DATABASE = 'db_bankmini2122';

$KONEKSI=mysqli_connect($SERVER,$USERNAME,$PASS,$DATABASE);

if (mysqli_connect_error($KONEKSI)) {
    echo "koneksi ke database gagal bro...!". mysqli_connect_error;
}

?>