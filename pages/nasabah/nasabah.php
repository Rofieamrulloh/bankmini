<?php

@$page=$_GET['aksi'];

switch ($page) {
        case 'tambah':
            include "tambah.php";
            break;    
        case 'edit':
            include "edit.php";
            break;    
        case 'hapus':
            include "hapus.php";
            break;     
        case 'proses_hapus':
            include "proses_hapus.php";
            break;
         case 'proses_hapus':
            include "proses_hapus.php";
            break;
        case 'info':
            include "info.php";
            break;
        case 'laporan':
            include "../laporan/tampil_nasabah.php";
            break;
            
    default:
            include 'tampil.php';
            break;
}

?>