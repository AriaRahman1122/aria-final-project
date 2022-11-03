<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>TAMBAH KARYAWAN</title>
   
  </head>
<body>
  <?php

  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah KARYAWAN</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="petugas.php">Data KARYAWAN</a></div>
              <div class="breadcrumb-item">Tambah KARYAWAN</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Tambah KARYAWAN</h2>
            <p class="section-lead">Tambah KARYAWAN Disini</p>
          <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah KARYAWAN</h4>
                  </div>
                  <div class="card-body">
                    <div class="row mt-4">
                      <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-school"></i>
                            </div>
                            <div class="wizard-step-label">
                              Formulir KARYAWAN
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <form class="wizard-content mt-2" method="post" action="proses_tambahsiswa.php">
                      <div class="wizard-pane">
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">NIK</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nisn" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">Id Karyawan</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nis" class="form-control">
                          </div>
                        </div>
                         <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">NAMA</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nama" class="form-control">
                          </div>
                        </div>
                         <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">ALAMAT</label>
                          <div class="col-lg-4 col-md-6">
                             <select  class="form-control" name="id_kelas">
                             <option value="not_option">Silahkan Pilih kabupaten</option>
                              <?php
                                  // jalankan query untuk menampilkan semua data diurutkan berdasarkan
                                  $query = "SELECT * FROM kelas ORDER BY nama_kelas ASC";
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
                             <option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
                             <?php
                                    $no++; //untuk nomor urut terus bertambah 1
                                  }
                                  ?>
                             </select>
                                    
                                  </div>
    
                                </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">No Divisi</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="alamat" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">NO TELP</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="no_telp" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-left">Tahun Masuk</label>
                          <div class="col-lg-4 col-md-6">
                             <select  class="form-control" name="tahun">
                             <option value="not_option"> Silahkan Pilih Tahun Masuk</option>
                              <?php
                                  // jalankan query untuk menampilkan semua data diurutkan berdasarkan
                                  $query = "SELECT * FROM spp ORDER BY tahun ASC";
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
                             <option value="<?php echo $row['id_spp']; ?>"><?php echo $row['tahun']; ?></option>
                             <?php
                                    $no++; //untuk nomor urut terus bertambah 1
                                  }
                                  ?>
                             </select>
                                    
                                  </div>
    
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-4"></div>
                          <div class="col-lg-4 col-md-6 text-right">
                            <button type="submit" class="btn btn-icon icon-right btn-primary">Tambah  KARYAWAN<i class="fas fa-arrow-right"></i></button>>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://smkalihsan.home.blog/">Kuli-Coolly</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
    </div>