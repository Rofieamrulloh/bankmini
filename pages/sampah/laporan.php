<?php

@$page=$_GET['action'];

switch ($page) {
        case 'laporannasabah':
            include '../nasabah/laporan/tampil.php';
            break;    
        case 'lihat_transaksi':
            include "lihat_transaksi.php";
            break;    
            
    
}

?>