<?php
@session_start();
include "../inc/koneksi.php";
include "../inc/informasi.php";
include "../inc/function.php";
if (@$_SESSION['username'])
  {
    if (@$_SESSION['id_userlevel']=='Admin') {
      header ("location:../admin/index.php");
    }
    else {
    if (!@$_SESSION['id_userlevel']=='Teller') { header ("location:../teller/index.php");}
    elseif (@$_SESSION['id_userlevel']=='CSO') { header ("location:../cso/index.php");}
    }
  }
else {
  header("location:../inc/login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Admin <?php echo $DATA_INFO['nama_organisasi'] ?> </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/assets-admin/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Saturday Bank</a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="../inc/logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <?php@$page=$_GET["page"];?>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">Rofie Amrulloh</p>
          <p class="app-sidebar__user-designation">Admin </p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="treeview-item" href="#"><i class="icon"></i>Transaksi</a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-money"></i><span class="app-menu__label">Tabungan Nasabah</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href=#><i class="icon fa fa-arrow-right"></i>Tabungan Masuk</a></li>
            <li><a class="treeview-item" href=#><i class="icon fa fa-arrow-left"></i>Tabungan Keluar</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bar-chart"></i><span class="app-menu__label">Transaksi Bank Saturday</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href=#><i class="icon fa fa-arrow-right"></i>Pembayaran Siswa</a></li>
            <li><a class="treeview-item" href=#><i class="icon fa fa-arrow-left"></i>Penarikan Saldo</a></li>
          </ul>
        </li>
        <li><a class="treeview-item" href="#"><i class="icon"></i>Nasabah</a></li>
        <li class="treeview"><a class="app-menu__item" href="?page=nasabah"><i class="app-menu__icon fa fa-user-circle"></i><span class="app-menu__label">Data Nasabah</span><i class="treeview-indicator"></i></a>
        <li class="treeview"><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa fa-window-close-o"></i><span class="app-menu__label">Tidak Menabung</span><i class="treeview-indicator"></i></a>
        <li class="treeview"><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-address-book-o"></i><span class="app-menu__label">Nasabah Lulus/Keluar</span><i class="treeview-indicator"></i></a>
        <li class="treeview"><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-credit-card"></i><span class="app-menu__label">Saldo Nasabah</span><i class="treeview-indicator"></i></a>
        </li>
        <li><a class="treeview-item" href="#"><i class="icon"></i>Rekap Transaksi</a></li>
        <li class="treeview"><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa fa-envelope-o"></i><span class="app-menu__label">Laporan Keuangan</span><i class="treeview-indicator"></i></a>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-archive"></i><span class="app-menu__label">Rekap Tabungan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href=#><i class="icon fa fa-circle-o"></i>Lihat Transaksi</a></li>
            <li><a class="treeview-item" href=#><i class="icon fa fa-circle-o"></i>Lihat Saldo</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-fax"></i><span class="app-menu__label">Rekap Pembayaran</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href=#><i class="icon fa fa-circle-o"></i>Lihat Transaksi</a></li>
            <li><a class="treeview-item" href=#><i class="icon fa fa-circle-o"></i>Lihat Saldo</a></li>
          </ul>
          <li class="treeview"><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Laporan Peringkat</span><i class="treeview-indicator"></i></a>
        </li>
        <li><a class="treeview-item" href="#"><i class="icon"></i>Pengaturan</a></li>
        <li class="treeview"><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label">Pengaturan Bank Saturday</span><i class="treeview-indicator"></i></a>
        <li class="treeview"><a class="app-menu__item" href="?page=info"><i class="app-menu__icon fa fa-wrench"></i><span class="app-menu__label">Pengaturan Sistem</span><i class="treeview-indicator"></i></a>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cogs"></i><span class="app-menu__label">Pengaturan Nasabah</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="?page=kelas"><i class="icon fa fa-circle-o"></i>Kelas</a></li>
            <li><a class="treeview-item" href=#><i class="icon fa fa-circle-o"></i>Naik Kelas</a></li>
            <li><a class="treeview-item" href=#><i class="icon fa fa-circle-o"></i>Naik Kelas Semua</a></li>
          </ul>
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-history"></i><span class="app-menu__label">History</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href=#><i class="icon fa fa-lock"></i>Login</a></li>
            <li><a class="treeview-item" href=#><i class="icon fa fa-circle-o"></i>Transaksi</a></li>
            <li><a class="treeview-item" href=#><i class="icon fa fa-circle-o"></i>Bank Saturday</a></li>
            <li><a class="treeview-item" href=#><i class="icon fa fa-circle-o"></i>Nasabah</a></li>
          </ul>
          <li class="treeview"><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-server"></i><span class="app-menu__label">Backup & Restore</span><i class="treeview-indicator"></i></a>
          <li class="treeview"><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-refresh"></i><span class="app-menu__label">SInkronisai Transaksi</span><i class="treeview-indicator"></i></a>
          <li><a class="treeview-item" href="#"><i class="icon"></i>Akun</a></li>
          <li class="treeview"><a class="app-menu__item" href="?page=pengguna"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Akun Pengguna</span><i class="treeview-indicator"></i></a>
          <li class="treeview"><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-male"></i><span class="app-menu__label">Profile</span><i class="treeview-indicator"></i></a>
          <li class="treeview"><a class="app-menu__item" href="../inc/logout.php"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Keluar</span><i class="treeview-indicator"></i></a>
      </ul>
    </aside>
      
      <?php include "../inc/menu.php"?>
    <!-- Essential javascripts for application to work-->
    <script src="../assets/assets-admin/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/assets-admin/js/popper.min.js"></script>
    <script src="../assets/assets-admin/js/bootstrap.min.js"></script>
    <script src="../assets/assets-admin/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../assets/assets-admin/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>