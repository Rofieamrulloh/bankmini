<?php

@$page=$_GET['aksi'];

switch ($page) {
        case 'tambah':
            include "tambah_data.php";
            break;    
        case 'edit_data':
            include "edit.php";
            break;    
        case 'hapus_data':
            include "hapus.php";
            break;     
        case 'proses_hapus':
            include "proses_hapus.php";
            break;  
        case 'laporan':
            include "../laporan/tampil_info.php";
            break;
            
    default:
            include 'tampil.php';
            break;
}

?>