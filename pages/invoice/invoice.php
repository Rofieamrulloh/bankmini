<?php

@$page=$_GET['aksi'];

switch ($page) {
        case 'laporannasabah':
            include '../nasabah/laporan/tampil.php';
            break;    
        case 'lihat_transaksi':
            include "lihat_transaksi.php";
            break;    
            
    default:
            include 'tampil.php';
            break;
}

?>