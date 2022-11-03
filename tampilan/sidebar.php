<?php 
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:index.php?pesan=belummasuk");
  }

  ?>
  <?php
  if($_SESSION['level']=="admin"){
  ?>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets2/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            Halo <b><?php echo $_SESSION['username']; ?></b> Anda adalah <b><?php echo $_SESSION['level']; ?></b></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="dashboard.php">Kuli-Coolly</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">MH</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="dashboard.php">Menu Utama</a></li>
                </ul>
              </li>
              <li class="menu-header">Data</li>
              <li><a class="nav-link" href="spp.php"><i class="fas fa-database"></i> <span>DATA PEMESANAN</span></a></li>
              <li><a class="nav-link" href="kabupaten.php"><i class="fas fa-database"></i> <span>DATA ZONASI</span></a></li>
              <li class="menu-header">Personal</li>
              <li><a class="nav-link" href="petugas.php"><i class="fas fa-user-edit"></i> <span>ADMIN</span></a></li>
              <li><a class="nav-link" href="siswa.php"><i class="fas fa-user-graduate"></i> <span>KARYAWAN</span></a></li>
              <li class="menu-header">Fitur</li>
             <li><a class="nav-link" href="pembayaran.php"><i class="fas fa-money-check-alt"></i> <span>TRANSAKSI PEMBAYARAN</span></a></li>
			  <li><a class="nav-link" href="laporan.php"><i class="fas fa-money-check-alt"></i> <span>LAPORAN PEMBAYARAN</span></a></li>
        </aside>
        <br><br>
      </div>
<?php 
}

else if($_SESSION['level']=="petugas"){

   ?>


<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets2/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            Halo <b><?php echo $_SESSION['username']; ?></b> Anda adalah <b><?php echo $_SESSION['level']; ?></b></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Kuli-Coolly</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">K-C</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="dashboard.php">Menu Utama</a></li>
                </ul>
              </li>
              <li class="menu-header">Fitur</li>
              <li><a class="nav-link" href="dashboard2.php"><i class="fas fa-money-check-alt"></i> <span>PRODUCT</span></a></li>
        </aside>
      </div>
      
      <?php
  }
  
  
  ?>