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


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>



            <!-- Nav Item - Pages Collapse Menu -->
            
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="spp.php">
                    <i class="fas fa-money-check"></i>
                    <span>Data SPP</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="kelas.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Kelas</span></a>
            </li>

             <div class="sidebar-heading">
                User
            </div>



            <!-- Nav Item - Pages Collapse Menu -->
            
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="pengguna.php">
                    <i class="fas fa-users"></i>
                    <span>Data Pengguna</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="siswa.php">
                    <i class="fas fa-user"></i>
                    <span>Data Siswa</span></a>
            </li>

              <div class="sidebar-heading">
                History
            </div>



            <!-- Nav Item - Pages Collapse Menu -->
            
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="pengguna.php">
                    <i class="fas fa-credit-card"></i>
                    <span>Transaksi Pembayaran</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="siswa.php">
                    <i class="fas fa-book"></i>
                    <span>Laporan</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
    

        </ul>
        <!-- End of Sidebar -->
 <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                           
                         

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <p align="center"><h5 align="center"> <b><?php echo $_SESSION['username']; ?></b> <b><?php echo $_SESSION['level']; ?></h5></b></p></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

  <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                 
 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <h5 class="title">Edit Pembayaran <?php echo $data['nisn']; ?></h5>
              </div>
              <div class="card-body">
                 <form method="POST" action="proses_editpembayaran.php" enctype="multipart/form-data" >
                  <section class="base">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                         <input type="text" class="form-control" name="id" value="<?php echo $data['id_pembayaran']; ?>" hidden />
                        <label>Nama Petugas</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-single-02"></i></div>
                      </div>
                        <input type="text" class="form-control" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" disabled="" />
                      </div>
                    </div>
                      <div class="form-group">
                        <label>NISN</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-badge"></i></div>
                      </div>
                        <input type="text" class="form-control" name="nisn" value="<?php echo $data['nisn']; ?>" disabled=""/>
                      </div>
                    </div>
                       <div class="form-group">
                        <label>Tanggal Bayar</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-calendar-60"></i></div>
                      </div>
                        <input type="date" class="form-control" name="tgl_bayar" value="<?php echo $data['tgl_bayar']; ?>"  />
                      </div>
                    </div>
                         <div class="form-group">
                        <label>Bulan Dibayar</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-calendar-60"></i></div>
                      </div>
                        <input type="text" class="form-control" name="bulan_dibayar" value="<?php echo $data['bulan_dibayar']; ?>"  />
                      </div>
                    </div>
                       <div class="form-group">
                        <label>Tahun Dibayar</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-calendar-60"></i></div>
                      </div>
                        <input type="text" class="form-control" name="tahun_dibayar" value="<?php echo $data['tahun_dibayar']; ?>"  />
                      </div>
                    </div>
                         <div class="form-group">           
                      <label>SPP Perbulan</label>
                      <div class="input-group">
                     <div class="col-lg-12 col-md-12">
                <select  class="form-control" name="id_spp">
                      <?php
                       $idkelasyangdipilih=$data['id_spp']; 
                          // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                          $query = "SELECT * FROM spp ORDER BY nominal ASC";
                          $result = mysqli_query($koneksi, $query);
                          //mengecek apakah ada error ketika menjalankan query
                          if(!$result){
                            die ("Query Error: ".mysqli_errno($koneksi).
                               " - ".mysqli_error($koneksi));
                          }

                          //buat perulangan untuk element tabel dari data mahasiswa
                          $no = 1; //variabel untuk membuat nomor urut
                          // hasil query akan disimpan dalam variabel $data dalam bentuk array
                          // kemudian dicetak dengan perulangan while
                          while($row = mysqli_fetch_assoc($result))
                          {
                          ?>
                      <option class="bg-dark" value="<?php echo $row['id_spp']; ?>" <?php if($row['id_spp']=="$idkelasyangdipilih"){?> selected="selected" <?php } ?>><?php echo $row['nominal']; ?></option>
                     <?php
                            $no++; //untuk nomor urut terus bertambah 1
                          }
                          ?>  
                     </select>
                     </div>
                     </div>
                </div>
                <div class="form-group">
                        <label>Jumlah Bayar</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-coins"></i></div>
                      </div>
                        <input type="text" class="form-control" name="jumlah_bayar" value="<?php echo $data['jumlah_bayar']; ?>"  />
                      </div>
                    </div>
                  </div>
                   </section>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-fill btn-success"><i class="fas fa-check"></i></button>
                    </div>
                </form>
              </div>
            </div>
          </div>

                      <br><br>
<?php 
}

else if($_SESSION['level']=="petugas"){

   ?>
    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="pengguna.php">
                    <i class="fas fa-credit-card"></i>
                    <span>Transaksi Pembayaran</span></a>
            </li>

     
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
    

        </ul>
        <!-- End of Sidebar -->
 <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                           
                         

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <p align="center"><h5 align="center"> <b><?php echo $_SESSION['username']; ?></b> <b><?php echo $_SESSION['level']; ?></h5></b></p></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                 <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <h5 class="title">Edit Pembayaran <?php echo $data['nisn']; ?></h5>
              </div>
              <div class="card-body">
                 <form method="POST" action="proses_editpembayaran.php" enctype="multipart/form-data" >
                  <section class="base">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                         <input type="text" class="form-control" name="id" value="<?php echo $data['id_pembayaran']; ?>" hidden />
                        <label>Nama Petugas</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-single-02"></i></div>
                      </div>
                        <input type="text" class="form-control" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" disabled="" />
                      </div>
                    </div>
                      <div class="form-group">
                        <label>NISN</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-badge"></i></div>
                      </div>
                        <input type="text" class="form-control" name="nisn" value="<?php echo $data['nisn']; ?>" disabled=""/>
                      </div>
                    </div>
                       <div class="form-group">
                        <label>Tanggal Bayar</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-calendar-60"></i></div>
                      </div>
                        <input type="date" class="form-control" name="tgl_bayar" value="<?php echo $data['tgl_bayar']; ?>"  />
                      </div>
                    </div>
                         <div class="form-group">
                        <label>Bulan Dibayar</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-calendar-60"></i></div>
                      </div>
                        <input type="text" class="form-control" name="bulan_dibayar" value="<?php echo $data['bulan_dibayar']; ?>"  />
                      </div>
                    </div>
                       <div class="form-group">
                        <label>Tahun Dibayar</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-calendar-60"></i></div>
                      </div>
                        <input type="text" class="form-control" name="tahun_dibayar" value="<?php echo $data['tahun_dibayar']; ?>"  />
                      </div>
                    </div>
                         <div class="form-group">           
                      <label>SPP Perbulan</label>
                      <div class="input-group">
                     <div class="col-lg-12 col-md-12">
                <select  class="form-control" name="id_spp">
                      <?php
                       $idkelasyangdipilih=$data['id_spp']; 
                          // jalankan query untuk menampilkan semua data diurutkan berdasarkan id
                          $query = "SELECT * FROM spp ORDER BY nominal ASC";
                          $result = mysqli_query($koneksi, $query);
                          //mengecek apakah ada error ketika menjalankan query
                          if(!$result){
                            die ("Query Error: ".mysqli_errno($koneksi).
                               " - ".mysqli_error($koneksi));
                          }

                          //buat perulangan untuk element tabel dari data mahasiswa
                          $no = 1; //variabel untuk membuat nomor urut
                          // hasil query akan disimpan dalam variabel $data dalam bentuk array
                          // kemudian dicetak dengan perulangan while
                          while($row = mysqli_fetch_assoc($result))
                          {
                          ?>
                      <option class="bg-dark" value="<?php echo $row['id_spp']; ?>" <?php if($row['id_spp']=="$idkelasyangdipilih"){?> selected="selected" <?php } ?>><?php echo $row['nominal']; ?></option>
                     <?php
                            $no++; //untuk nomor urut terus bertambah 1
                          }
                          ?>  
                     </select>
                     </div>
                     </div>
                </div>
                <div class="form-group">
                        <label>Jumlah Bayar</label>
                        <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="tim-icons icon-coins"></i></div>
                      </div>
                        <input type="text" class="form-control" name="jumlah_bayar" value="<?php echo $data['jumlah_bayar']; ?>"  />
                      </div>
                    </div>
                  </div>
                   </section>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-fill btn-danger"><i class="fas fa-check"></i></button>
                    </div>
                </form>
              </div>
            </div>
          </div>

                      <br><br>
                  <?php
    }
    
    
    ?>