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
                <div class="sidebar-brand-text mx-3"> Admin <sup></sup></div>
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
                <a class="nav-link" href="pembayaran.php">
                    <i class="fas fa-credit-card"></i>
                    <span>Transaksi Pembayaran</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="laporan.php">
                    <i class="fas fa-book"></i>
                    <span>Laporan Pembayaran</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="laporan2.php">
                    <i class="fas fa-book"></i>
                    <span>Laporan Siswa</span></a>
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
                  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" class="btn btn-link">
                           <?php
                        $kata_kunci="";
                        if (isset($_POST['kata_kunci'])) {
                            $kata_kunci=$_POST['kata_kunci'];
                        }
                        ?>
                   <input class="text-dark" type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" placeholder="Silahkan Cari Disini" required/>
                  <button class="btn btn-success" type="submit"><i class="fas fa-search fa-fw"></i></button>
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
                <div class="container-fluid bg-light">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-primary-800">DATA KELAS</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-success text-white" >
                            <h6 class="m-0 font-weight-bold"><a href="tambah_kelas.php">+ &nbsp;Tambah Kelas </a></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>Nama kelas</th>
                                            <th>Kompetensi keahlian</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                          // jalankan query untuk menampilkan semua data diurutkan berdasarkan id

                            if (isset($_POST['kata_kunci'])) {
                                $kata_kunci=trim($_POST['kata_kunci']);
                                $query="select * from kelas where id_kelas like '%".$kata_kunci."%' or nama_kelas like '%".$kata_kunci."%' or kompetensi_keahlian like '%".$kata_kunci."%' order by nama_kelas asc";

                            }else {
                                $query="select * from kelas order by nama_kelas asc";
                            }

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
                                       <tr>
                                          <td><?php echo $no; ?></td>
                                          <td><?php echo $row['nama_kelas']; ?></td>
                                          <td><?php echo substr($row['kompetensi_keahlian'], 0, 20); ?></td>
                                          <td>
                                              <a href="edit_kelas.php?id=<?php echo $row['id_kelas']; ?>">Edit</a> |
                                              <a href="proses_hapuskelas.php?id=<?php echo $row['id_kelas']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                                          </td>
                                      </tr>
                                         
                                      <?php
                                        $no++; //untuk nomor urut terus bertambah 1
                                      }
                                      ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                       <?php 
}

else if($_SESSION['level']=="petugas"){

   ?>

     <?php
    }
    
    
    ?>
