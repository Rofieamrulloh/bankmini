<?php

@$page=$_GET['page'];

switch ($page) {
    case 'info':
        include "../pages/info/info.php";
        break;
    case 'pengguna':
            include "../pages/pengguna/pengguna.php";
            break;
    case 'kelas':
            include "../pages/kelas/kelas.php";
            break;
    case 'nasabah':
            include "../pages/nasabah/nasabah.php";
            break;
    case 'tabunganmasuk':
            include "../pages/tabunganmasuk/tabungan.php";
            break;
    case 'tabungankeluar':
            include "../pages/tabungankeluar/tabungan.php";
            break;
    case 'invoice':
            include "../pages/invoice/invoice.php";
            break;
    case 'laporan':
            include "../pages/laporan/laporan.php";
            break;
    default:
           echo "test";
            break;

}
?>